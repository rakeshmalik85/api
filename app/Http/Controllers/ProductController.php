<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\productrequest;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
class ProductController extends Controller
{

public function __construct (){
$this->middleware('auth:api') -> except('index','show');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return new ProductCollection(Product::all());
    }

    public function store(productrequest $request)
    {
         $product=new Product;
         $product -> name = $request -> name;
         $product -> catid = $request -> catid;
         $product -> unit = $request -> unit;
         $product -> quantity = $request -> quantity;
         $product -> buy_price = $request -> buy_price;
         $product -> sale_price = $request -> sale_price;
         $product -> enable = $request -> enable;

         $product->save();
         return response([
           'data'=> new ProductResource($product)
         ],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
