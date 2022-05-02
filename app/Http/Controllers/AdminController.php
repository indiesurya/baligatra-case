<?php

namespace App\Http\Controllers;
use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('admin',[
            
            'data' => Product::paginate(3)
        ]);
    }  
}
