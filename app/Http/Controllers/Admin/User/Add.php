<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Add extends UserAbstract
{
    /**
     * @return Application|Factory|View
     */
    public function getFormAdd()
    {
        return view('admin.user.add');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function postAdd(Request $request): RedirectResponse
    {
        $this->userService->addUser($request);
        return redirect()->route('admin.all');
    }
}
