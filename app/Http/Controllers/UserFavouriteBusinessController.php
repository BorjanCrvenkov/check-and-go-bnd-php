<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserFavouriteBusiness\UserFavouriteBusinessCollection;
use App\Http\Resources\UserFavouriteBusiness\UserFavouriteBusinessResource;
use App\Http\Responses\CustomResponse;
use App\Models\UserFavouriteBusiness;
use App\Http\Requests\StoreUserFavouriteBusinessRequest;
use App\Services\Implementation\UserFavouriteBusinessService;
use Illuminate\Http\JsonResponse;

class UserFavouriteBusinessController extends Controller
{
    /**
     * @param UserFavouriteBusiness $model
     * @param UserFavouriteBusinessService $userFavouriteBusinessService
     * @param CustomResponse $customResponse
     */
    public function __construct(UserFavouriteBusiness $model, public readonly UserFavouriteBusinessService $userFavouriteBusinessService, public CustomResponse $customResponse)
    {
        $authParameter = 'userFavouriteBusiness';
        parent::__construct($model, $this->userFavouriteBusinessService, $customResponse, $authParameter,
            UserFavouriteBusinessCollection::class, UserFavouriteBusinessResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreUserFavouriteBusinessRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserFavouriteBusinessRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param UserFavouriteBusiness $userFavouriteBusiness
     * @return JsonResponse
     */
    public function show(UserFavouriteBusiness $userFavouriteBusiness): JsonResponse
    {
        return $this->showHelper($userFavouriteBusiness);
    }

    /**
     * @param UserFavouriteBusiness $userFavouriteBusiness
     * @return JsonResponse
     */
    public function destroy(UserFavouriteBusiness $userFavouriteBusiness): JsonResponse
    {
        return $this->destroyHelper($userFavouriteBusiness);
    }
}
