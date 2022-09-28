<?php

namespace App\Http\Controllers;

use App\Http\Resources\Role\RoleCollection;
use App\Http\Resources\Role\RoleResource;
use App\Http\Responses\CustomResponse;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Services\Implementation\RoleService;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    /**
     * @param Role $model
     * @param RoleService $roleService
     * @param CustomResponse $customResponse
     */
    public function __construct(Role $model, public readonly RoleService $roleService, public CustomResponse $customResponse)
    {
        $authParameter = 'role';
        parent::__construct($model, $this->roleService, $customResponse, $authParameter,
            RoleCollection::class, RoleResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreRoleRequest $request
     * @return JsonResponse
     */
    public function store(StoreRoleRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Role $role
     * @return JsonResponse
     */
    public function show(Role $role): JsonResponse
    {
        return $this->showHelper($role);
    }

    /**
     * @param Role $role
     * @param UpdateRoleRequest $request
     * @return JsonResponse
     */
    public function update(Role $role, UpdateRoleRequest $request): JsonResponse
    {
        return $this->updateHelper($role, $request);
    }

    /**
     * @param Role $role
     * @return JsonResponse
     */
    public function destroy(Role $role): JsonResponse
    {
        return $this->destroyHelper($role);
    }
}
