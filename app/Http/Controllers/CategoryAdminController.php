<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryAdminController extends Controller
{
    //
    public function list_sp(){
        $data['_category'] = Category::all(); 
        return view('admin/category/category',["data"=>$data]);
    }
    public function adcate() {
        $data['_category'] = Category::all(); 
        return view('admin/category/add_category',["data"=>$data]);
    }
    public function xl_add(REQUEST $request) {
        DB:: table("_category")->insert([
            'nameCatr'=> $request ->cat_name
        ]);
        return redirect("/admin/category");
        // dd($request);
    }
    public function xl_delete($id){
        DB::table("_category")->where("id",$id)->delete();
        return redirect("/admin/category");
    }
    public function edit($id){
        $data['_category'] = DB::table("_category")->where("id",$id)->first();
        return view("/admin/category/edit_category",['data'=>$data]);
        
    }
}
