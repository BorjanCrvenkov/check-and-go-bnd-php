<?php

namespace App\Services\Implementation;

use App\Models\BaseModel;
use App\Models\User;

class UserService
{
    /**
     * @return mixed
     */
    public function index(): mixed
    {
       return User::paginate(BaseModel::PAGINATION_OFFSET);
    }

    /**
     * @param int $id
     * @return User
     */
    public function show(int $id): User
    {
        return User::find($id);
    }

    /**
     * @param array $data
     * @return User
     */
    public function store(array $data): User
    {
        return User::create($data);
    }

    public function update(int $id, array $data): User
    {
        $user = User::find($id);
        $user->update($data);

        return $user;
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): bool|null
    {
        $model = User::find($id);

        return $model->delete();
    }
}
