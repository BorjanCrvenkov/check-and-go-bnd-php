<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuItem\MenuItemCollection;
use App\Http\Resources\MenuItem\MenuItemResource;
use App\Http\Responses\CustomResponse;
use App\Models\MenuItem;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;
use App\Services\Implementation\MenuService;
use Illuminate\Http\JsonResponse;

class MenuItemController extends Controller
{
    /**
     * @param MenuItem $model
     * @param MenuService $menuItemService
     * @param CustomResponse $customResponse
     */
    public function __construct(MenuItem $model, public readonly MenuService $menuItemService, public CustomResponse $customResponse)
    {
        $authParameter = 'menuItem';
        parent::__construct($model, $this->menuItemService, $customResponse, $authParameter, MenuItemCollection::class,
            MenuItemResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreMenuItemRequest $request
     * @return JsonResponse
     */
    public function store(StoreMenuItemRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param MenuItem $menuItem
     * @return JsonResponse
     */
    public function show(MenuItem $menuItem): JsonResponse
    {
        return $this->showHelper($menuItem);
    }

    /**
     * @param MenuItem $menuItem
     * @param UpdateMenuItemRequest $request
     * @return JsonResponse
     */
    public function update(MenuItem $menuItem, UpdateMenuItemRequest $request): JsonResponse
    {
        return $this->updateHelper($menuItem, $request);
    }

    /**
     * @param MenuItem $menuItem
     * @return JsonResponse
     */
    public function destroy(MenuItem $menuItem): JsonResponse
    {
        return $this->destroyHelper($menuItem);
    }
}
