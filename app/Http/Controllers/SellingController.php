<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Selling;
use App\Models\SellingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $selling = Selling::where('status', 1)->with('customer', 'user')->get();
        return view('selling.selling-data', compact('selling'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $product =  Product::all();
       return view('selling.selling', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $customer = Customer::create([
        'name' => $request->customer_name,
        'address' => $request->customer_address,
        'phone_number' => $request->customer_phone_number
       ]);

       $data = $request->all();
       $products = Product::whereIn('id', $data['productCheck'])->get();
       $total_price = 0;
       
       foreach($products as $key => $product){
       
        $total_stock = $product->stock - $data['quantity'][$key] ?? 0;
       
         $stock = Product::where('id', $product->id)->update([
            'stock' => $total_stock
         ]);
       
         $quantity = $data['quantity'][$key] ?? 0;
        
         if($quantity > 0 ){
            $total_price += $quantity * $product->price;
         }
       }

        $sellingData = Selling::create([
            'customer_id' => $customer->id,
            'user_id' => Auth::user()->id,
            'total_price' => $total_price,
            'status' => 1          
        ]);

        foreach($products as $key => $product){
            $product_id = $data['productCheck'][$key];
            $quantity = $data['quantity'][$key];

            $item = Product::where('id', $product_id)->first();
            $subtotal = $item->price * $quantity;

            $sellingdetail = SellingDetail::create([
                'product_id' => $product_id,
                'selling_id' => $sellingData->id,
                'subtotal' => $subtotal,
                'total_product' => $quantity,
            ]);
        }
        
        return redirect("/selling/detail/{$sellingData->id}");

    }

    /**
     * Display the specified resource.
     */
    public function show(Selling $selling, $id)
    {
        $sellingData = Selling::where('status', 1)->with('customer', 'user', 'sellingDetails', 'sellingDetails.product')->where('id', $id)->first();
        return view('selling.payment-details', compact('sellingData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Selling $selling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Selling $selling)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Selling $selling, $id)
    {
        Selling::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success', 'Successfully Delete Data');
    }

    public function download($id){
        $sellingData = Selling::where('id', $id)->where('status', 1)->with('sellingDetails', 'sellingDetails.product', 'user', 'customer')->first();
        return view('selling.invoice-download', compact('sellingData'));
    }
}
