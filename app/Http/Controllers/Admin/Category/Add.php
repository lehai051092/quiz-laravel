<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Requests\Category\FormSubmitRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class Add extends CategoryAbstract
{
    /**
     * @return Application|Factory|View
     */
    public function getFormAdd()
    {
        $htmlMenuOption = $this->categoryService->getMenuRecursive($parentId = '', $currentId = '');
        return view('admin.category.add', compact('htmlMenuOption'));
    }

    /**
     * @param FormSubmitRequest $request
     * @return RedirectResponse
     */
    public function postAdd(FormSubmitRequest $request): RedirectResponse
    {
        $this->categoryService->addCategory($request);
        return redirect()->route('admin.category.list');
    }
}
