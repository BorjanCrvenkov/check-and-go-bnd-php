<?php

namespace App\Http\Controllers;

use App\Models\BusinessPhoneNumber;
use App\Http\Requests\StoreBusinessPhoneNumberRequest;
use App\Http\Requests\UpdateBusinessPhoneNumberRequest;

class BusinessPhoneNumberController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessPhoneNumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessPhoneNumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessPhoneNumber  $businessPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessPhoneNumber $businessPhoneNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessPhoneNumber  $businessPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessPhoneNumber $businessPhoneNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessPhoneNumberRequest  $request
     * @param  \App\Models\BusinessPhoneNumber  $businessPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessPhoneNumberRequest $request, BusinessPhoneNumber $businessPhoneNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessPhoneNumber  $businessPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessPhoneNumber $businessPhoneNumber)
    {
        //
    }
}
