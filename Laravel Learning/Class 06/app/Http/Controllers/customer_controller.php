<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Carbon\Carbon;

class customer_controller extends Controller
{
    public function index()
    {
        return view('customer');
    }

    public function store(Request $request)
    {
        //echo "<pre>";
//print_r($request->all());

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->address = $request['address'];
        $customer->city = $request['city'];
       // $customer->date_of_birth = ['date_of_birth']; // Change date format
        $customer->gender = $request['gender'];
        $customer->password = md5($request['password']);
        $customer->points = $request['points'];
        $customer->status = $request['status'];
        $customer->save();

        //return redirect()->back()->with('success', 'Customer registered successfully.');
        return redirect('/customer/view');
    }

    public function view()  {
        $customers = Customer::all();
        // echo "<pre>";
        // print_r($customers);
        // echo "</pre>";
        // die;
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
}
