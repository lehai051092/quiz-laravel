<?php

namespace App\Services\Admin\Interfaces;

interface CategoryServiceInterface
{
    public function getMenuRecursive($parentId, $currentId);

    public function addCategory($request);

    public function getCategoryPaginate();

    public function deleteCategory($id);

    public function findById($id);

    public function updateCategory($id, $request);
}
