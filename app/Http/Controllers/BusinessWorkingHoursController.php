<?php

namespace App\Http\Controllers;

use App\Models\BusinessWorkingHours;
use App\Http\Requests\StoreBusinessWorkingHoursRequest;
use App\Http\Requests\UpdateBusinessWorkingHoursRequest;

class BusinessWorkingHoursController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessWorkingHoursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessWorkingHoursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessWorkingHours  $businessWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessWorkingHours $businessWorkingHours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessWorkingHours  $businessWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessWorkingHours $businessWorkingHours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessWorkingHoursRequest  $request
     * @param  \App\Models\BusinessWorkingHours  $businessWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessWorkingHoursRequest $request, BusinessWorkingHours $businessWorkingHours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessWorkingHours  $businessWorkingHours
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessWorkingHours $businessWorkingHours)
    {
        //
    }
}
