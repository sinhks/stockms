<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;
class SupplierController extends Controller
{
    public function create(){
        return view('suppliers.create');
    }
    public function store(Request $request){
   
        $request->validate([
            'supplier_name' => 'required',
            'contact_name' => 'required',
            'address' => 'required',
            'postal_code' => 'required|numeric',
            'phone' => 'required|numeric',
            'email' => 'required', 
        ]);

        Suppliers::create($request->all());

        return redirect()->route('suppliers.create')->with('success', 'Suppliers created successfully');
    }
}
