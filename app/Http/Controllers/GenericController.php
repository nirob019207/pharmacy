<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generic;

class GenericController extends Controller
{
    public function Index()
    {

        $generics = Generic::withCount('medicines')->oldest()->paginate(30);


        return view('admin.generic.index', compact('generics'));
    }
    public function addGeneric()
    {

        return view('admin.generic.create');
    }


    public function StoreGeneric(Request $request)
{
    $request->validate([
        'name' => 'required|unique:generics',

    ]);

    $generic = Generic::create([
        'name' => $request->name,

    ]);

    // Access the related pharmacist's name using the relationship


    return redirect()->route('allgeneric')->with('message', "Generics added successfully! ");
}
public function editGeneric($id)
    {
        $generic =Generic::findOrFail($id);
        return view('admin.generic.edit', compact('generic'));
    }


    public function UpdateGeneric(Request $request)
    {
        $generic_id = $request->generic_id;
        $request->validate([
            'name' => 'required|unique:generics,name,' . $generic_id,

        ]);

        $generic =Generic::findOrFail($generic_id);
        $generic->update([
            'name' => $request->name,

        ]);

        // Access the related pharmacist's name using the relationship


        return redirect()->route('allgeneric')->with('message', "Company updated successfully!");
    }

    public function DeleteGeneric($id)
    {
        Generic::findOrFail($id)->delete();
        return redirect()->route('allgeneric')->with('message', "User deleted successfully");
    }
}
