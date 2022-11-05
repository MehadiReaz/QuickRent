<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function myProducts(){
        $products = Product::where('c_id',session()->get('c_id'))->get();
        return view('product.product')->with("products", $products);
    }

    public function addProduct(){
        $categorys = CategoryController::allCategorys();
        return view('product.addProduct')->with("categorys", $categorys);
    }

    public function addProduct_submit(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'details' => 'required',
        ]);

        $obj = new Product();
        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->category = $request->category;
        $obj->details = $request->details;
        $obj->c_id = session()->get('c_id');
        $obj->save();

        return view('product.addProduct')->with('msg', 'Product added successfully');
    }

    public function editProduct(Request $request){
        $categorys = CategoryController::allCategorys();
        $product = Product::where('id', $request->id)->first();
        return view('product.editProduct')->with("product", $product)->with("categorys", $categorys);
    }

    public function editProduct_submit(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'details' => 'required',
        ]);

        $obj = Product::Where('id', $request->id)->first();
        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->category = $request->category;
        $obj->details = $request->details;
        $obj->save();

        session()->flash('msg', 'Edit successful.');
        return redirect('product/product');
    }

    public function deleteProduct(Request $request){
        $product = Product::where('id', $request->id)->first();
        $product->delete();

        session()->flash('msg', 'Delete successful.');
        return redirect('product/product');
    }

}
