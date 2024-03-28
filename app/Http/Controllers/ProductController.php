<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);        

         $product = Product::create($data);
        
         if($product){
            return redirect('/product')->with('success', "Successfully Create Product");
         }else{
            return redirect()->back()->with('failed', 'Failed to Create Product');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $product = Product::where('id', $id)->first();
        return view('product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);
        
        $product = Product::where('id', $id)->update($data);
        if($product){
            return redirect('/product')->with('success', "Successfully Update Data");
        }else{
            return redirect()->back()->with('failed', "Failed To Update Product");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        Product::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Successfully Delete Data!');
    }
}
