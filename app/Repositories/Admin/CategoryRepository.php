<?php

namespace App\Repositories\Admin;

use App\Models\Category;
use App\Repositories\Admin\Interfaces\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @var Category
     */
    protected Category $category;

    /**
     * MenuRepository constructor.
     * @param Category $category
     */
    public function __construct(
        Category $category
    ) {
        $this->category = $category;
    }

    /**
     * @param $option
     * @return mixed
     */
    public function addCategory($option)
    {
        return $this->category->create($option);
    }

    /**
     * @param $limit
     * @return Category[]|Collection
     */
    public function getCategoryPaginate($limit)
    {
        return $this->category->paginate($limit);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->category->findOrFail($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteCategory($id)
    {
        return $this->findById($id)->delete();
    }

    /**
     * @param $id
     * @param $option
     * @return mixed
     */
    public function updateCategory($id, $option)
    {
        return $this->findById($id)->update($option);
    }
}
