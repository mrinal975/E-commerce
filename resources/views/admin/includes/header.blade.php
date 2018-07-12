<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <button class="dropbtn"><i class="fa fa-user fa-fw"></i>{{ Auth::user()->lastname}}<i class="fa fa-caret-down"></i></button>
        <ul class="dropdown-menu dropdown-user dropdown-content">
            <li>
                <a href="{{url('/dashboard/logout')}}">Logout</a>
            </li>
        </ul>
    </li>
</ul>