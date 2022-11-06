<?php

namespace App\Http\Controllers;

use App\Models\Orderlist;
use App\Http\Requests\StoreOrderlistRequest;
use App\Http\Requests\UpdateOrderlistRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class OrderlistController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderlistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderlistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderlist  $orderlist
     * @return \Illuminate\Http\Response
     */
    public function show(Orderlist $orderlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderlist  $orderlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderlist $orderlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderlistRequest  $request
     * @param  \App\Models\Orderlist  $orderlist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderlistRequest $request, Orderlist $orderlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderlist  $orderlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderlist $orderlist)
    {
        //
    }

    public function myOrders(){
        $myBorrows = Orderlist::Where('borrower_id', session()->get('c_id'))->get();
        $myRents = Orderlist::Where('owner_id', session()->get('c_id'))->get();

        foreach($myBorrows as $myBorrow){
            $myBorrow->owner_id = $myBorrow->owner()->name;
            $myBorrow->product_id = $myBorrow->product()->name;
        }

        foreach($myRents as $myRent){
            $myRent->borrower_id = $myRent->borrower()->name;
            $myRent->product_id = $myRent->product()->name;
        }

        return view('orderlist/myOrders')->with('myBorrows', $myBorrows)->with('myRents', $myRents);
    }

    public function orderProduct(Request $request){
        $ids=Orderlist::Select('product_id')->Where('borrower_id', session()->get('c_id'))->get();
        foreach($ids as $id){
            if($id['product_id']==$request->id){
                session()->flash('msg', 'Product order already in process');
                return redirect('product\rentProduct');
            }
        }

        $product = Product::Where('id', $request->id)->first();
        $orderlist = new Orderlist();
        $orderlist->owner_id = $product->c_id;
        $orderlist->final_price = $product->price;
        $orderlist->product_id = $product->id;
        $orderlist->borrower_id = session()->get('c_id');
        $orderlist->status = 'pending';
        $orderlist->save();

        session()->flash('msg', 'Product added successfuly');
        return redirect('product\rentProduct');

    }

    public function cancelOrder(Request $request){

        $orderlist = Orderlist::Where('id', $request->id)->first();
        if($orderlist->status != 'confirmed'){
            $orderlist->delete();
            session()->flash('msg', 'Order deleted successfully');
            return redirect('orderlist/myOrders');
        }

        session()->flash('msg', 'Confirmed product cannot be deleted by Borrower. Please contact Owner');
        return redirect('orderlist/myOrders');

    }

    public function confirmOrder(Request $request){

        $orderlist = Orderlist::Where('id', $request->id)->first();
        if($orderlist->status == 'confirmed'){
            session()->flash('msg', 'Order already confirmed');
            return redirect('orderlist/myOrders');
        }
        $orderlist->status ='confirmed';
        $orderlist->save();
        session()->flash('msg', 'Order confirmed successfully');
        return redirect('orderlist/myOrders');

    }

    // public function offerOrderPrice(Request $request){

    //     $orderlist = Orderlist::Where('id', $request->id)->first();
    //     if($orderlist->status != 'confirmed'){
    //         $orderlist->final_price = $request->price;
    //         session()->flash('msg', 'Price updated successfuly');
    //         return redirect('orderlist/myOrders');
    //     }

    //     session()->flash('msg', 'Price of confirmed product cannot be changed');
    //     return redirect('orderlist/myOrders');

    // }




}
