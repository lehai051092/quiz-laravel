<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Requests\Category\FormSubmitRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class Edit extends CategoryAbstract
{
    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function getFormEdit($id)
    {
        $category = $this->categoryService->findById($id);
        $htmlMenuOption = $this->categoryService->getMenuRecursive($parentId = '', $currentId = '');
        return view('admin.category.edit', compact('category','htmlMenuOption'));
    }

    /**
     * @param $id
     * @param FormSubmitRequest $request
     * @return RedirectResponse
     */
    public function postEdit($id, FormSubmitRequest $request): RedirectResponse
    {
        $this->categoryService->updateCategory($id, $request);
        return redirect()->route('admin.category.list');
    }
}
