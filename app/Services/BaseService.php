<?php

namespace App\Services;

use App\Models\BaseModel;

abstract class BaseService
{
    protected BaseModel $model;

    /**
     * @param BaseModel $model
     */
    public function __construct(BaseModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        return $this->model->paginate(BaseModel::PAGINATION_OFFSET);
    }

    /**
     * @param int $id
     * @return BaseModel
     */
    public function show(int $id): BaseModel
    {
        return $this->model->find($id);
    }

    /**
     * @param array $data
     * @return BaseModel
     */
    public function store(array $data): BaseModel
    {
        return $this->model->create($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return BaseModel
     */
    public function update(int $id, array $data): BaseModel
    {
        $model = $this->model->find($id);
        $model->update($data);

        return $model;
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): bool|null
    {
        $model = $this->model->find($id);

        return $model->delete();
    }
}
