<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    protected User $user;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(
        User $user
    ) {
        $this->user = $user;
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getPaginateUser($limit)
    {
        return $this->user->paginate($limit);
    }

    /**
     * @param $option
     * @return mixed
     */
    public function addUser($option)
    {
        return $this->user->create($option);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->user->findOrFail($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id)
    {
        return $this->findById($id)->delete();
    }

    /**
     * @param $id
     * @param $option
     * @return mixed
     */
    public function editById($id, $option)
    {
        return $this->findById($id)->update($option);
    }

    /**
     * @param $id
     * @param $newPassword
     * @return mixed
     */
    public function changePasswordUser($id, $newPassword)
    {
        return $this->findById($id)->update(['password' => $newPassword]);
    }
}
