<?php

namespace App\Http\Controllers\Admin\Menu;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ListMenu extends MenuAbstract
{
    /**
     * @return Application|Factory|View
     */
    public function getList()
    {
        $menus = $this->menuService->getListMenu();
        return view('admin.menu.list', compact('menus'));
    }
}
