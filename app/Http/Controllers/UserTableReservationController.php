<?php

namespace App\Http\Controllers;

use App\Models\UserTableReservation;
use App\Http\Requests\StoreUserTableReservationRequest;
use App\Http\Requests\UpdateUserTableReservationRequest;

class UserTableReservationController extends Controller
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
     * @param  \App\Http\Requests\StoreUserTableReservationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserTableReservationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserTableReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function show(UserTableReservation $userBusinessReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserTableReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTableReservation $userBusinessReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserTableReservationRequest  $request
     * @param  \App\Models\UserTableReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserTableReservationRequest $request, UserTableReservation $userBusinessReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserTableReservation  $userBusinessReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTableReservation $userBusinessReservation)
    {
        //
    }
}
