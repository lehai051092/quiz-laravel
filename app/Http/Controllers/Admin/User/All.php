<?php

namespace App\Http\Controllers\Admin\User;

use App\Helpers\ConstVariable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class All extends UserAbstract
{
    /**
     * @return Application|Factory|View
     */
    public function getList()
    {
        $users = $this->userService->getPaginateUser(ConstVariable::LIMIT_PAGINATE);
        return view('admin.user.list', compact('users'));
    }
}
