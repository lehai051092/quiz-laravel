<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Session;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    protected $userRepository;

    /**
     * @var Session
     */
    protected $session;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     * @param Session $session
     */
    public function __construct(
        UserRepositoryInterface $userRepository,
        Session $session
    ) {
        $this->userRepository = $userRepository;
        $this->session = $session;
    }

    /**
     * @param $request
     * @return bool
     */
    public function checkUserLogin($request): bool
    {
        $user = $this->userRepository->getUserLogin($request);

        if ($user) {
            $this->session::put('user_id', $user->id);
            $this->session::put('user_name', $user->name);
            $this->session::put('success', $user->name);

            return true;
        }

        $this->session::put('error', "Re-enter email and password!!! Something went wrong.");
        return false;
    }
}
