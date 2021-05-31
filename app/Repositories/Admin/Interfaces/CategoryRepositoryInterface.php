<?php

namespace App\Repositories\Admin\Interfaces;

interface CategoryRepositoryInterface
{
    public function addCategory($option);

    public function getCategoryPaginate($limit);

    public function findById($id);

    public function deleteCategory($id);

    public function updateCategory($id, $option);
}
