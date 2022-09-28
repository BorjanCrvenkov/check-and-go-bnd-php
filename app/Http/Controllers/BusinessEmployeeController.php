<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessEmployee\BusinessEmployeeCollection;
use App\Http\Resources\BusinessEmployee\BusinessEmployeeResource;
use App\Http\Responses\CustomResponse;
use App\Models\BusinessEmployee;
use App\Http\Requests\StoreBusinessEmployeeRequest;
use App\Services\Implementation\BusinessEmployeeService;
use Illuminate\Http\JsonResponse;

class BusinessEmployeeController extends Controller
{
    /**
     * @param BusinessEmployee $model
     * @param BusinessEmployeeService $businessEmployeeService
     * @param CustomResponse $customResponse
     */
    public function __construct(BusinessEmployee      $model, public readonly BusinessEmployeeService $businessEmployeeService,
                                public CustomResponse $customResponse)
    {
        $authParameter = 'businessEmployee';
        parent::__construct($model, $this->businessEmployeeService, $customResponse, $authParameter,
            BusinessEmployeeCollection::class, BusinessEmployeeResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreBusinessEmployeeRequest $request
     * @return JsonResponse
     */
    public function store(StoreBusinessEmployeeRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param BusinessEmployee $businessEmployee
     * @return JsonResponse
     */
    public function show(BusinessEmployee $businessEmployee): JsonResponse
    {
        return $this->showHelper($businessEmployee);
    }

    /**
     * @param BusinessEmployee $businessEmployee
     * @return JsonResponse
     */
    public function destroy(BusinessEmployee $businessEmployee): JsonResponse
    {
        return $this->destroyHelper($businessEmployee);
    }
}
