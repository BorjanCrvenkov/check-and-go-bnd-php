<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tag\TagCollection;
use App\Http\Resources\Tag\TagResource;
use App\Http\Responses\CustomResponse;
use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Services\Implementation\TagService;
use Illuminate\Http\JsonResponse;

class TagController extends Controller
{
    /**
     * @param Tag $model
     * @param TagService $tagService
     * @param CustomResponse $customResponse
     */
    public function __construct(Tag $model, public readonly TagService $tagService, public CustomResponse $customResponse)
    {
        $authParameter = 'tag';
        parent::__construct($model, $this->tagService, $customResponse, $authParameter,
            TagCollection::class, TagResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreTagRequest $request
     * @return JsonResponse
     */
    public function store(StoreTagRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Tag $tag
     * @return JsonResponse
     */
    public function show(Tag $tag): JsonResponse
    {
        return $this->showHelper($tag);
    }

    /**
     * @param Tag $tag
     * @param UpdateTagRequest $request
     * @return JsonResponse
     */
    public function update(Tag $tag, UpdateTagRequest $request): JsonResponse
    {
        return $this->updateHelper($tag, $request);
    }

    /**
     * @param Tag $tag
     * @return JsonResponse
     */
    public function destroy(Tag $tag): JsonResponse
    {
        return $this->destroyHelper($tag);
    }
}
