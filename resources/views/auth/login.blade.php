@extends('auth.layouts.app')

@section('title', 'LogIn')

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
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="listing.html">Car Listing</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQs</a>
                            </li>
                        </ul>
                        <!-- button area  -->
                        <div class="btn--area d-flex align-items-center gap-3">
                            <a href="login.html" class="button">Log In</a>
                            <a href="register.html" class="buttonv2">Register</a>
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
        <!-- login area start  -->
        <section class="login--register--area rent--posi">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="login--form user--profile--form">
                            <h1>Log In</h1>
                            <form class="form--common" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="input--group">
                                    <label for="email">Email Address</label>
                                    <input type="email"@error('email') is-invalid @enderror" id="email"
                                        placeholder="ENTER YOUR EMAIL" name="email" value="{{ old('email') }}"
                                        autocomplete="email" autofocus required />
                                </div>
                                <div class="input--group">
                                    <label for="password">Password</label>
                                    <input type="password" @error('password') is-invalid @enderror" id="password"
                                        placeholder="ENTER YOUR PASSWORD" name="password" required
                                        autocomplete="current-password" />
                                </div>
                                <button type="submit" class="button">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img class="rent-img rent-img1" src="{{ asset('frontend/images/rent.svg') }}" alt="">
            <img class="rent-img rent-img2" src="{{ asset('frontend/images/rent.svg') }}" alt="">
        </section>
        <!-- login area end  -->
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
