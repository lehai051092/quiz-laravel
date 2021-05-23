<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Edit extends UserAbstract
{
    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function getFormEdit($id)
    {
        $user = $this->userService->findById($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function postEdit($id, Request $request): RedirectResponse
    {
        $this->userService->editById($id, $request);
        return redirect()->route('admin.all');
    }
}
