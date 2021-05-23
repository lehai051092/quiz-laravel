<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Auth;

abstract class UserAbstract extends Controller
{
    /**
     * @var UserServiceInterface
     */
    protected $userService;

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
