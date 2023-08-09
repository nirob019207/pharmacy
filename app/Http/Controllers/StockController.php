<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Stock;
class StockController extends Controller
{
    public function Index()
    {
        // Retrieve all medicines with their associated generic and company information
        $stocks = Stock::with('medicine')->get();

        return view('admin.stock.index',compact('stocks'));
    }

    public function AddStockMedicine()

    {
        $medicine = Medicine::pluck('name', 'id')->toArray();



        return view('admin.stock.create',compact('medicine'));
    }



    public function StoreStockMedicine(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'medicine_id' => 'required|integer',
            'stock' => 'required|integer', // Assuming 'stock' is an integer field
            'mfg_date' => 'required|date',
            'expiry_date' => 'required|date',
            'purchase_price' => 'required|numeric',
        ]);

        // Create a new Stock instance and assign the form input values
        $stock = new Stock();
        $stock->name = $request->name;
        $stock->medicine_id = $request->medicine_id;
        $stock->stock = $request->stock;
        $stock->mfg_date = $request->mfg_date;
        $stock->expiry_date = $request->expiry_date;
        $stock->purchase_price = $request->purchase_price;
        $stock->quantity = $request->stock; // Use $request->stock instead of $stock['stock']

        // Save the stock to the database
        $stock->save();

        return redirect()->route('allstockmedicine')->with('message', "Stock entry added successfully!");
    }

    public function EditStockMedicine($id)
{
    // Find the stock by ID
    $stock = Stock::findOrFail($id);

    // Get the medicine by ID

     $medicine = Medicine::pluck('name', 'id')->toArray();

    return view('admin.stock.edit', compact('stock', 'medicine'));
}
public function UpdateStockMedicine(Request $request)
    {

        $stock_id = $request->stock_id;
        $request->validate([
            'name' => 'required|string',
            'medicine_id' => 'required|',
            'stock'=>'required',

            'mfg_date' => 'required|date',
            'expiry_date' => 'required|date',
            'purchase_price' => 'required|numeric',
        ]);
        $stock = Stock::findOrFail($stock_id);
        $stock->update([
            'name' => $request->name,
            'medicine_id' => $request->medicine_id,
            'stock' => $request->stock,

            'mfg_date' => $request->mfg_date,
            'expiry_date' => $request->expiry_date,
            'purchase_price' => $request->purchase_price,
        ]);
        // Create a new Stock instance and assign the form input values


        return redirect()->route('allstockmedicine')->with('message', "Stock entry added successfully!");
    }

    public function DeleteStockMedicine($id)
    {
        Stock::findOrFail($id)->delete();
        return redirect()->route('allstockmedicine')->with('message', "stock deleted successfully");
    }

}
