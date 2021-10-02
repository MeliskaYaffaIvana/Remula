<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Customer;
use App\Models\ServiceProvider;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $userCustomer = Customer::find(auth()->user()->ID_user);
        return view('customer.index',['userCustomer' =>$userCustomer]);
    }
}
