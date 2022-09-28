<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;
use App\Http\Responses\CustomResponse;
use App\Models\User;
use App\Services\Implementation\UserService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param UserService $userService
     * @param CustomResponse $customResponse
     */
    public function __construct(private readonly UserService $userService, private readonly CustomResponse $customResponse)
    {
        $this->authorizeResource(User::class, 'user');
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $userPagination = $this->userService->index();

        $users = new UserCollection($userPagination);

        return $this->customResponse->success(data: $users);
    }

    /**
     * @param StoreUserRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $userData = new UserResource($this->userService->store($validatedData));

        return $this->customResponse->success(data: $userData);
    }

    /**l
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user): JsonResponse
    {
        $userData = new UserResource($user);

        return $this->customResponse->success(data: $userData);
    }

    /**
     * @param User $user
     * @param UpdateUserRequest $request
     * @return JsonResponse
     */
    public function update(User $user, UpdateUserRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $userData = new UserResource($this->userService->update($user->id, $validatedData));

        return $this->customResponse->success(data: $userData);
    }

    /**
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        $this->userService->destroy($user->id);

        return $this->customResponse->noContent();
    }
}
