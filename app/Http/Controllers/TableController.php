<?php

namespace App\Http\Controllers;

use App\Http\Resources\Table\TableCollection;
use App\Http\Resources\Table\TableResource;
use App\Http\Responses\CustomResponse;
use App\Models\Table;
use App\Http\Requests\StoreTableRequest;
use App\Http\Requests\UpdateTableRequest;
use App\Services\Implementation\TableService;
use Illuminate\Http\JsonResponse;

class TableController extends Controller
{
    /**
     * @param Table $model
     * @param TableService $tableService
     * @param CustomResponse $customResponse
     */
    public function __construct(Table $model, public readonly TableService $tableService, public CustomResponse $customResponse)
    {
        $authParameter = 'table';
        parent::__construct($model, $this->tableService, $customResponse, $authParameter,
            TableCollection::class, TableResource::class);
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->indexHelper();
    }

    /**
     * @param StoreTableRequest $request
     * @return JsonResponse
     */
    public function store(StoreTableRequest $request): JsonResponse
    {
        return $this->storeHelper($request);
    }

    /**
     * @param Table $table
     * @return JsonResponse
     */
    public function show(Table $table): JsonResponse
    {
        return $this->showHelper($table);
    }

    /**
     * @param Table $table
     * @param UpdateTableRequest $request
     * @return JsonResponse
     */
    public function update(Table $table, UpdateTableRequest $request): JsonResponse
    {
        return $this->updateHelper($table, $request);
    }

    /**
     * @param Table $table
     * @return JsonResponse
     */
    public function destroy(Table $table): JsonResponse
    {
        return $this->destroyHelper($table);
    }
}
