<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Services\Admin\Interfaces\MenuServiceInterface;

abstract class MenuAbstract extends Controller
{
    /**
     * @var MenuServiceInterface
     */
    protected MenuServiceInterface $menuService;

    /**
     * MenuAbstract constructor.
     * @param MenuServiceInterface $menuService
     */
    public function __construct(
        MenuServiceInterface $menuService
    ) {
        $this->menuService = $menuService;
    }
}
