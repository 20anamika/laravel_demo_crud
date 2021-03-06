<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers = Customer::latest()->paginate(5);
        
        return view('customers.index',compact('customers'));
            
    }

     public function create(){
     return view('customers.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        Customer::create($request->all());
     
        return redirect()->route('customers.index')
                        ->with('success','Customer Added successfully.');
    }
   
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_number' => 'required'
        ]);
    
        $customer->update($request->all());
    
        return redirect()->route('customers.index')
                        ->with('success','Customer updated successfully');
    }
    
   
    public function destroy(Customer $customer)
    {
        $customer->delete();
    
        return redirect()->route('customers.index')
                        ->with('success','customer deleted successfully');
    }
    public function show(Customer $customer)
    {
        return view('customers.show',compact('customer'));
    } 

}



