<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Generic;
use App\Models\Company;
use App\Models\Stock;

class MadicineController extends Controller
{
    public function Index()
    {
        // Retrieve all medicines with their associated generic and company information
        $medicines = Medicine::with('generic', 'company','stocks')->get();

        return view('admin.madicine.index', compact('medicines'));
    }

    public function AddMedicine()
    {
        $generics = Generic::pluck('name', 'id')->toArray();
        $companies = Company::pluck('name', 'id')->toArray();

        return view('admin.madicine.create',compact('generics','companies'));
    }




    public function StoreMedicine(Request $request)
{
    $request->validate([
        'name' => 'required',
        'wmg' => 'required',
        'price' => 'required',
        'generic_id' => 'required',
        'company_id' => 'required',
    ]);

    // Create a new Medicine instance and assign the form input values
    $medicine = new Medicine();
    $medicine->name = $request->name;
    $medicine->wmg = $request->wmg;
    $medicine->price = $request->price;
    $medicine->generic_id = $request->generic_id;
    $medicine->company_id = $request->company_id;

    // Save the medicine to the database
    $medicine->save();

    return redirect()->route('allmedicine')->with('message', "Medicine added successfully!");
}


public function UpdateMedicine(Request $request)
    {
        $medicine_id = $request->medicine_id; // Corrected variable name
        $request->validate([
            'name' => 'required|unique:medicines,name,' . $medicine_id,
            'wmg' => 'required',
            'price' => 'required',
            'generic_id' => 'required',
            'company_id' => 'required',
        ]);

        $medicine = Medicine::findOrFail($medicine_id);
        $medicine->update([
            'name' => $request->name,
            'wmg' => $request->wmg,
            'price' => $request->price,
            'generic_id' => $request->generic_id,
            'company_id' => $request->company_id,
        ]);

        return redirect()->route('allmedicine')->with('message', "Medicine updated successfully!");
    }


public function EditMedicine($id)
{
    // Find the medicine by ID
    $medicine = Medicine::findOrFail($id);

    // Get the list of generics and companies for the dropdowns
    $generics = Generic::pluck('name', 'id')->toArray();
    $companies = Company::pluck('name', 'id')->toArray();

    return view('admin.madicine.edit', compact('medicine', 'generics', 'companies'));
}


       public function DeleteMedicine($id)
    {
        Medicine::findOrFail($id)->delete();
        return redirect()->route('allmedicine')->with('message', "Company deleted successfully");
    }
    public function Search(Request $request)
    {
        $search_text = $_GET['query'];

        $medicines = Medicine::where('name', 'LIKE', '%' . $search_text . '%')->get();

        return view('admin.madicine.search', compact('medicines'));
    }


}
