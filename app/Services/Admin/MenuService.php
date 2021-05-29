<?php

namespace App\Services\Admin;

use App\Helpers\ConstVariable;
use App\Helpers\Menu\FormOption;
use App\Helpers\Traits\ParentRecursive;
use App\Repositories\Admin\Interfaces\MenuRepositoryInterface;
use App\Services\Admin\Interfaces\MenuServiceInterface;

class MenuService implements MenuServiceInterface
{
    /**
     * @var MenuRepositoryInterface
     */
    protected MenuRepositoryInterface $menuRepository;

    /**
     * @var ParentRecursive
     */
    protected ParentRecursive $parentRecursive;

    /**
     * @var FormOption
     */
    protected FormOption $formOption;

    /**
     * UserService constructor.
     * @param MenuRepositoryInterface $menuRepository
     * @param ParentRecursive $parentRecursive
     * @param FormOption $formOption
     */
    public function __construct(
        MenuRepositoryInterface $menuRepository,
        ParentRecursive $parentRecursive,
        FormOption $formOption
    ) {
        $this->menuRepository = $menuRepository;
        $this->parentRecursive = $parentRecursive;
        $this->formOption = $formOption;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function addUser($request)
    {
        $option = $this->formOption->optionArray($request);
        return $this->menuRepository->addMenu($option);
    }

    /**
     * @param $parentId
     * @param $currentMenuId
     * @return string
     */
    public function getMenuRecursive($parentId, $currentMenuId): string
    {
        $data = $this->menuRepository->getData();
        return $this->parentRecursive->getParentRecursive($data, $id = ConstVariable::ROOT_PARENT, $parentId, $currentMenuId);
    }

    /**
     * @return mixed
     */
    public function getListMenu()
    {
        return $this->menuRepository->getListMenu(ConstVariable::LIMIT_PAGINATE);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteMenu($id)
    {
        return $this->menuRepository->deleteMenu($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->menuRepository->findById($id);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateMenu($id, $request)
    {
        $option = $this->formOption->optionArray($request);
        return $this->menuRepository->updateMenu($id, $option);
    }
}
