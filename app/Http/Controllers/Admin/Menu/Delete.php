<?php

namespace App\Http\Controllers\Admin\Menu;

use Illuminate\Http\RedirectResponse;

class Delete extends MenuAbstract
{
    /**
     * @param $id
     * @return RedirectResponse
     */
    public function deleteById($id): RedirectResponse
    {
        $this->menuService->deleteMenu($id);
        return redirect()->route('admin.menu.list');
    }
}
