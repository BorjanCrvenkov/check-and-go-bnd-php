<?php

namespace App\Http\Controllers;

use App\Http\Responses\CustomResponse;
use App\Models\BaseModel;
use App\Services\BaseService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param BaseModel $model
     * @param BaseService $service
     * @param CustomResponse $customResponse
     * @param string $authParameter
     * @param string $collection
     * @param string $resource
     */
    public function __construct(public BaseModel $model, protected BaseService $service, protected CustomResponse $customResponse,
                                protected string $authParameter, protected string $collection, protected string $resource)
    {
        $this->authorizeResource($model::class, $this->authParameter);
    }

    /**
     * @return JsonResponse
     */
    public function indexHelper(): JsonResponse
    {
        $modelPagination = $this->service->index();

        $models = new $this->collection($modelPagination);

        return $this->customResponse->success(data: $models);
    }

    /**
     * @param FormRequest $request
     * @return JsonResponse
     */
    public function storeHelper(FormRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $modelData = new $this->resource($this->service->store($validatedData));

        return $this->customResponse->success(data: $modelData);
    }

    /**
     * @param BaseModel $model
     * @return JsonResponse
     */
    public function showHelper(BaseModel $model): JsonResponse
    {
        $modelData = new $this->resource($model);

        return $this->customResponse->success(data: $modelData);
    }

    /**
     * @param BaseModel $model
     * @param FormRequest $request
     * @return JsonResponse
     */
    public function updateHelper(BaseModel $model, FormRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $modelData = new $this->resource($this->service->update($model->id, $validatedData));

        return $this->customResponse->success(data: $modelData);
    }

    /**
     * @param BaseModel $model
     * @return JsonResponse
     */
    public function destroyHelper(BaseModel $model): JsonResponse
    {
        $this->service->destroy($model->id);

        return $this->customResponse->noContent();
    }
}
