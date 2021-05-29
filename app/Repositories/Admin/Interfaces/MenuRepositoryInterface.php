<?php

namespace App\Repositories\Admin\Interfaces;

interface MenuRepositoryInterface
{
    public function addMenu($option);

    public function getData();

    public function getListMenu($limit);

    public function findById($id);

    public function deleteMenu($id);

    public function updateMenu($id, $option);
}
