<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Http\RedirectResponse;

class Delete extends CategoryAbstract
{
    /**
     * @param $id
     * @return RedirectResponse
     */
    public function deleteById($id): RedirectResponse
    {
        $this->categoryService->deleteCategory($id);
        return  redirect()->route('admin.category.list');
    }
}
