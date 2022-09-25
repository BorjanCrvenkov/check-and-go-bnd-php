<?php

namespace App\Http\Controllers;

use App\Models\UserBusinessReservation;
use App\Http\Requests\StoreUserBusinessReservationRequest;
use App\Http\Requests\UpdateUserBusinessReservationRequest;

class UserBusinessReservationController extends Controller
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
     * @param  \App\Http\Requests\StoreUserBusinessReservationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserBusinessReservationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserBusinessReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function show(UserBusinessReservation $userBusinessReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBusinessReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserBusinessReservation $userBusinessReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserBusinessReservationRequest  $request
     * @param  \App\Models\UserBusinessReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserBusinessReservationRequest $request, UserBusinessReservation $userBusinessReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserBusinessReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserBusinessReservation $userBusinessReservation)
    {
        //
    }
}
