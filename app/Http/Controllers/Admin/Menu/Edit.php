<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Requests\Menu\FormSubmitRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class Edit extends MenuAbstract
{
    /**
     * @param $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function getFormEdit($id)
    {
        $menu = $this->menuService->findById($id);
        $htmlOption = $this->menuService->getMenuRecursive($menu->parent_id, $menu->id);
        return view('admin.menu.edit', compact('menu','htmlOption'));
    }

    /**
     * @param $id
     * @param FormSubmitRequest $request
     * @return RedirectResponse
     */
    public function postEdit($id, FormSubmitRequest $request): RedirectResponse
    {
        $this->menuService->updateMenu($id, $request);
        return redirect()->route('admin.menu.list');
    }
}
