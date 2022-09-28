<?php

namespace App\Http\Controllers;

use App\Http\Resources\Image\ImageCollection;
use App\Http\Resources\Image\ImageResource;
use App\Http\Responses\CustomResponse;
use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Services\Implementation\ImageService;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
    /**
     * @param Image $model
     * @param ImageService $imageService
     * @param CustomResponse $customResponse
     */
    public function __construct(Image $model, public readonly ImageService $imageService, public CustomResponse $customResponse)
    {
        $authParameter = 'image';
        parent::__construct($model, $this->imageService, $customResponse, $authParameter, ImageCollection::class, ImageResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreImageRequest $request
     * @return JsonResponse
     */
    public function store(StoreImageRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Image $image
     * @return JsonResponse
     */
    public function show(Image $image): JsonResponse
    {
        return $this->showHelper($image);
    }

    /**
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy(Image $image): JsonResponse
    {
        return $this->destroyHelper($image);
    }
}
