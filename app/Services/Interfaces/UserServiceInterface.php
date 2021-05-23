<?php

namespace App\Services\Interfaces;

interface UserServiceInterface
{
    public function getPaginateUser($limit);

    public function addUser($request);

    public function findById($id);

    public function deleteById($id);

    public function editById($id, $request);
}
