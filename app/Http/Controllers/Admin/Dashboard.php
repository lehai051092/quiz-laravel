<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Dashboard extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('admin.dashboard');
    }
}
