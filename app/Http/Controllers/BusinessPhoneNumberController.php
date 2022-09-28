<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreBusinessPhoneNumberRequest;
use App\Http\Requests\UpdateBusinessPhoneNumberRequest;
use App\Http\Resources\BusinessImage\BusinessImageCollection;
use App\Http\Resources\BusinessImage\BusinessImageResource;
use App\Http\Responses\CustomResponse;
use App\Models\BusinessPhoneNumber;
use App\Services\Implementation\BusinessPhoneNumberService;
use Illuminate\Http\JsonResponse;

class BusinessPhoneNumberController extends Controller
{

    /**
     * @param BusinessPhoneNumber $model
     * @param BusinessPhoneNumberService $BusinessPhoneNumberService
     * @param CustomResponse $customResponse
     */
    public function __construct(BusinessPhoneNumber $model, public readonly BusinessPhoneNumberService $BusinessPhoneNumberService,
                                public CustomResponse $customResponse)
    {
        $authParameter = 'businessPhoneNumber';
        parent::__construct($model, $this->BusinessPhoneNumberService, $customResponse, $authParameter,
            BusinessImageCollection::class, BusinessImageResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreBusinessPhoneNumberRequest $request
     * @return JsonResponse
     */
    public function store(StoreBusinessPhoneNumberRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param BusinessPhoneNumber $businessPhoneNumber
     * @return JsonResponse
     */
    public function show(BusinessPhoneNumber $businessPhoneNumber): JsonResponse
    {
        return $this->showHelper($businessPhoneNumber);
    }

    /**
     * @param BusinessPhoneNumber $businessPhoneNumber
     * @param UpdateBusinessPhoneNumberRequest $request
     * @return JsonResponse
     */
    public function update(BusinessPhoneNumber $businessPhoneNumber, UpdateBusinessPhoneNumberRequest $request): JsonResponse
    {
        return $this->updateHelper($businessPhoneNumber, $request);
    }

    /**
     * @param BusinessPhoneNumber $businessPhoneNumber
     * @return JsonResponse
     */
    public function destroy(BusinessPhoneNumber $businessPhoneNumber): JsonResponse
    {
        return $this->destroyHelper($businessPhoneNumber);
    }
}
