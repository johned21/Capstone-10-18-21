<div class="sidebar">
    <div class="logo-content">
        <div class="logo">
            <div class="logo-name">
                Dashboard
            </div>
        </div>
        <i class='bx bx-menu' id="btn-menu"></i>
    </div>

    <ul class="nav-list">
        <li class="" style="display: none">
            <a>
                <i class='bx bx-search'></i>
                
            </a>
            
        </li>

        <li>
            <a href="{{ route('admin.dashboard') }}" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <i class='bx bx-grid-alt'></i>
                <span class="links-name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>

        <li>
            <a href="{{ route('admin.users') }}" class="{{ Request::is('admin/users') ? 'active' : '' }}">
                <i class='fal fa-users'></i>
                <span class="links-name">Users</span>
            </a>
            <span class="tooltip">Users</span>
        </li>

        <li>
            <a href="">
                <i class='bx bx-home'></i>
                <span class="links-name">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>

        <li>
            <a href="">
                <i class='bx bx-chalkboard'></i>
                <span class="links-name">Class</span>
            </a>
            <span class="tooltip">Class</span>
        </li>

        <li>
            <a href="">
                <i class='bx bx-book'></i>
                <span class="links-name">Subject</span>
            </a>
            <span class="tooltip">Subject</span>
        </li>

        <li>
            <a href="">
                <i class='bx bx-info-circle'></i>
                <span class="links-name">About</span>
            </a>
            <span class="tooltip">About</span>
        </li>


    </ul>

    <a class="logout-content fixed-bottom" href="{{ route('logout') }}">
        <div class="logout">
            <div class="logout-details">
                <div class="logout-name">Logout</div>
            </div>
            <i class='bx bx-log-out' id="logout"></i>
        </div>
    </a>
</div>