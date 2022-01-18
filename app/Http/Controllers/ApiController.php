<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class ApiController extends Controller
{
    //menampilkan data customer
    public function index(){
        $customer = Customer::all();

        //ubah ke JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Customer',
            'data'    => $customer  
        ], 200);
    }
}
