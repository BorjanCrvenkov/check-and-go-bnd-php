<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserReviewBusiness\UserReviewBusinessCollection;
use App\Http\Resources\UserReviewBusiness\UserReviewBusinessResource;
use App\Http\Responses\CustomResponse;
use App\Models\UserReviewBusiness;
use App\Http\Requests\StoreUserReviewBusinessRequest;
use App\Http\Requests\UpdateUserReviewBusinessRequest;
use App\Services\Implementation\UserReviewBusinessService;
use Illuminate\Http\JsonResponse;

class UserReviewBusinessController extends Controller
{
    /**
     * @param UserReviewBusiness $model
     * @param UserReviewBusinessService $userReviewBusinessService
     * @param CustomResponse $customResponse
     */
    public function __construct(UserReviewBusiness $model, public readonly UserReviewBusinessService $userReviewBusinessService, public CustomResponse $customResponse)
    {
        $authParameter = 'userReviewBusiness';
        parent::__construct($model, $this->userReviewBusinessService, $customResponse, $authParameter,
            UserReviewBusinessCollection::class, UserReviewBusinessResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreUserReviewBusinessRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserReviewBusinessRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param UserReviewBusiness $userReviewBusiness
     * @return JsonResponse
     */
    public function show(UserReviewBusiness $userReviewBusiness): JsonResponse
    {
        return $this->showHelper($userReviewBusiness);
    }

    /**
     * @param UserReviewBusiness $userReviewBusiness
     * @param UpdateUserReviewBusinessRequest $request
     * @return JsonResponse
     */
    public function update(UserReviewBusiness $userReviewBusiness, UpdateUserReviewBusinessRequest $request): JsonResponse
    {
        return $this->updateHelper($userReviewBusiness, $request);
    }

    /**
     * @param UserReviewBusiness $userReviewBusiness
     * @return JsonResponse
     */
    public function destroy(UserReviewBusiness $userReviewBusiness): JsonResponse
    {
        return $this->destroyHelper($userReviewBusiness);
    }
}
