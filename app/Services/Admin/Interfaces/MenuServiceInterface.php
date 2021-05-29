<?php

namespace App\Services\Admin\Interfaces;

interface MenuServiceInterface
{
    public function addUser($request);

    public function getMenuRecursive($parentId, $currentMenuId);

    public function getListMenu();

    public function deleteMenu($id);

    public function findById($id);

    public function updateMenu($id, $request);
}
