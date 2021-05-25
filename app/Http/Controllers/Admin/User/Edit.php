<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\FormEditSubmitRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
     * @param FormEditSubmitRequest $request
     * @return RedirectResponse
     */
    public function postEdit($id, FormEditSubmitRequest $request): RedirectResponse
    {
        $this->userService->editById($id, $request);
        return redirect()->route('admin.all');
    }
}
