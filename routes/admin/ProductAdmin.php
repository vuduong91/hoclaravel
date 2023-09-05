<?php
use App\Http\Controllers\ProductAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/product/list',[ProductAdminController::class,"list"]);

?>  