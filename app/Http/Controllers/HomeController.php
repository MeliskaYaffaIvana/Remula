<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function checkCustomer(){
        $customer = Customer::all();
        $isCustomer = False;
        for ($i = 0; $i < count($customer); $i++){
            if(auth()->users()->ID_user == $customer[$i]->Id_user){
                $isCustomer = true;
                break;
            }
        }
        return $isCustomer;
    }
    public function checkServiceProvider(){
        $serviceProvider = ServiceProvider::all();
        $isServiceProvider = False;
        for ($i = 0; $i < count($serviceProvider); $i++){
            if(auth()->users()->ID_user == $serviceProvider[$i]->Id_user){
                $isServiceProvider = true;
                break;
            }
        }
        return $isServiceProvider;
    }
    public function index(){
        if($this->checkCustomer()){
            return redirect()->route('');
        }else if($this->checkServiceProvider()){
            return redirect()->route('');
        }else{
            return redirect()->route('');
        }
    }
}
