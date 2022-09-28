<?php

namespace App\Http\Controllers;

use App\Http\Resources\Strike\StrikeCollection;
use App\Http\Resources\Strike\StrikeResource;
use App\Http\Responses\CustomResponse;
use App\Models\Strike;
use App\Http\Requests\StoreStrikeRequest;
use App\Http\Requests\UpdateStrikeRequest;
use App\Services\Implementation\StrikeService;
use Illuminate\Http\JsonResponse;

class StrikeController extends Controller
{
    /**
     * @param Strike $model
     * @param StrikeService $strikeService
     * @param CustomResponse $customResponse
     */
    public function __construct(Strike $model, public readonly StrikeService $strikeService, public CustomResponse $customResponse)
    {
        $authParameter = 'strike';
        parent::__construct($model, $this->strikeService, $customResponse, $authParameter,
            StrikeCollection::class, StrikeResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreStrikeRequest $request
     * @return JsonResponse
     */
    public function store(StoreStrikeRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Strike $strike
     * @return JsonResponse
     */
    public function show(Strike $strike): JsonResponse
    {
        return $this->showHelper($strike);
    }

    /**
     * @param Strike $strike
     * @param UpdateStrikeRequest $request
     * @return JsonResponse
     */
    public function update(Strike $strike, UpdateStrikeRequest $request): JsonResponse
    {
        return $this->updateHelper($strike, $request);
    }

    /**
     * @param Strike $strike
     * @return JsonResponse
     */
    public function destroy(Strike $strike): JsonResponse
    {
        return $this->destroyHelper($strike);
    }
}
