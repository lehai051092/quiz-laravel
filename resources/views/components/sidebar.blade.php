<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li class="sub-menu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-user"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.user.list') }}">List user</a></li>
                        <li><a href="{{ route('admin.user.add') }}">Add user</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>
                        <span>Menus</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('admin.menu.list') }}">List menu</a></li>
                        <li><a href="{{ route('admin.menu.add') }}">Add menu</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
