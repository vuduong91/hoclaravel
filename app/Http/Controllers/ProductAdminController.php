<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    //
    public function list(){
        return view("admin/product/list-product");
    }
}
