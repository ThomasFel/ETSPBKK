<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();
        return view('pages.admin.list_customer', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string',
            'company_name' => 'required|string',
            'country' => 'required|string',
            'address' => 'required',
            'post_code' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string'
        ]);

        try {
            $customer = Customer::create([
                'service_id' => $request->service_id,
                'name' => $request->name,
                'company_name' => $request->company_name,
                'country' => $request->country,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'email' => $request->email,
                'phone_number' => $request->phone_number
            ]);
            
            Alert::success('Success', 'Your request has been sent!');

            return redirect()->back()->with(['success' => "Customer Creation Succeeded!"]);
        }
        
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('pages.admin.list_customer_edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string',
            'company_name' => 'required|string',
            'country' => 'required|string',
            'address' => 'required',
            'post_code' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string'
        ]);

        try {
            $customer = Customer::where('id', $id)->first();

            $customer->update([
                'service_id' => $request->service_id,
                'name' => $request->name,
                'company_name' => $request->company_name,
                'country' => $request->country,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'email' => $request->email,
                'phone_number' => $request->phone_number
            ]);

            $customer->save();
    
            return redirect()->back()->with(['success' => "Customer Updated!"]);
        }
        
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect(route('admin.customers'))->with(['success' => "Customer Deletion Succeeded!"]);
    }
}
