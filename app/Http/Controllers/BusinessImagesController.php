<?php

namespace App\Http\Controllers;

use App\Models\BusinessImages;
use App\Http\Requests\StoreBusinessImagesRequest;
use App\Http\Requests\UpdateBusinessImagesRequest;

class BusinessImagesController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessImagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessImages  $businessImages
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessImages $businessImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessImages  $businessImages
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessImages $businessImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessImagesRequest  $request
     * @param  \App\Models\BusinessImages  $businessImages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessImagesRequest $request, BusinessImages $businessImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessImages  $businessImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessImages $businessImages)
    {
        //
    }
}
