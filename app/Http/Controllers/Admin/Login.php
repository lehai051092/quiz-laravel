<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\User\Credentials;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\UserServiceInterface;
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
     * @var UserServiceInterface
     */
    protected $userService;

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
     * @param UserServiceInterface $userService
     * @param Credentials $credentials
     * @param Session $session
     */
    public function __construct(
        UserServiceInterface $userService,
        Credentials $credentials,
        Session $session
    ) {
        $this->guard = Auth::guard('admin');
        $this->userService = $userService;
        $this->credentials = $credentials;
        $this->session = $session;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
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
