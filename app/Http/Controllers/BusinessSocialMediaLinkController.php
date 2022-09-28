<?php

namespace App\Http\Controllers;

use App\Http\Resources\BusinessImage\BusinessImageCollection;
use App\Http\Resources\BusinessImage\BusinessImageResource;
use App\Http\Responses\CustomResponse;
use App\Models\BusinessSocialMediaLink;
use App\Http\Requests\StoreBusinessSocialMediaLinkRequest;
use App\Http\Requests\UpdateBusinessSocialMediaLinkRequest;
use App\Services\Implementation\BusinessSocialMediaLinkService;
use Illuminate\Http\JsonResponse;

class BusinessSocialMediaLinkController extends Controller
{
    /**
     * @param BusinessSocialMediaLink $model
     * @param BusinessSocialMediaLinkService $businessSocialMediaLinkService
     * @param CustomResponse $customResponse
     */
    public function __construct(BusinessSocialMediaLink $model, public readonly BusinessSocialMediaLinkService $businessSocialMediaLinkService,
                                public CustomResponse   $customResponse)
    {
        $authParameter = 'businessSocialMediaLink';
        parent::__construct($model, $this->businessSocialMediaLinkService, $customResponse, $authParameter,
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
     * @param StoreBusinessSocialMediaLinkRequest $request
     * @return JsonResponse
     */
    public function store(StoreBusinessSocialMediaLinkRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param BusinessSocialMediaLink $businessSocialMediaLink
     * @return JsonResponse
     */
    public function show(BusinessSocialMediaLink $businessSocialMediaLink): JsonResponse
    {
        return $this->showHelper($businessSocialMediaLink);
    }

    /**
     * @param BusinessSocialMediaLink $businessSocialMediaLink
     * @param UpdateBusinessSocialMediaLinkRequest $request
     * @return JsonResponse
     */
    public function update(BusinessSocialMediaLink $businessSocialMediaLink, UpdateBusinessSocialMediaLinkRequest $request): JsonResponse
    {
        return $this->updateHelper($businessSocialMediaLink, $request);
    }

    /**
     * @param BusinessSocialMediaLink $businessSocialMediaLink
     * @return JsonResponse
     */
    public function destroy(BusinessSocialMediaLink $businessSocialMediaLink): JsonResponse
    {
        return $this->destroyHelper($businessSocialMediaLink);
    }
}
