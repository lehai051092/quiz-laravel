<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\Admin\Interfaces\UserServiceInterface;

abstract class UserAbstract extends Controller
{
    /**
     * @var UserServiceInterface
     */
    protected UserServiceInterface $userService;

    /**
     * UserAbstract constructor.
     * @param UserServiceInterface $userService
     */
    public function __construct(
        UserServiceInterface $userService
    ) {
        $this->userService = $userService;
    }
}
