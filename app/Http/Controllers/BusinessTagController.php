<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessImage\BusinessImageCollection;
use App\Http\Resources\BusinessImage\BusinessImageResource;
use App\Http\Responses\CustomResponse;
use App\Models\BusinessTag;
use App\Http\Requests\StoreBusinessTagRequest;
use App\Services\Implementation\BusinessTagService;
use Illuminate\Http\JsonResponse;

class BusinessTagController extends Controller
{
    /**
     * @param BusinessTag $model
     * @param BusinessTagService $businessTagService
     * @param CustomResponse $customResponse
     */
    public function __construct(BusinessTag           $model, public readonly BusinessTagService $businessTagService,
                                public CustomResponse $customResponse)
    {
        $authParameter = 'businessTag';
        parent::__construct($model, $this->businessTagService, $customResponse, $authParameter,
            BusinessImageCollection::class, BusinessImageResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreBusinessTagRequest $request
     * @return JsonResponse
     */
    public function store(StoreBusinessTagRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param BusinessTag $businessTag
     * @return JsonResponse
     */
    public function show(BusinessTag $businessTag): JsonResponse
    {
        return $this->showHelper($businessTag);
    }

    /**
     * @param BusinessTag $businessTag
     * @return JsonResponse
     */
    public function destroy(BusinessTag $businessTag): JsonResponse
    {
        return $this->destroyHelper($businessTag);
    }
}
