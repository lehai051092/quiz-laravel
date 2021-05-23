<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Delete extends UserAbstract
{
    public function deleteById($id): RedirectResponse
    {
        $this->userService->deleteById($id);
        return redirect()->route('admin.all');
    }
}
