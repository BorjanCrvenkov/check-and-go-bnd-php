<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentFrequency\PaymentFrequencyCollection;
use App\Http\Resources\PaymentFrequency\PaymentFrequencyResource;
use App\Http\Responses\CustomResponse;
use App\Models\PaymentFrequency;
use App\Http\Requests\StorePaymentFrequencyRequest;
use App\Http\Requests\UpdatePaymentFrequencyRequest;
use App\Services\Implementation\PaymentFrequencyService;
use Illuminate\Http\JsonResponse;

class PaymentFrequencyController extends Controller
{
    /**
     * @param PaymentFrequency $model
     * @param PaymentFrequencyService $paymentFrequencyService
     * @param CustomResponse $customResponse
     */
    public function __construct(PaymentFrequency $model, public readonly PaymentFrequencyService $paymentFrequencyService, public CustomResponse $customResponse)
    {
        $authParameter = 'paymentFrequency';
        parent::__construct($model, $this->paymentFrequencyService, $customResponse, $authParameter,
            PaymentFrequencyCollection::class, PaymentFrequencyResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StorePaymentFrequencyRequest $request
     * @return JsonResponse
     */
    public function store(StorePaymentFrequencyRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param PaymentFrequency $paymentFrequency
     * @return JsonResponse
     */
    public function show(PaymentFrequency $paymentFrequency): JsonResponse
    {
        return $this->showHelper($paymentFrequency);
    }

    /**
     * @param PaymentFrequency $paymentFrequency
     * @param UpdatePaymentFrequencyRequest $request
     * @return JsonResponse
     */
    public function update(PaymentFrequency $paymentFrequency, UpdatePaymentFrequencyRequest $request): JsonResponse
    {
        return $this->updateHelper($paymentFrequency, $request);
    }

    /**
     * @param PaymentFrequency $paymentFrequency
     * @return JsonResponse
     */
    public function destroy(PaymentFrequency $paymentFrequency): JsonResponse
    {
        return $this->destroyHelper($paymentFrequency);
    }
}
