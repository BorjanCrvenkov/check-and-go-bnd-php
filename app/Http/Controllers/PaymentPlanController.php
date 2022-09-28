<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentPlan\PaymentPlanCollection;
use App\Http\Resources\PaymentPlan\PaymentPlanResource;
use App\Http\Responses\CustomResponse;
use App\Models\PaymentPlan;
use App\Http\Requests\StorePaymentPlanRequest;
use App\Http\Requests\UpdatePaymentPlanRequest;
use App\Services\Implementation\PaymentPlanService;
use Illuminate\Http\JsonResponse;

class PaymentPlanController extends Controller
{
    /**
     * @param PaymentPlan $model
     * @param PaymentPlanService $paymentPlanService
     * @param CustomResponse $customResponse
     */
    public function __construct(PaymentPlan $model, public readonly PaymentPlanService $paymentPlanService, public CustomResponse $customResponse)
    {
        $authParameter = 'paymentPlan';
        parent::__construct($model, $this->paymentPlanService, $customResponse, $authParameter,
            PaymentPlanCollection::class, PaymentPlanResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StorePaymentPlanRequest $request
     * @return JsonResponse
     */
    public function store(StorePaymentPlanRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param PaymentPlan $paymentPlan
     * @return JsonResponse
     */
    public function show(PaymentPlan $paymentPlan): JsonResponse
    {
        return $this->showHelper($paymentPlan);
    }

    /**
     * @param PaymentPlan $paymentPlan
     * @param UpdatePaymentPlanRequest $request
     * @return JsonResponse
     */
    public function update(PaymentPlan $paymentPlan, UpdatePaymentPlanRequest $request): JsonResponse
    {
        return $this->updateHelper($paymentPlan, $request);
    }

    /**
     * @param PaymentPlan $paymentPlan
     * @return JsonResponse
     */
    public function destroy(PaymentPlan $paymentPlan): JsonResponse
    {
        return $this->destroyHelper($paymentPlan);
    }
}
