<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3">
                <!-- logo  -->
                <a href="index.html" class="logo">
                    <img src="{{ asset('frontend/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="col-9">
                <div class="menu--wrapper">
                    <ul class="menu">
                        <li>
                            <a href="{{ route('home.index') }}" class="{{ request()->route()->getName() === 'home.index' ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('car-listing.index') }}" class="{{ request()->route()->getName() === 'car-listing.index' ? 'active' : '' }}">Car Listing</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us.index') }}" class="{{ request()->route()->getName() === 'about-us.index' ? 'active' : '' }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('faq.index') }}" class="{{ request()->route()->getName() === 'faq.index' ? 'active' : '' }}">FAQs</a>
                        </li>
                    </ul>
                    
                    
                    <!-- button area  -->
                    <div class="btn--area d-flex align-items-center gap-3">
                        <a href="{{route('login')}}" class="button">Log In</a>
                        <a href="{{route('register')}}" class="buttonv2">Register</a>
                    </div>
                </div>
                <!-- hamburger menu  -->
                <div class="hamburger-menu">
                    <span class="line-top"></span>
                    <span class="line-center"></span>
                    <span class="line-bottom"></span>
                 </div>
            </div>
        </div>
    </div>
</header>