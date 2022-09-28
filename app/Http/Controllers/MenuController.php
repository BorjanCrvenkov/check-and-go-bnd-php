<?php

namespace App\Http\Controllers;

use App\Http\Resources\Menu\MenuCollection;
use App\Http\Resources\Menu\MenuResource;
use App\Http\Responses\CustomResponse;
use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Services\Implementation\MenuService;
use Illuminate\Http\JsonResponse;

class MenuController extends Controller
{
    /**
     * @param Menu $model
     * @param MenuService $menuService
     * @param CustomResponse $customResponse
     */
    public function __construct(Menu $model, public readonly MenuService $menuService, public CustomResponse $customResponse)
    {
        $authParameter = 'menu';
        parent::__construct($model, $this->menuService, $customResponse, $authParameter, MenuCollection::class,
            MenuResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreMenuRequest $request
     * @return JsonResponse
     */
    public function store(StoreMenuRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Menu $menu
     * @return JsonResponse
     */
    public function show(Menu $menu): JsonResponse
    {
        return $this->showHelper($menu);
    }

    /**
     * @param Menu $menu
     * @param UpdateMenuRequest $request
     * @return JsonResponse
     */
    public function update(Menu $menu, UpdateMenuRequest $request): JsonResponse
    {
        return $this->updateHelper($menu, $request);
    }

    /**
     * @param Menu $menu
     * @return JsonResponse
     */
    public function destroy(Menu $menu): JsonResponse
    {
        return $this->destroyHelper($menu);
    }
}
