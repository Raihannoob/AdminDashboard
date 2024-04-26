@extends('auth.layouts.app')

@section('content')

    <!-- start header  -->
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
                        <!-- menu  -->
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
    <!-- end header  -->

    <main>
        <!--Register area start  -->
        <section class="login--register--area rent--posi">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="login--form user--profile--form">
                            <h1>Register</h1>
                            <form class="form--common" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="input--group">
                                    <label for="name">Full Name</label>
                                    <input type="text"  class="@error('name') is-invalid @enderror" placeholder="john"
                                        name="name" value="{{ old('name') }}" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input--group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="@error('email') is-invalid @enderror"
                                        placeholder="eg. youremail@email.com" name="email" value="{{ old('email') }}" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input--group">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" name="phone" class="@error('phone') is-invalid @enderror"
                                        id="phone" placeholder="eg. +123 456 7890">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input--group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="@error('address') is-invalid @enderror"
                                        id="address" placeholder="Your Address">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input--group">
                                    <label for="password">Password</label>
                                    <input type="password" class="@error('password') is-invalid @enderror"
                                        id="exampleInputPassword" placeholder="PASSWORD" name="password"
                                        value="{{ old('password') }}" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input--group">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="@error('password_confirmation') is-invalid @enderror"
                                        id="exampleInputPassword" placeholder="CONFIRM PASSWORD"
                                        name="password_confirmation" value="{{ old('password_confirmation') }}" />
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="button">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img class="rent-img rent-img1" src="{{ asset('frontend/images/rent.svg') }}" alt="">
            <img class="rent-img rent-img2" src="{{ asset('frontend/images/rent.svg') }}" alt="">
            <!-- Register area end  -->
    </main>
    <!-- start footer  -->
    <footer>
        <div class="container">
            <div class="footer--row">
                <!-- footer--box  -->
                <div class="footer--box logo--box">
                    <a href="index.html">
                        <img src="{{ asset('frontend/images/logo.svg') }}" alt="">
                    </a>
                    <p>Our goal is to provide a wide selection of quality cars that are budget friendly.</p>
                </div>
                <!-- footer--box -->
                <div class="footer--box">
                    <h4>Pages</h4>
                    <ul>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Pricing</a>
                        </li>
                        <li>
                            <a href="#">Car</a>
                        </li>
                        <li>
                            <a href="#">Consulting</a>
                        </li>
                    </ul>
                </div>
                <!-- footer box  -->
                <div class="footer--box">
                    <h4>Company</h4>
                    <ul>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Author</a>
                        </li>
                        <li>
                            <a href="#">Product Page</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- footer box  -->
                <div class="footer--box contact">
                    <h4>Any Questions?</h4>
                    <ul>
                        <li>
                            <a href="mailto:youremail@gmail.com">youremail@gmail.com</a>
                        </li>
                        <li>
                            <p>
                                Feel free! Ask us anything related to our service
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer--bottom">
                <p>2024 Powered by Autos Only Rentals</p>
                <ul>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Website Terms</a>
                    </li>
                    <li>
                        <a href="#">Cookie Policy </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end footer  -->
@endsection
