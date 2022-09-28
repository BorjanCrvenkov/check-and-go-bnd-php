<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessImage\BusinessImageCollection;
use App\Http\Resources\BusinessImage\BusinessImageResource;
use App\Http\Responses\CustomResponse;
use App\Models\BusinessImages;
use App\Http\Requests\StoreBusinessImagesRequest;
use App\Services\Implementation\BusinessImageService;
use Illuminate\Http\JsonResponse;

class BusinessImagesController extends Controller
{
    /**
     * @param BusinessImages $model
     * @param BusinessImageService $businessImageService
     * @param CustomResponse $customResponse
     */
    public function __construct(BusinessImages $model, public readonly BusinessImageService $businessImageService,
                                public CustomResponse $customResponse)
    {
        $authParameter = 'businessImage';
        parent::__construct($model, $this->businessImageService, $customResponse, $authParameter,
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
     * @param StoreBusinessImagesRequest $request
     * @return JsonResponse
     */
    public function store(StoreBusinessImagesRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param BusinessImages $businessImage
     * @return JsonResponse
     */
    public function show(BusinessImages $businessImage): JsonResponse
    {
        return $this->showHelper($businessImage);
    }

    /**
     * @param BusinessImages $businessImage
     * @return JsonResponse
     */
    public function destroy(BusinessImages $businessImage): JsonResponse
    {
        return $this->destroyHelper($businessImage);
    }
}
