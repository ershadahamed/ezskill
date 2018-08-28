<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ Request::path() == 'dashboard' ? 'active' : '' }}">
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
        
        {{-- @if(in_array('ADMIN', $data_roles)) --}}
        <li class="header">ADMIN NAVIGATION</li>
        <li class="{{ Request::path() == 'roles' ? 'active' : '' }}">
            <a href="">
                <i class="material-icons">security</i>
                <span>Roles</span>
            </a>
        </li>
        <li class="{{ Request::path() == '/payment' ? 'active' : '' }}">
            <a href="">
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
        <li class="{{ Request::path() == '/users' ? 'active' : '' }}">
            <a href="">
                <i class="material-icons">face</i>
                <span>Users</span>
            </a>
        </li>
        {{-- @endif --}}

    </ul>
</div>