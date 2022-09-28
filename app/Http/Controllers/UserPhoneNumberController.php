<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserPhoneNumber\UserPhoneNumberCollection;
use App\Http\Resources\UserPhoneNumber\UserPhoneNumberResource;
use App\Http\Responses\CustomResponse;
use App\Models\UserPhoneNumber;
use App\Http\Requests\StoreUserPhoneNumberRequest;
use App\Http\Requests\UpdateUserPhoneNumberRequest;
use App\Services\Implementation\UserPhoneNumberService;
use Illuminate\Http\JsonResponse;

class UserPhoneNumberController extends Controller
{
    /**
     * @param UserPhoneNumber $model
     * @param UserPhoneNumberService $userPhoneNumberService
     * @param CustomResponse $customResponse
     */
    public function __construct(UserPhoneNumber $model, public readonly UserPhoneNumberService $userPhoneNumberService, public CustomResponse $customResponse)
    {
        $authParameter = 'userPhoneNumber';
        parent::__construct($model, $this->userPhoneNumberService, $customResponse, $authParameter,
            UserPhoneNumberCollection::class, UserPhoneNumberResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreUserPhoneNumberRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserPhoneNumberRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param UserPhoneNumber $userPhoneNumber
     * @return JsonResponse
     */
    public function show(UserPhoneNumber $userPhoneNumber): JsonResponse
    {
        return $this->showHelper($userPhoneNumber);
    }

    /**
     * @param UserPhoneNumber $userPhoneNumber
     * @param UpdateUserPhoneNumberRequest $request
     * @return JsonResponse
     */
    public function update(UserPhoneNumber $userPhoneNumber, UpdateUserPhoneNumberRequest $request): JsonResponse
    {
        return $this->updateHelper($userPhoneNumber, $request);
    }

    /**
     * @param UserPhoneNumber $userPhoneNumber
     * @return JsonResponse
     */
    public function destroy(UserPhoneNumber $userPhoneNumber): JsonResponse
    {
        return $this->destroyHelper($userPhoneNumber);
    }
}
