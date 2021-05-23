<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Query\Builder;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    protected $user;

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
     * @param $request
     * @return mixed
     */
    public function getUserLogin($request)
    {
        return $this->user->where('email', $request->email)->where('password', bcrypt($request->password))->first();
    }
}
