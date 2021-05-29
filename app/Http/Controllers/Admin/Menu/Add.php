<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Requests\Menu\FormSubmitRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class Add extends MenuAbstract
{
    /**
     * @return Application|Factory|View
     */
    public function getFormAdd()
    {
        $htmlOption = $this->menuService->getMenuRecursive($parentId = '', $currentMenuId = '');
        return view('admin.menu.add', compact('htmlOption'));
    }

    /**
     * @param FormSubmitRequest $request
     * @return RedirectResponse
     */
    public function postAdd(FormSubmitRequest $request): RedirectResponse
    {
        $this->menuService->addUser($request);
        return redirect()->route('admin.menu.list');
    }
}
