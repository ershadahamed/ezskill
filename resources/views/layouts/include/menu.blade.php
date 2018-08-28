<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ Request::path() == 'dashboard' || Request::path() == '/' ? 'active' : '' }}">
            <a href="{{route('dashboard')}}">
                <i class="material-icons">home</i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::path() == '/pk' ? 'active' : '' }}">
            <a href="">
                <i class="material-icons">assessment</i>
                <span>Penilain Kendiri</span>
            </a>
        </li>
        <li class="{{ Request::path() == '/payment' ? 'active' : '' }}">
            <a href="">
                <i class="material-icons">show_chart</i>
                <span>Status ePortfolio</span>
            </a>
        </li>

        <li class="header">ADMIN NAVIGATION</li>
        <li class="{{ Request::path() == 'admin/roles' ? 'active' : '' }}">
            <a href="{{ route('roles') }}">
                <i class="material-icons">security</i>
                <span>Roles</span>
            </a>
        </li>
        <li class="{{ Request::path() == 'admin/pay-setting' || Request::path() == 'admin/pay-setting/create' ? 'active' : '' }}">
            <a href="{{ route('pay-setting.index') }}">
                <i class="material-icons">monetization_on</i>
                <span>Payment Setting</span>
            </a>
        </li>
        <li class="{{ Request::path() == '/payment' ? 'active' : '' }}">
            <a href="">
                <i class="material-icons">payment</i>
                <span>Transaction Details</span>
            </a>
        </li>
        <li class="{{ Request::path() == 'users' ? 'active' : '' }}">
            <a href="{{ route('user.index') }}">
                <i class="material-icons">face</i>
                <span>Users</span>
            </a>
        </li>

    </ul>
</div>