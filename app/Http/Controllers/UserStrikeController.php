<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserStrike\UserStrikeCollection;
use App\Http\Resources\UserStrike\UserStrikeResource;
use App\Http\Responses\CustomResponse;
use App\Models\UserStrike;
use App\Http\Requests\StoreUserStrikeRequest;
use App\Http\Requests\UpdateUserStrikeRequest;
use App\Services\Implementation\UserStrikeService;
use Illuminate\Http\JsonResponse;

class UserStrikeController extends Controller
{
    /**
     * @param UserStrike $model
     * @param UserStrikeService $userStrikeService
     * @param CustomResponse $customResponse
     */
    public function __construct(UserStrike $model, public readonly UserStrikeService $userStrikeService, public CustomResponse $customResponse)
    {
        $authParameter = 'userStrike';
        parent::__construct($model, $this->userStrikeService, $customResponse, $authParameter,
            UserStrikeCollection::class, UserStrikeResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreUserStrikeRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserStrikeRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param UserStrike $userStrike
     * @return JsonResponse
     */
    public function show(UserStrike $userStrike): JsonResponse
    {
        return $this->showHelper($userStrike);
    }

    /**
     * @param UserStrike $userStrike
     * @param UpdateUserStrikeRequest $request
     * @return JsonResponse
     */
    public function update(UserStrike $userStrike, UpdateUserStrikeRequest $request): JsonResponse
    {
        return $this->updateHelper($userStrike, $request);
    }

    /**
     * @param UserStrike $userStrike
     * @return JsonResponse
     */
    public function destroy(UserStrike $userStrike): JsonResponse
    {
        return $this->destroyHelper($userStrike);
    }
}
