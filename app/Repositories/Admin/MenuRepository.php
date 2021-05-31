<?php

namespace App\Repositories\Admin;

use App\Models\Menu;
use App\Repositories\Admin\Interfaces\MenuRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MenuRepository implements MenuRepositoryInterface
{
    /**
     * @var Menu
     */
    protected Menu $menu;

    /**
     * MenuRepository constructor.
     * @param Menu $menu
     */
    public function __construct(
        Menu $menu
    ) {
        $this->menu = $menu;
    }

    /**
     * @param $option
     * @return mixed
     */
    public function addMenu($option)
    {
        return $this->menu->create($option);
    }

    /**
     * @return Menu[]|Collection
     */
    public function getData()
    {
        return $this->menu->all();
    }

    /**
     * @param $limit
     * @return mixed
     */
    public function getListMenu($limit)
    {
        return $this->menu->paginate($limit);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->menu->findOrFail($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteMenu($id)
    {
        return $this->findById($id)->delete();
    }

    /**
     * @param $id
     * @param $option
     * @return mixed
     */
    public function updateMenu($id, $option)
    {
        return $this->findById($id)->update($option);
    }

    /**
     * @return mixed
     */
    public function getMenuAvailable()
    {
        return $this->menu->where('status', '1')->get();
    }
}
