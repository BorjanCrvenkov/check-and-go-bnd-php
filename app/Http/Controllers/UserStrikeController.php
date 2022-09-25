<?php

namespace App\Http\Controllers;

use App\Models\UserStrike;
use App\Http\Requests\StoreUserStrikeRequest;
use App\Http\Requests\UpdateUserStrikeRequest;

class UserStrikeController extends Controller
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
     * @param  \App\Http\Requests\StoreUserStrikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserStrikeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserStrike  $userStrike
     * @return \Illuminate\Http\Response
     */
    public function show(UserStrike $userStrike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserStrike  $userStrike
     * @return \Illuminate\Http\Response
     */
    public function edit(UserStrike $userStrike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserStrikeRequest  $request
     * @param  \App\Models\UserStrike  $userStrike
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserStrikeRequest $request, UserStrike $userStrike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserStrike  $userStrike
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserStrike $userStrike)
    {
        //
    }
}
