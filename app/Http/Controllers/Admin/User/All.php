<?php

namespace App\Http\Controllers\Admin\User;

use App\Helpers\ConstVariable;
use Illuminate\Http\Request;

class All extends UserAbstract
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getList()
    {
        $users = $this->userService->getPaginateUser(ConstVariable::LIMIT_PAGINATE);
        return view('admin.user.list', compact('users'));
    }
}
