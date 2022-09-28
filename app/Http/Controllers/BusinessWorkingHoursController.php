<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessImage\BusinessImageCollection;
use App\Http\Resources\BusinessImage\BusinessImageResource;
use App\Http\Responses\CustomResponse;
use App\Models\BusinessWorkingHours;
use App\Http\Requests\StoreBusinessWorkingHoursRequest;
use App\Http\Requests\UpdateBusinessWorkingHoursRequest;
use App\Services\Implementation\BusinessWorkingHoursService;
use Illuminate\Http\JsonResponse;

class BusinessWorkingHoursController extends Controller
{
    /**
     * @param BusinessWorkingHours $model
     * @param BusinessWorkingHoursService $businessWorkingHoursService
     * @param CustomResponse $customResponse
     */
    public function __construct(BusinessWorkingHours $model, public readonly BusinessWorkingHoursService $businessWorkingHoursService,
                                public CustomResponse $customResponse)
    {
        $authParameter = 'businessWorkingHour';
        parent::__construct($model, $this->businessWorkingHoursService, $customResponse, $authParameter,
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
     * @param StoreBusinessWorkingHoursRequest $request
     * @return JsonResponse
     */
    public function store(StoreBusinessWorkingHoursRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param BusinessWorkingHours $businessWorkingHours
     * @return JsonResponse
     */
    public function show(BusinessWorkingHours $businessWorkingHours): JsonResponse
    {
        return $this->showHelper($businessWorkingHours);
    }

    /**
     * @param BusinessWorkingHours $businessWorkingHours
     * @param UpdateBusinessWorkingHoursRequest $request
     * @return JsonResponse
     */
    public function update(BusinessWorkingHours $businessWorkingHours, UpdateBusinessWorkingHoursRequest $request): JsonResponse
    {
        return $this->updateHelper($businessWorkingHours, $request);
    }

    /**
     * @param BusinessWorkingHours $businessWorkingHours
     * @return JsonResponse
     */
    public function destroy(BusinessWorkingHours $businessWorkingHours): JsonResponse
    {
        return $this->destroyHelper($businessWorkingHours);
    }
}
