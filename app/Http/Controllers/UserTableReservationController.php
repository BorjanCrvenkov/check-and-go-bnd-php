<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserTableReservation\UserTableReservationCollection;
use App\Http\Resources\UserTableReservation\UserTableReservationResource;
use App\Http\Responses\CustomResponse;
use App\Models\UserTableReservation;
use App\Http\Requests\StoreUserTableReservationRequest;
use App\Services\Implementation\UserTableReservationService;
use Illuminate\Http\JsonResponse;

class UserTableReservationController extends Controller
{
    /**
     * @param UserTableReservation $model
     * @param UserTableReservationService $userTableReservationService
     * @param CustomResponse $customResponse
     */
    public function __construct(UserTableReservation $model, public readonly UserTableReservationService $userTableReservationService, public CustomResponse $customResponse)
    {
        $authParameter = 'userTableReservation';
        parent::__construct($model, $this->userTableReservationService, $customResponse, $authParameter,
            UserTableReservationCollection::class, UserTableReservationResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreUserTableReservationRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserTableReservationRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param UserTableReservation $userTableReservation
     * @return JsonResponse
     */
    public function show(UserTableReservation $userTableReservation): JsonResponse
    {
        return $this->showHelper($userTableReservation);
    }

    /**
     * @param UserTableReservation $userTableReservation
     * @return JsonResponse
     */
    public function destroy(UserTableReservation $userTableReservation): JsonResponse
    {
        return $this->destroyHelper($userTableReservation);
    }
}
