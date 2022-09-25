<?php

namespace App\Http\Controllers;

use App\Models\PaymentPlan;
use App\Http\Requests\StorePaymentPlanRequest;
use App\Http\Requests\UpdatePaymentPlanRequest;

class PaymentPlanController extends Controller
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
     * @param  \App\Http\Requests\StorePaymentPlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentPlanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentPlan  $paymentPlan
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentPlan $paymentPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentPlan  $paymentPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentPlan $paymentPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentPlanRequest  $request
     * @param  \App\Models\PaymentPlan  $paymentPlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentPlanRequest $request, PaymentPlan $paymentPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentPlan  $paymentPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentPlan $paymentPlan)
    {
        //
    }
}
