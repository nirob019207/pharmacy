<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function Index()
    {




        return view('admin.invoice.index');
    }
    public function addInvoice()
    {

        return view('admin.invoice.create');
    }
}
