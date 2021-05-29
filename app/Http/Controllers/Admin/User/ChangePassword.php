<?php

namespace App\Http\Controllers\Admin\User;

use App\Rules\MatchOldPassword;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ChangePassword extends UserAbstract
{
    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function getFormChangePassword($id)
    {
        $user = $this->userService->findById($id);
        return View('admin.user.change-password', compact('user'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function postChangePassword($id, Request $request): RedirectResponse
    {
        $user = $this->userService->findById($id);
        $request->validate([
            'old_password' => ['required', new MatchOldPassword($user)],
            'new_password' => ['required'],
            'confirm_new_password' => ['same:new_password'],
        ]);
        $this->userService->changePasswordUser($id, $request);
        return redirect()->route('admin.user.list');
    }
}
