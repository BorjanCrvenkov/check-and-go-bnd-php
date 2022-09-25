<?php

namespace App\Http\Controllers;

use App\Models\BusinessTag;
use App\Http\Requests\StoreBusinessTagRequest;
use App\Http\Requests\UpdateBusinessTagRequest;

class BusinessTagController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessTag  $businessTag
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessTag $businessTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessTag  $businessTag
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessTag $businessTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessTagRequest  $request
     * @param  \App\Models\BusinessTag  $businessTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessTagRequest $request, BusinessTag $businessTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessTag  $businessTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessTag $businessTag)
    {
        //
    }
}
