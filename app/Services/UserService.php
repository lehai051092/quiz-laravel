<?php

namespace App\Services;

use App\Helpers\User\AddFormOption;
use App\Helpers\User\EditFormOption;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    protected UserRepositoryInterface $userRepository;

    /**
     * @var AddFormOption
     */
    protected AddFormOption $addFormOption;

    /**
     * @var EditFormOption
     */
    protected EditFormOption $editFormOption;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     * @param AddFormOption $addFormOption
     * @param EditFormOption $editFormOption
     */
    public function __construct(
        UserRepositoryInterface $userRepository,
        AddFormOption $addFormOption,
        EditFormOption $editFormOption
    ) {
        $this->userRepository = $userRepository;
        $this->addFormOption = $addFormOption;
        $this->editFormOption = $editFormOption;
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
        $option = $this->addFormOption->optionArray($request);
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
        $option = $this->editFormOption->optionArray($request);
        return $this->userRepository->editById($id, $option);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function changePasswordUser($id, $request)
    {
        return $this->userRepository->changePasswordUser($id, Hash::make($request->new_password));
    }
}
