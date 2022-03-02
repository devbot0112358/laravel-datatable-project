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
        return datatables(Client::select('client_id','name','email','phone','company'))->toJson();
    }
    public function edit($id){
        dd('edit page');
    }
    public function delete($id){
            Client::where('client_id',$id)->delete();
        return redirect ('/');
    }
}
