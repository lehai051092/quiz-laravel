<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ListCategory extends CategoryAbstract
{
    /**
     * @return Application|Factory|View
     */
    public function getList()
    {
        $categories = $this->categoryService->getCategoryPaginate();
        return view('admin.category.list', compact('categories'));
    }
}
