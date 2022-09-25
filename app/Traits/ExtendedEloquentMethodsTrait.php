<?php

namespace App\Traits;

use App\Models\BaseModel;
use App\Models\BaseUserModel;
use Illuminate\Database\Eloquent\Model;

trait ExtendedEloquentMethodsTrait
{
    /**
     * @param array $data
     * @return Model
     */
    public static function create(array $data): Model
    {
        $model = parent::query()->create($data);

        return $model->refresh();
    }

    /**
     * @param array $attributes
     * @param array $options
     * @return bool|BaseModel|BaseUserModel
     */
    public function update(array $attributes = [], array $options = []): bool|BaseModel|BaseUserModel
    {
        if (!$this->exists) {
            return false;
        }

        $model = $this->fill($attributes);

        $model->save($options);

        return $model->refresh();
    }

}
