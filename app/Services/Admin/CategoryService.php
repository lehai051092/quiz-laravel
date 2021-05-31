<?php

namespace App\Services\Admin;

use App\Helpers\Category\FormOption;
use App\Helpers\ConstVariable;
use App\Repositories\Admin\Interfaces\CategoryRepositoryInterface;
use App\Services\Admin\Interfaces\CategoryServiceInterface;
use App\Services\Admin\Interfaces\MenuServiceInterface;

class CategoryService implements CategoryServiceInterface
{
    /**
     * @var CategoryRepositoryInterface
     */
    protected CategoryRepositoryInterface $categoryRepository;

    /**
     * @var MenuServiceInterface
     */
    protected MenuServiceInterface $menuService;

    /**
     * @var FormOption
     */
    protected FormOption $formOption;

    /**
     * /**
     * UserService constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     * @param MenuServiceInterface $menuService
     * @param FormOption $formOption
     */
    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        MenuServiceInterface $menuService,
        FormOption $formOption
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->menuService = $menuService;
        $this->formOption = $formOption;
    }

    /**
     * @param $parentId
     * @param $currentId
     * @return mixed
     */
    public function getMenuRecursive($parentId, $currentId)
    {
        return $this->menuService->getMenuRecursiveAvailable($parentId, $currentId);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function addCategory($request)
    {
        $option = $this->formOption->optionArray($request);
        return $this->categoryRepository->addCategory($option);
    }

    /**
     * @return mixed
     */
    public function getCategoryPaginate()
    {
        return $this->categoryRepository->getCategoryPaginate(ConstVariable::LIMIT_PAGINATE);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteCategory($id)
    {
        return $this->categoryRepository->deleteCategory($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->categoryRepository->findById($id);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateCategory($id, $request)
    {
        $option = $this->formOption->optionArray($request);
        return $this->categoryRepository->updateCategory($id, $option);
    }
}
