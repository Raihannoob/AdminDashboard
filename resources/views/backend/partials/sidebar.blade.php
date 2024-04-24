@php
    function isActiveRoute($routeNames, $output = 'active')
    {
        foreach ((array) $routeNames as $routeName) {
            if (Route::currentRouteName() == $routeName) {
                return $output;
            }
        }
        return null;
    }

    function areActiveRoutes($routeNames, $output = 'active')
    {
        foreach ((array) $routeNames as $routeName) {
            if (Route::currentRouteName() == $routeName) {
                return $output;
            }
        }
        return null;
    }
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ isActiveRoute(['home']) }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="bi bi-house-fill menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{-- Promotions Menu  --}}
        <li class="nav-item {{ isActiveRoute(['product.promotion.index']) }}">
            <a class="nav-link" href="{{ route('product.promotion.index') }}">
                <i class="bi bi-gift menu-icon"></i>
                <span class="menu-title">Promotions</span>
            </a>
        </li>

        {{-- Product Category Menu --}}
        <li class="nav-item {{ isActiveRoute(['productcategory.index']) }}">
            <a class="nav-link" href="{{ route('productcategory.index') }}">
                <i class="bi bi-tag menu-icon"></i>
                <span class="menu-title">Product Category</span>
            </a>
        </li>

        {{-- Product Menu --}}
        <li class="nav-item {{ isActiveRoute(['product.index']) }}">
            <a class="nav-link" href="{{ route('product.index') }}">
                <i class="bi bi-cart3 menu-icon"></i>
                <span class="menu-title">Product</span>
            </a>
        </li>

        {{-- FAQ Menu --}}
        <li class="nav-item {{ isActiveRoute(['faq.index']) }}">
            <a class="nav-link" href="{{ route('faq.index') }}">
                <i class="bi bi-question-circle menu-icon"></i>
                <span class="menu-title">FAQ</span>
            </a>
        </li>
        {{-- Happy Users Menu --}}
        <li class="nav-item {{ isActiveRoute(['happyuser.index']) }}">
            <a class="nav-link" href="{{ route('happyuser.index') }}">
                <i class="bi bi-emoji-laughing menu-icon"></i>
                <span class="menu-title">Happy Users</span>
            </a>
        </li>
        {{-- Settings  --}}
        <li class="nav-item nav-category">Settings</li>

        <li class="nav-item {{ areActiveRoutes(['settings.system', 'settings.mail', 'settings.social-media', 'settings.dynamic-page'], 'active show') }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false"
                aria-controls="e-commerce">
                <i class="menu-icon bi bi-gear-fill"></i>
                <span class="menu-title">Settings</span>
                <i class="bi bi-menu-arrow"></i>
            </a>
            <div class="collapse {{ areActiveRoutes(['settings.system', 'settings.mail', 'settings.social-media', 'settings.dynamic-page'], 'show') }}"
                id="e-commerce">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link {{ isActiveRoute(['settings.system']) }}"
                            href="{{ route('system.setting') }}">System Settings</a></li>

                    <li class="nav-item"><a class="nav-link {{ isActiveRoute(['settings.mail']) }}"
                            href="{{ route('mailsetting') }}">Mail Setting</a></li>

                    <li class="nav-item"><a class="nav-link {{ isActiveRoute(['settings.social-media']) }}"
                            href="{{ route('socialmedia') }}">Social Media</a></li>

                    <li class="nav-item"><a class="nav-link {{ isActiveRoute(['settings.dynamic-page']) }}"
                            href="{{ route('dynamic_page') }}">Add Dynamic Page</a></li>
                </ul>
            </div>
        </li>
        {{-- Profile Setting --}}
        <li class="nav-item {{ isActiveRoute(['profilesetting']) }}">
            <a class="nav-link" href="{{ route('profilesetting') }}">
                <i class="bi bi-person-lines-fill menu-icon"></i>
                <span class="menu-title">Profile Setting</span>
            </a>
        </li>
    </ul>
</nav>
