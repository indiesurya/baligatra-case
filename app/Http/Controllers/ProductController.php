<?php

namespace App\Http\Controllers;
use \App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.inputdata',[
            'title' => 'Input Data'
        ]);
    }
    public function inputdata(Request $request)
    {
        $validatedData = $request->validate([
            'desc' => 'required|max:255',
            'photo' => 'required|image|file',
            'harga' => 'required'
        ]);

        if($request->file('photo')){
            $validatedData['photo'] =$request->file('photo')->store('images');
        }
        Product::create($validatedData);
        return redirect('/admin');
    }

    public function updateindex($id)
    {
        $data = Product::find($id);
        return view('admin.updatedata',[
            'data' => $data,
            'title' => 'Update Data'
        ]);
    }
    public function updatedata(Request $request, $id)
    {
        $validatedData= $request->validate([
            'desc' => 'max:255',
            'photo' => 'required',
            'harga' => 'required'
        ]);
        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('images');
        }
        Product::find($id)->update($validatedData);

        return redirect('/admin');
    }
    public function hapusdata($id)
    {
        Product::find($id)->delete();
        return redirect('/admin');
    }
}
