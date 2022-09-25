<?php

namespace App\Http\Controllers;

use App\Models\BusinessEmployee;
use App\Http\Requests\StoreBusinessEmployeeRequest;
use App\Http\Requests\UpdateBusinessEmployeeRequest;

class BusinessEmployeeController extends Controller
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
     * @param  \App\Http\Requests\StoreBusinessEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessEmployee  $businessEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessEmployee $businessEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessEmployee  $businessEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessEmployee $businessEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessEmployeeRequest  $request
     * @param  \App\Models\BusinessEmployee  $businessEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessEmployeeRequest $request, BusinessEmployee $businessEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessEmployee  $businessEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessEmployee $businessEmployee)
    {
        //
    }
}
