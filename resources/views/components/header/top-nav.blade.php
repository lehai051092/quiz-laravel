<?php

use Illuminate\Support\Facades\Auth;

$authUser = Auth::user();
?>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset(($authUser->image_path) ? 'public/' . $authUser->image_path : '') }}">
                <span class="username">
                    {{ $authUser->first_name . ' ' . $authUser->last_name }}
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{ route('admin.logout') }}"><i class="fa fa-key"></i>Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>
