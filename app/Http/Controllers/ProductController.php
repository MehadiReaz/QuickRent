<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\Customer;
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
        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            $ext = $request->file('photo')->extension();
            $final_name = time().'.'.$ext;
            $request->file('photo')->move(public_path('uploads/product'),$final_name);
            $obj->photo =$final_name;
        }

        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->category = $request->category;
        $obj->details = $request->details;
        //$obj->status = "unavailable";
        $obj->c_id = session()->get('c_id');
        $obj->save();

        $categorys = CategoryController::allCategorys();

        return view('product.addProduct')->with('msg', 'Product added successfully')->with("categorys", $categorys);
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
        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            $ext = $request->file('photo')->extension();
            $final_name = time().'.'.$ext;
            $request->file('photo')->move(public_path('uploads/product/'),$final_name);
            $obj->photo =$final_name;
        }
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

    public function productStatusTogg(Request $request){
        $product = Product::where('id', $request->id)->first();

        if($product->status=="available"){
            $product->status="unavailable";
            $product->save();
            return redirect('product/product');
        }
        elseif($product->status=="unavailable"){
            $product->status="available";
            $product->save();
            return redirect('product/product');
        }
        else{
            session()->flash('msg', 'Cannot change the status of rented item');
        return redirect('product/product');
        }
    }

    public function rentProduct(){
        $products = Product::select("*")->whereNotIn('c_id',[session()->get('c_id')])->where('status',['available'])->get();
        return view('product/rentProduct')->with("products", $products);
    }

    public function rentingProduct(Request $request){
        $product = Product::Where('id', $request->id)->first();
        $product->owner();
        return view('product.rentingProduct')->with("product", $product)->with("owner", $product->owner());
    }

    // public function APIAllProducts(){
    //     return Product::all();
    // }

    public function APIAddProduct(Request $request){
        //return $request;
        $obj = new Product();
        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->category = $request->category;
        $obj->details = $request->details;
        $obj->status = "unavailable";
        $obj->c_id = $request->c_id;
        $obj->save();
        return true;
    }



    public function APIRentProducts(Request $request){
        $token = $request->header("Authorization");
        $token = json_decode($token);
        $products = Product::select("*")->whereNotIn('c_id',[$token->userId])->where('status',['available'])->get();
        return $products;
    }

    public function APIMyProducts(Request $request){
        $token = $request->header("Authorization");
        $token = json_decode($token);
        $products = Product::where('c_id',$token->userId)->get();
        return $products;
    }

    public function APIDeleteProduct($id){
        $product = Product::where('id', $id)->first();
        $product->delete();

        return true;
    }

    public function APIToggleProduct($id){
        $product = Product::where('id', $id)->first();

        if($product->status=="available"){
            $product->status="unavailable";
            $product->save();
            return true;
        }
        elseif($product->status=="unavailable"){
            $product->status="available";
            $product->save();
            return true;
        }
        else{
           return 'Cannot change the status of rented item';
        }
    }

    public function APIEditProduct(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'category' => 'required',
        //     'details' => 'required',
        // ]);

        $obj = Product::Where('id', $request->id)->first();
        // if($request->hasFile('photo')){
        //     $request->validate([
        //         'photo' => 'image|mimes:jpg,jpeg,png,gif',
        //     ]);
        //     $ext = $request->file('photo')->extension();
        //     $final_name = time().'.'.$ext;
        //     $request->file('photo')->move(public_path('uploads/product/'),$final_name);
        //     $obj->photo =$final_name;
        // }
        $obj->name = $request->name;
        $obj->price = $request->price;
        $obj->category = $request->category;
        $obj->details = $request->details;
        $obj->save();

        return true;
    }


    public function API1Product($id){
        $product = Product::where('id', $id)->first();
        return $product;
    }

    public function API1ProductOwner($id){
        $product = Product::where('id', $id)->first();
        return  json_encode( ['product'=>$product,'owner'=>$product->owner()]);
    }





}
