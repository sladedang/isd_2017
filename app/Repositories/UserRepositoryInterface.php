<?php

namespace App\Repositories;

interface UserRepositoryInterface extends AuthenticatableRepositoryInterface
{
    public function createNewUser($name, $email, $password);
}
