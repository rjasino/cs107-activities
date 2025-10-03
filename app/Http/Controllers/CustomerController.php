<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Query using Eloquent ORM
        $customers = Customer::all();   //all records from customers table
        return view('customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');    //form to create a new customer
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //click submit in create form
        $validatedData = $request->validate([
            'username' => 'required|max:50|unique:customers,username',
            'email' => 'required|email|unique:customers,email',
            'password_hash' => 'required|min:8',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable',
            'phone_number' => 'nullable|max:20',
        ]);

        Customer::create($validatedData);

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
