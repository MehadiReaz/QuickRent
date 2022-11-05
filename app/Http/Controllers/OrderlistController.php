<?php

namespace App\Http\Controllers;

use App\Models\Orderlist;
use App\Http\Requests\StoreOrderlistRequest;
use App\Http\Requests\UpdateOrderlistRequest;

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
}
