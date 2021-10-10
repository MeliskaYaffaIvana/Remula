<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $role = Auth::user()->role;
        if($role == "provider"){
            return redirect()->to('provider');
        } else if($role == "customer"){
            return redirect()->to('customer');
        } else {
            return redirect()->to('logout');
        }
    }
}