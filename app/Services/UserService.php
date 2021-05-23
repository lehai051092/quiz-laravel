<?php

namespace App\Services;

use App\Helpers\User\UserOption;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepository;

    /**
     * @var UserOption
     */
    protected $userOption;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     * @param UserOption $userOption
     */
    public function __construct(
        UserRepositoryInterface $userRepository,
        UserOption $userOption
    ) {
        $this->userRepository = $userRepository;
        $this->userOption = $userOption;
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getPaginateUser($limit)
    {
        return $this->userRepository->getPaginateUser($limit);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function addUser($request)
    {
        $option = $this->userOption->optionArray($request);
        return $this->userRepository->addUser($option);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id)
    {
        return $this->userRepository->deleteById($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->userRepository->findById($id);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function editById($id, $request)
    {
        $option = $this->userOption->optionArray($request);
        return $this->userRepository->editById($id, $option);
    }
}
