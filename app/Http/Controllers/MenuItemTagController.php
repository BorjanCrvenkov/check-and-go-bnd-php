<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuItemTag\MenuItemTagCollection;
use App\Http\Resources\MenuItemTag\MenuItemTagResource;
use App\Http\Responses\CustomResponse;
use App\Models\MenuItemTag;
use App\Http\Requests\StoreMenuItemTagRequest;
use App\Services\Implementation\MenuItemTagService;
use Illuminate\Http\JsonResponse;

class MenuItemTagController extends Controller
{
    /**
     * @param MenuItemTag $model
     * @param MenuItemTagService $menuItemTagService
     * @param CustomResponse $customResponse
     */
    public function __construct(MenuItemTag $model, public readonly MenuItemTagService $menuItemTagService, public CustomResponse $customResponse)
    {
        $authParameter = 'menuItemTag';
        parent::__construct($model, $this->menuItemTagService, $customResponse, $authParameter,
            MenuItemTagCollection::class, MenuItemTagResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreMenuItemTagRequest $request
     * @return JsonResponse
     */
    public function store(StoreMenuItemTagRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param MenuItemTag $menuItemTag
     * @return JsonResponse
     */
    public function show(MenuItemTag $menuItemTag): JsonResponse
    {
        return $this->showHelper($menuItemTag);
    }

    /**
     * @param MenuItemTag $menuItemTag
     * @return JsonResponse
     */
    public function destroy(MenuItemTag $menuItemTag): JsonResponse
    {
        return $this->destroyHelper($menuItemTag);
    }
}
