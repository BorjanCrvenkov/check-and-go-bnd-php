<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkingHour\WorkingHourCollection;
use App\Http\Resources\WorkingHour\WorkingHourResource;
use App\Http\Responses\CustomResponse;
use App\Models\WorkingHour;
use App\Http\Requests\StoreWorkingHourRequest;
use App\Http\Requests\UpdateWorkingHourRequest;
use App\Services\Implementation\WorkingHourService;
use Illuminate\Http\JsonResponse;

class WorkingHourController extends Controller
{
    /**
     * @param WorkingHour $model
     * @param WorkingHourService $workingHourService
     * @param CustomResponse $customResponse
     */
    public function __construct(WorkingHour $model, public readonly WorkingHourService $workingHourService, public CustomResponse $customResponse)
    {
        $authParameter = 'WorkingHour';
        parent::__construct($model, $this->workingHourService, $customResponse, $authParameter,
            WorkingHourCollection::class, WorkingHourResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreWorkingHourRequest $request
     * @return JsonResponse
     */
    public function store(StoreWorkingHourRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param WorkingHour $workingHour
     * @return JsonResponse
     */
    public function show(WorkingHour $workingHour): JsonResponse
    {
        return $this->showHelper($workingHour);
    }

    /**
     * @param WorkingHour $workingHour
     * @param UpdateWorkingHourRequest $request
     * @return JsonResponse
     */
    public function update(WorkingHour $workingHour, UpdateWorkingHourRequest $request): JsonResponse
    {
        return $this->updateHelper($workingHour, $request);
    }

    /**
     * @param WorkingHour $workingHour
     * @return JsonResponse
     */
    public function destroy(WorkingHour $workingHour): JsonResponse
    {
        return $this->destroyHelper($workingHour);
    }
}
