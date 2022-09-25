<?php

namespace App\Http\Controllers;

use App\Models\UserPhoneNumber;
use App\Http\Requests\StoreUserPhoneNumberRequest;
use App\Http\Requests\UpdateUserPhoneNumberRequest;

class UserPhoneNumberController extends Controller
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
     * @param  \App\Http\Requests\StoreUserPhoneNumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPhoneNumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPhoneNumber  $userPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function show(UserPhoneNumber $userPhoneNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPhoneNumber  $userPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPhoneNumber $userPhoneNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPhoneNumberRequest  $request
     * @param  \App\Models\UserPhoneNumber  $userPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPhoneNumberRequest $request, UserPhoneNumber $userPhoneNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPhoneNumber  $userPhoneNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPhoneNumber $userPhoneNumber)
    {
        //
    }
}
