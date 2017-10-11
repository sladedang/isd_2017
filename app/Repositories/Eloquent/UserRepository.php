<?php

namespace App\Repositories\Eloquent;

use App\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends AuthenticatableRepository implements UserRepositoryInterface
{
    public function getBlankModel()
    {
        return new User();
    }

    public function createNewUser($name, $email, $password)
    {
        $model = $this->getBlankModel();
        $model->name = $name;
        $model->email = $email;
        $model->password = $password;
        $model->save();

        return true;
    }
}
