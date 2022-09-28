<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use App\Http\Resources\Business\BusinessCollection;
use App\Http\Resources\Business\BusinessResource;
use App\Http\Responses\CustomResponse;
use App\Models\Business;
use App\Services\Implementation\BusinessService;
use Illuminate\Http\JsonResponse;

class BusinessController extends Controller
{
    /**
     * @param Business $model
     * @param BusinessService $businessService
     * @param CustomResponse $customResponse
     */
    public function __construct(Business $model, public readonly BusinessService $businessService, public CustomResponse $customResponse)
    {
        $authParameter = 'business';
        parent::__construct($model, $this->businessService, $customResponse, $authParameter, BusinessCollection::class, BusinessResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreBusinessRequest $request
     * @return JsonResponse
     */
    public function store(StoreBusinessRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Business $business
     * @return JsonResponse
     */
    public function show(Business $business): JsonResponse
    {
        return $this->showHelper($business);
    }

    /**
     * @param Business $business
     * @param UpdateBusinessRequest $request
     * @return JsonResponse
     */
    public function update(Business $business, UpdateBusinessRequest $request): JsonResponse
    {
        return $this->updateHelper($business, $request);
    }

    /**
     * @param Business $business
     * @return JsonResponse
     */
    public function destroy(Business $business): JsonResponse
    {
        return $this->destroyHelper($business);
    }
}
