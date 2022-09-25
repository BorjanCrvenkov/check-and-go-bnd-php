<?php

namespace App\Http\Controllers;

use App\Models\Strike;
use App\Http\Requests\StoreStrikeRequest;
use App\Http\Requests\UpdateStrikeRequest;

class StrikeController extends Controller
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
     * @param  \App\Http\Requests\StoreStrikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStrikeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strike  $strike
     * @return \Illuminate\Http\Response
     */
    public function show(Strike $strike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strike  $strike
     * @return \Illuminate\Http\Response
     */
    public function edit(Strike $strike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStrikeRequest  $request
     * @param  \App\Models\Strike  $strike
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStrikeRequest $request, Strike $strike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strike  $strike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strike $strike)
    {
        //
    }
}
