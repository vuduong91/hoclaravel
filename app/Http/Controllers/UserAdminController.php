<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function ngdung(){
        $data['users'] = User::all(); 
        return view('admin/user/user',["data"=>$data]);
    }
}
