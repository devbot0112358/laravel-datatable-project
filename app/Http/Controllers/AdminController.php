<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Client;
use DataTables;

class AdminController extends Controller
{
    public function index(){
        return view('home');
    }
    public function dataset(){
        return datatables(Client::select('name','email','phone','company'))->toJson();
    }
} 
