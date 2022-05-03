<?php

namespace App\Http\Controllers;

use \App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('home',[
            'title' => 'Home',
            'data' => Product::paginate(4)
        ]);
    }
}
