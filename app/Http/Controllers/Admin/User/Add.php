<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\User\FormAddSubmitRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
     * @param FormAddSubmitRequest $request
     * @return RedirectResponse
     */
    public function postAdd(FormAddSubmitRequest $request): RedirectResponse
    {
        $this->userService->addUser($request);
        return redirect()->route('admin.user.list');
    }
}
