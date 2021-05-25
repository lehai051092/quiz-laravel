<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\User\Credentials;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    /**
     * @var \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
     */
    private $guard;

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @var Session
     */
    protected $session;

    /**
     * Index constructor.
     * @param Credentials $credentials
     * @param Session $session
     */
    public function __construct(
        Credentials $credentials,
        Session $session
    ) {
        $this->guard = Auth::guard('admin');
        $this->credentials = $credentials;
        $this->session = $session;
    }

    /**
     * @return Application|Factory|View
     */
    public function getLogin()
    {
        if ($this->guard->check()) {
            return view('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $credentials = $this->credentials->optionArray($request);

        if ($this->guard->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withInput();
        }
    }

    /**
     * @return RedirectResponse
     */
    public function getLogout(): RedirectResponse
    {
        $this->guard->logout();
        $this->session::flush();
        return redirect()->route('admin.login');
    }
}
