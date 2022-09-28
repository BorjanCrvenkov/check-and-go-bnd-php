<?php

namespace App\Http\Controllers;

use App\Http\Resources\Review\ReviewCollection;
use App\Http\Resources\Review\ReviewResource;
use App\Http\Responses\CustomResponse;
use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Services\Implementation\ReviewService;
use Illuminate\Http\JsonResponse;

class ReviewController extends Controller
{
    /**
     * @param Review $model
     * @param ReviewService $reviewService
     * @param CustomResponse $customResponse
     */
    public function __construct(Review $model, public readonly ReviewService $reviewService, public CustomResponse $customResponse)
    {
        $authParameter = 'review';
        parent::__construct($model, $this->reviewService, $customResponse, $authParameter,
            ReviewCollection::class, ReviewResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreReviewRequest $request
     * @return JsonResponse
     */
    public function store(StoreReviewRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function show(Review $review): JsonResponse
    {
        return $this->showHelper($review);
    }

    /**
     * @param Review $review
     * @param UpdateReviewRequest $request
     * @return JsonResponse
     */
    public function update(Review $review, UpdateReviewRequest $request): JsonResponse
    {
        return $this->updateHelper($review, $request);
    }

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function destroy(Review $review): JsonResponse
    {
        return $this->destroyHelper($review);
    }
}
