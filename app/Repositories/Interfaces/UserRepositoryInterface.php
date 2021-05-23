<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function getPaginateUser($limit);

    public function addUser($option);

    public function findById($id);

    public function deleteById($id);

    public function editById($id, $option);
}
