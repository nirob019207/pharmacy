<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->get();
        return view('admin.company.index', compact('companies'));
    }

    public function addCompany()
    {
        $pharma = User::where('role', 'pharmacist')->get();
        return view('admin.company.addcompany', compact('pharma'));
    }

    public function storeCompany(Request $request)
{
    $request->validate([
        'name' => 'required|unique:companies',
        'phone' => 'required',
        'address' => 'required',
        'pharmacist_id' => 'required',
    ]);

    $company = Company::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'pharmacist_id' => $request->pharmacist_id,
    ]);

    // Access the related pharmacist's name using the relationship
    $pharmacistName = $company->pharmacist->name;

    return redirect()->route('allcompany')->with('message', "Company added successfully! Pharmacist: $pharmacistName");
}


    public function editCompany($id)
    {
        $company_info = Company::findOrFail($id);
        $pharma = User::where('role', 'pharmacist')->get();
        return view('admin.company.edit', compact('company_info','pharma'));
    }
    public function updateCompany(Request $request)
{
    $company_id = $request->company_id;
    $request->validate([
        'name' => 'required|unique:companies,name,' . $company_id,
        'phone' => 'required',
        'address' => 'required',
        'pharmacist_id' => 'required',
    ]);

    $company = Company::findOrFail($company_id);
    $company->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'pharmacist_id' => $request->pharmacist_id,
    ]);

    // Access the related pharmacist's name using the relationship
    $pharmacistName = $company->pharmacist->name;

    return redirect()->route('allcompany')->with('message', "Company updated successfully! Pharmacist: $pharmacistName");
}

    public function deleteCompany($id)
    {
        Company::findOrFail($id)->delete();
        return redirect()->route('allcompany')->with('message', "Company deleted successfully");
    }
}
