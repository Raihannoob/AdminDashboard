@extends('frontend.app')

@section('tittle')
View Details
@endsection
@section('content')
<main>
    <!-- view details hero area start -->
    <section class="view--details--hero--area">
        <div class="container">
            <div class="row">
                <div class="view--hero--contents">
                    <h1>Rent Your Car <span>Today </span></h1>
                    <!-- single--car--img  -->
                    <div class="single--car--img">
                        <img src="assets/images/view-details-car.png" alt="">
                    </div>
                    <img class="autos--only--text" src="assets/images/autos-only-text.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- view details hero area end -->
    <!-- car details area start  -->
    <div class="car--details--area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt_30">
                    <div class="details--box">
                        <div class="car--name--area">
                            <h2>Hyundai Tucson Accent</h2>
                            <div class="rating">
                                <div class="img--box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22"
                                        viewBox="0 0 24 22" fill="none">
                                        <path
                                            d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                            fill="#FFAE12" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22"
                                        viewBox="0 0 24 22" fill="none">
                                        <path
                                            d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                            fill="#FFAE12" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22"
                                        viewBox="0 0 24 22" fill="none">
                                        <path
                                            d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                            fill="#FFAE12" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22"
                                        viewBox="0 0 24 22" fill="none">
                                        <path
                                            d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                            fill="#FFAE12" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22"
                                        viewBox="0 0 24 22" fill="none">
                                        <path
                                            d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z"
                                            fill="#D1D3D6" />
                                    </svg>
                                </div>
                                <span class="ml_10">(2k reviews)</span>
                            </div>
                            <div class="single--car--specifications">
                                <div class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48"
                                        viewBox="0 0 49 48" fill="none">
                                        <path
                                            d="M30.7646 6.77141L30.7629 6.77053L31.0267 7.82534C31.0913 8.08338 31.0961 8.35275 31.041 8.61296C30.9858 8.87317 30.872 9.11738 30.7083 9.32704C30.5446 9.53669 30.3353 9.70626 30.0962 9.82287C29.8571 9.93948 29.5946 10.0001 29.3286 10H29.3285H19.671C19.6709 10 19.6708 10 19.6708 10C19.405 9.99985 19.1427 9.93915 18.9038 9.82249C18.6649 9.7058 18.4557 9.5362 18.2921 9.32658C18.1285 9.11695 18.0149 8.8728 17.9598 8.61267C17.9047 8.35255 17.9096 8.08329 17.9741 7.82534L17.9741 7.82527L18.7241 4.82527L18.7242 4.82496C18.8186 4.44638 19.0369 4.11026 19.3444 3.87015C19.652 3.63004 20.031 3.49974 20.4212 3.5H20.4215L28.5785 3.5L28.5794 3.5C28.9698 3.49935 29.3493 3.62947 29.6572 3.86961C29.9651 4.10976 30.1837 4.44608 30.2781 4.82496L30.2782 4.82524L30.7646 6.77141ZM39.4854 39.1846L39.4875 39.188C39.7129 39.5496 39.8413 39.9622 39.8605 40.3876C39.8798 40.813 39.7891 41.2363 39.5973 41.6166L39.5965 41.6183L39.2612 42.2896L39.2606 42.2909C38.9305 42.9564 38.4206 43.5161 37.7886 43.9066C37.1567 44.2971 36.4279 44.5026 35.685 44.5H35.6833L13.3183 44.5L13.3166 44.5C12.5738 44.5025 11.8452 44.2969 11.2134 43.9064C10.5815 43.516 10.0717 42.9563 9.74172 42.2909L9.74079 42.289L9.40492 41.6188C9.21417 41.2376 9.12405 40.8139 9.14313 40.3881C9.16221 39.9623 9.28985 39.5484 9.51393 39.1858C9.73801 38.8232 10.0511 38.5239 10.4234 38.3163C10.7957 38.1088 11.2149 37.9999 11.6412 38H11.6413L37.3603 38L37.362 38C37.7879 37.9985 38.207 38.1067 38.5789 38.3142C38.9508 38.5217 39.263 38.8215 39.4854 39.1846Z"
                                            stroke="#FF0000" />
                                        <path
                                            d="M21.5 13C21.4337 13 21.3701 12.9737 21.3232 12.9268C21.2763 12.8799 21.25 12.8163 21.25 12.75V9.75C21.25 9.6837 21.2763 9.62011 21.3232 9.57322C21.3701 9.52634 21.4337 9.5 21.5 9.5C21.5663 9.5 21.6299 9.52634 21.6768 9.57322C21.7237 9.62011 21.75 9.6837 21.75 9.75V12.75C21.75 12.8163 21.7237 12.8799 21.6768 12.9268C21.6299 12.9737 21.5663 13 21.5 13ZM27.5 13C27.4337 13 27.3701 12.9737 27.3232 12.9268C27.2763 12.8799 27.25 12.8163 27.25 12.75V9.75C27.25 9.68369 27.2763 9.62011 27.3232 9.57322C27.3701 9.52634 27.4337 9.5 27.5 9.5C27.5663 9.5 27.6299 9.52634 27.6768 9.57322C27.7237 9.62011 27.75 9.68369 27.75 9.75V12.75C27.75 12.8163 27.7237 12.8799 27.6768 12.9268C27.6299 12.9737 27.5663 13 27.5 13ZM18.5 18.5H30.5C30.5663 18.5 30.6299 18.5263 30.6768 18.5732C30.7237 18.6201 30.75 18.6837 30.75 18.75V23.5H18.25V18.75C18.25 18.6837 18.2763 18.6201 18.3232 18.5732C18.3701 18.5263 18.4337 18.5 18.5 18.5Z"
                                            stroke="#FF0000" />
                                        <path
                                            d="M15.75 18.7495V18.75V35.5H12.25V18.7503C12.2519 17.0932 12.911 15.5045 14.0828 14.3328C15.2545 13.161 16.8432 12.5019 18.5003 12.5H30.4997C32.1568 12.5019 33.7455 13.161 34.9172 14.3328C36.089 15.5046 36.7482 17.0934 36.75 18.7506V35.5H33.25V18.75V18.7495C33.2493 18.0205 32.9594 17.3216 32.4439 16.8061C31.9284 16.2906 31.2295 16.0007 30.5005 16H30.5L18.5 16L18.4995 16C17.7705 16.0007 17.0716 16.2906 16.5561 16.8061C16.0406 17.3216 15.7507 18.0205 15.75 18.7495Z"
                                            stroke="#FF0000" />
                                        <path d="M18.25 26H30.75V35.5H18.25V26Z" stroke="#FF0000" />
                                    </svg>
                                    <p>6 seat</p>
                                </div>
                                <div class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48"
                                        viewBox="0 0 49 48" fill="none">
                                        <path
                                            d="M33.6062 13.44C33.6062 18.4658 29.532 22.54 24.5062 22.54C19.4805 22.54 15.4062 18.4658 15.4062 13.44C15.4062 8.41417 19.4805 4.33997 24.5062 4.33997C29.532 4.33997 33.6062 8.41417 33.6062 13.44Z"
                                            stroke="#FF0000" />
                                        <path
                                            d="M22.4686 24.96C20.0809 24.9675 17.718 25.4453 15.5149 26.366C13.3118 27.2868 11.3116 28.6324 9.62859 30.3262C7.94554 32.0199 6.61259 34.0286 5.70583 36.2375C4.79907 38.4463 4.33627 40.8122 4.34384 43.2C4.34384 43.4546 4.44498 43.6987 4.62502 43.8788C4.80505 44.0588 5.04923 44.16 5.30384 44.16H43.7038M22.4686 24.96V25.46H22.4694M22.4686 24.96L22.4702 25.46C22.47 25.46 22.4697 25.46 22.4694 25.46M22.4686 24.96H26.539M22.4694 25.46C20.1476 25.4674 17.85 25.932 15.7077 26.8274C13.5652 27.7228 11.62 29.0314 9.98326 30.6786C8.3465 32.3258 7.05019 34.2792 6.16837 36.4273C5.28655 38.5755 4.83647 40.8763 4.84384 43.1984L4.84384 43.2C4.84384 43.322 4.89231 43.439 4.97857 43.5252C5.06484 43.6115 5.18184 43.66 5.30384 43.66H43.6775M22.4694 25.46H26.5385M43.6775 43.66C43.6712 43.6608 43.6649 43.6614 43.6585 43.662L43.7038 44.16M43.6775 43.66H43.7038V44.16M43.6775 43.66C43.8105 43.6432 43.9333 43.5789 44.0228 43.4786L44.3958 43.8116M43.7038 44.16C43.9703 44.1357 44.2176 44.0112 44.3958 43.8116M44.3958 43.8116L44.0228 43.4786C44.1167 43.3735 44.1671 43.2367 44.164 43.0959L44.1637 43.0858H44.1638C44.154 38.4142 42.2938 33.9367 38.9905 30.6334C35.6872 27.3301 31.21 25.47 26.5385 25.46M44.3958 43.8116C44.574 43.612 44.6698 43.3523 44.6638 43.0848C44.6537 38.2809 42.7409 33.6767 39.344 30.2798C35.9471 26.8829 31.3429 24.9701 26.539 24.96M26.5385 25.46C26.5383 25.46 26.5382 25.46 26.538 25.46L26.539 24.96M26.5385 25.46H26.539V24.96"
                                            stroke="#FF0000" />
                                    </svg>
                                    <p>5 person</p>
                                </div>
                                <div class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 48 48" fill="none">
                                        <g clip-path="url(#clip0_3950_942)">
                                            <path
                                                d="M29.4198 22.8433V23.2673L29.8381 23.3366C31.9089 23.6797 32.9606 25.1255 33.5074 26.8211C34.0594 28.5329 34.0609 30.408 34.0609 31.4123C34.0609 32.2871 34.2453 33.0003 34.558 33.5129C34.8672 34.0197 35.3402 34.3783 35.8969 34.3783C36.4969 34.3783 37.0086 33.98 37.3447 33.4217C37.6862 32.8545 37.8922 32.0626 37.8922 31.0918C37.8922 28.9361 37.0207 26.2631 36.1363 23.5501L36.1142 23.4824L35.6388 23.6374L36.1142 23.4824C34.8218 19.5183 33.5543 15.5905 34.22 12.1133C34.6647 9.79085 36.1723 7.22931 37.7419 5.0795C39.3018 2.94293 40.8788 1.27185 41.399 0.736896C41.5436 0.588193 41.7414 0.503012 41.9488 0.500078C42.1562 0.497145 42.3564 0.576715 42.5052 0.721294C42.5787 0.792876 42.6375 0.878242 42.6781 0.972526C42.7187 1.06687 42.7404 1.1683 42.7418 1.27099C42.7433 1.37369 42.7245 1.47568 42.6865 1.57111C42.6485 1.66656 42.5921 1.75358 42.5205 1.82721L42.5204 1.8273C41.1864 3.19957 39.7935 4.86101 38.6153 6.55524L38.4207 6.83498L38.6099 7.11836C38.8766 7.51772 39.5095 8.53898 39.9243 9.78916C40.3419 11.0478 40.5132 12.4607 39.9645 13.7002C39.4048 14.9645 38.2077 15.8472 36.2627 16.2664L35.7882 16.3687L35.8764 16.846C36.2458 18.8469 36.9343 20.9616 37.5981 22.9978C38.5724 25.9865 39.4499 28.7047 39.4499 31.0919C39.4499 34.4077 37.5521 35.9428 35.8836 35.9428C35.0924 35.9428 34.2564 35.6094 33.6131 34.8903C32.9714 34.173 32.4966 33.0417 32.4966 31.4125C32.4966 27.0379 31.3753 25.4766 30.0944 24.9993L29.4198 24.7479V25.4678V42.5509V43.0509H29.9198H32.6978C33.1444 43.0509 33.4265 43.3355 33.4265 43.7529V46.6377C33.4265 47.1387 33.0654 47.5 32.6978 47.5H6.09332C5.674 47.5 5.25781 47.0824 5.25781 46.6377V43.7529C5.25781 43.3871 5.59028 43.0509 6.09332 43.0509H8.7645H9.2645V42.5509V9.29538C9.2645 8.92958 9.59698 8.59337 10.1 8.59337H11.4891H11.9891V8.09337V6.7311C11.9891 6.36529 12.3215 6.02909 12.8246 6.02909H25.8062C26.2529 6.02909 26.535 6.31371 26.535 6.7311V8.09337V8.59337H27.035H28.6911C29.1377 8.59337 29.4198 8.87799 29.4198 9.29538V22.8433ZM38.5333 13.0706L38.5333 13.0705C38.8175 12.4316 38.7816 11.6889 38.6364 11.0169C38.4889 10.3344 38.2135 9.655 37.938 9.09477L37.5097 8.22379L37.0491 9.07818C36.4235 10.239 35.9532 11.3804 35.7565 12.4073L35.7564 12.4075C35.6464 12.9831 35.6004 13.5793 35.6036 14.1887L35.607 14.8291L36.2274 14.6705C37.3233 14.3904 38.1688 13.8895 38.5333 13.0706ZM27.013 22.6557C27.3473 22.3215 27.535 21.8682 27.535 21.3956V12.2603C27.535 11.7877 27.3473 11.3344 27.013 11.0002C26.6788 10.666 26.2255 10.4782 25.7529 10.4782H12.7712C12.2985 10.4782 11.8452 10.666 11.511 11.0002C11.1768 11.3344 10.9891 11.7877 10.9891 12.2603V21.3956C10.9891 21.8682 11.1768 22.3215 11.511 22.6557C11.8452 22.99 12.2985 23.1777 12.7712 23.1777H25.7529C26.2255 23.1777 26.6788 22.99 27.013 22.6557Z"
                                                stroke="#FF0000" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3950_942">
                                                <rect width="48" height="48" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>Gas</p>
                                </div>
                            </div>
                            <div class="refueling--area">
                                <div class="box">
                                    <h3>Refueling</h3>
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                                        fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf
                                        moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art
                                        party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat
                                        kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies
                                        master cleanse.</p>
                                </div>
                                <div class="box mt_40">
                                    <h3>Car Wash</h3>
                                    <p>Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident
                                        chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest
                                        in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar
                                        jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan
                                        exercitation, photo booth</p>
                                </div>
                                <div class="box mt_40">
                                    <h3>No Smoking</h3>
                                    <p>Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident
                                        chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest
                                        in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar
                                        jean vinegar stumptown yr pop-up artisan sunt. Craft beer elit seitan
                                        exercitation, photo booth</p>
                                </div>
                                <div class="include--area">
                                    <h4>Included</h4>
                                    <ul class="feature">
                                        <li>
                                            <img src="{{asset('frontend/images/check.svg')}}" alt="check-img">
                                            <p>Audio input</p>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/check.svg')}}" alt="check-img">
                                            <p>Bluetooth</p>
                                        </li>
                                        <li>
                                            <img src="{{asset('frontend/images/check.svg')}}" alt="check-img">
                                            <p>Heated seats</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.svg" alt="check-img">
                                            <p>All Wheel drive</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.svg" alt="check-img">
                                            <p>USB input</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.svg" alt="check-img">
                                            <p>FM Radio</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="include--area not--include">
                                    <h4>Not Included</h4>
                                    <ul class="feature">
                                        <li>
                                            <img src="{{asset('frontend/images/check.svg')}}" alt="check-img">
                                            <p>GPS Navigation</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.svg" alt="check-img">
                                            <p>Sunroof</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt_30">
                    <div class="reservation--form">
                        <h3>Information</h3>
                        <form action="#">
                            <div class="calender--wrapper--area mb_40">
                                <div class="calendar--wrapper">
                                    <div class="d-flex w-100">
                                        <div class="row row-cols-2 w-100 responsive--calendar--wrapper">
                                            <div class="col d-none flex-column">
                                                <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-3">
                                                    <div class="container-fluid">
                                                        <a class="navbar-brand" href="#">Navbar</a>
                                                        <button class="navbar-toggler" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#navbarSupportedContent"
                                                            aria-controls="navbarSupportedContent"
                                                            aria-expanded="false" aria-label="Toggle navigation">
                                                            <span class="navbar-toggler-icon"></span>
                                                        </button>
                                                        <div class="collapse navbar-collapse"
                                                            id="navbarSupportedContent">
                                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                                <li class="nav-item dropdown">
                                                                    <a class="nav-link dropdown-toggle"
                                                                        data-bs-auto-close="outside" href="#"
                                                                        role="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bi bi-calendar2-day"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <div data-bs-toggle="calendar"
                                                                            id="calendar_navbar"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </nav>
                                                <button class="btn btn-primary mb-3" type="button"
                                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                                    aria-controls="offcanvasExample">
                                                    in offcanvas
                                                </button>
                                                <div class="dropdown-center">
                                                    <button class="btn btn-secondary dropdown-toggle"
                                                        data-bs-auto-close="outside" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-calendar2-day"></i>
                                                    </button>
                                                    <div class="dropdown-menu p-0">
                                                        <div data-bs-toggle="calendar" id="calendar_dropdown"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col w-100">
                                                <div data-bs-toggle="calendar" id="calendar_inline"
                                                    class="col event--calendar w-100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="offcanvas offcanvas-start d-none" tabindex="-1"
                                        id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                                                Offcanvas
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body d-flex justify-content-center p-0">
                                            <div data-bs-toggle="calendar" id="calendar_offcanvas"
                                                class="rounded w-75"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="input--group">
                                <label for="fullName">Full Name</label>
                                <input type="text" id="fullName" placeholder="Jone Dee">
                            </div>
                            <div class="input--group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" placeholder="jrosstherealt@gmail.com">
                            </div>
                            <div class="input--group">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" placeholder="+04 652 23660">
                            </div>
                            <div class="input--group">
                                <label for="pickup-address">Pickup ADRESS</label>
                                <input type="text" id="pickup-address" placeholder="los Vegas">
                            </div>
                            <div class="input--group date">
                                <label for="pickup--date">Pickup Date</label>
                                <input type="text" class="pick--date" id="pickup--date" placeholder="MM/DD/YYYY"
                                    readonly>
                            </div>
                            <div class="input--group date">
                                <label for="drop--date">Drop Off Date</label>
                                <input type="text" class="pick--date" id="drop--date" placeholder="MM/DD/YYYY"
                                    readonly>
                            </div>
                            <div class="input--group">
                                <label for="drop--address">Drop Off Adress</label>
                                <input type="text" id="drop--address" placeholder="Airport">
                            </div>
                            <div class="input--group radio--box--area">
                                <div class="input--radio">
                                    <input type="radio" id="day" name="radio-group" checked="">
                                    <label for="day">
                                        <p>Rent per Day</p>
                                        <p>$60</p>
                                    </label>
                                </div>
                                <div class="input--radio">
                                    <input type="radio" id="weekly" name="radio-group">
                                    <label for="weekly">
                                        <p>Rent Weekly</p>
                                        <p>$300</p>
                                    </label>
                                </div>
                                <div class="input--radio">
                                    <input type="radio" id="monthly" name="radio-group">
                                    <label for="monthly">
                                        <p>Rent Monthly</p>
                                        <p>$2000</p>
                                    </label>
                                </div>
                            </div>
                            <div class="viewed--area">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <g clip-path="url(#clip0_3950_1068)">
                                        <path
                                            d="M12.3161 4.5C7.26973 4.5 3.16406 8.60572 3.16406 13.652C3.16406 18.6987 7.26978 22.8043 12.3161 22.8043C17.3627 22.8043 21.4681 18.6986 21.4681 13.652C21.4681 8.60572 17.3624 4.5 12.3161 4.5ZM12.3161 21.1457C8.1844 21.1457 4.82301 17.784 4.82301 13.6524C4.82301 9.52067 8.18436 6.15927 12.3161 6.15927C16.4478 6.15927 19.8092 9.52067 19.8092 13.6524C19.8092 17.7843 16.4478 21.1457 12.3161 21.1457Z"
                                            fill="#5A5C5F" />
                                        <path
                                            d="M15.0438 12.9857H12.8318V9.77833C12.8318 9.32018 12.4605 8.94883 12.0023 8.94883C11.5442 8.94883 11.1728 9.32018 11.1728 9.77833V13.8152C11.1728 14.2733 11.5442 14.6447 12.0023 14.6447H15.0438C15.502 14.6447 15.8733 14.2733 15.8733 13.8152C15.8733 13.357 15.5019 12.9857 15.0438 12.9857ZM7.80151 19.1989C7.46087 18.8922 6.93634 18.9201 6.63002 19.2605L4.14153 22.0255C3.83487 22.3658 3.86281 22.8903 4.20317 23.1967C4.35517 23.3342 4.55289 23.4102 4.75784 23.4099C4.98485 23.4099 5.21102 23.3173 5.37471 23.1351L7.8632 20.3701C8.16981 20.0297 8.14187 19.5052 7.80151 19.1989ZM20.8588 22.0257L18.3703 19.2608C18.0645 18.9201 17.5397 18.8925 17.199 19.1991C16.8584 19.5055 16.831 20.03 17.1374 20.3704L19.6259 23.1354C19.7893 23.3173 20.0154 23.4099 20.2425 23.4099C20.4399 23.4099 20.6384 23.3397 20.7971 23.197C21.1378 22.8906 21.1651 22.3661 20.8588 22.0257ZM7.6608 2.799C6.01258 1.1851 3.35576 1.18758 1.73854 2.80509C0.933883 3.60942 0.494244 4.67366 0.500057 5.80175C0.506151 6.91629 0.947993 7.95982 1.74458 8.7401C1.89951 8.89205 2.10794 8.97704 2.32494 8.97677C2.53728 8.97677 2.74963 8.89549 2.91139 8.73401L7.66712 3.97827C7.7446 3.9007 7.80594 3.80854 7.84761 3.70713C7.88928 3.60572 7.91045 3.49706 7.90989 3.38742C7.90936 3.27774 7.88707 3.16925 7.84431 3.06824C7.80155 2.96724 7.73918 2.87572 7.6608 2.799ZM2.41592 6.88311C2.24975 6.54828 2.16097 6.17778 2.15905 5.79289C2.15544 5.11161 2.42253 4.4668 2.91139 3.97795C3.39912 3.49049 4.04393 3.24689 4.69231 3.24689C5.07628 3.2468 5.45547 3.33208 5.80244 3.49654L2.41592 6.88311ZM23.2615 2.80481C21.644 1.18758 18.9872 1.18482 17.339 2.79872C17.2607 2.87548 17.1983 2.96699 17.1556 3.06798C17.1128 3.16896 17.0905 3.27742 17.0899 3.38709C17.0893 3.49675 17.1105 3.60543 17.1522 3.70684C17.194 3.80826 17.2554 3.9004 17.3329 3.97795L22.0886 8.73368C22.1655 8.81086 22.2569 8.87207 22.3576 8.91379C22.4582 8.9555 22.5661 8.97689 22.6751 8.97672C22.8922 8.9771 23.1007 8.89186 23.2554 8.73949C24.0523 7.95949 24.4942 6.91601 24.5 5.80142C24.5058 4.67366 24.0659 3.60942 23.2615 2.80481ZM22.5841 6.88311L19.1976 3.49659C20.1482 3.04532 21.3159 3.20545 22.0887 3.97823C22.5775 4.46709 22.8446 5.11157 22.841 5.79317C22.839 6.17778 22.7503 6.54856 22.5841 6.88311Z"
                                            fill="#5A5C5F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3950_1068">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0.5 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p>This car's been viewed 544 times in the past week</p>
                            </div>
                            <button type="submit" class="button w-100 mt_35">Book Car</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- car details area end  -->
    <!-- reviews area start  -->
    <section class="reviews--area">
        <div class="container">
            <div class="row">
                <!-- review--box--wrapper  -->
                <div class="review--box--wrapper">
                    <h3>Reviews From Previous <span>Clients</span></h3>
                    <!-- review--box  -->
                    <div class="review--box">
                        <!-- header -->
                        <div class="header">
                            <p>Reviews</p>
                            <div class="sortby">
                                <p>Sort By:</p>
                                <select>
                                    <option value="1" selected>All Reviews</option>
                                    <option value="2">car Wash</option>
                                </select>
                            </div>
                        </div>
                        <div class="reviews--wrapper">
                            <div class="reviews">
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                                <!-- single--review  -->
                                <div class="single--review">
                                    <img src="assets/images/testi1.png" alt="">
                                    <!-- message  -->
                                    <div class="message">
                                        <!-- name  -->
                                        <div class="name">
                                            <h4>Anda Cney</h4>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                    <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#FFAB00"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur. Ipsum sollicitudin suscipit bibendum purus blandit sagittis fusce purus at. Mi ac morbi tempus amet non eu nulla diam mollis. Et suspendisse curabitur lorem vitae massa tempus amet. Vitae blandit viverra aliquam nisl.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews area end  -->
    <!-- more cars area start  -->
    <section class="more--cars--area">
        <div class="container">
            <h3 class="text-center mb_45">More Cars <span>To View</span></h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 mt_30">
                    <!-- card  -->
                    <div class="car--card">
                        <div class="img--area">
                            <img src="assets/images/car5.png" alt="">
                        </div>
                        <div class="details">
                            <h4>Hyundai Tucson Accent</h4>
                            <!-- rating  -->
                            <div class="rating">
                                <svg xmlns="http://www.w3.org/2000/svg" width="91" height="18" viewBox="0 0 91 18" fill="none">
                                    <path d="M8.54894 2.92705C8.8483 2.00574 10.1517 2.00574 10.4511 2.92705L11.2961 5.52786C11.43 5.93989 11.8139 6.21885 12.2472 6.21885H14.9818C15.9505 6.21885 16.3533 7.45846 15.5696 8.02786L13.3572 9.63525C13.0067 9.8899 12.8601 10.3413 12.994 10.7533L13.839 13.3541C14.1384 14.2754 13.0839 15.0415 12.3002 14.4721L10.0878 12.8647C9.7373 12.6101 9.2627 12.6101 8.91222 12.8647L6.69983 14.4721C5.91612 15.0415 4.86164 14.2754 5.16099 13.3541L6.00604 10.7533C6.13992 10.3413 5.99326 9.8899 5.64277 9.63525L3.43039 8.02787C2.64668 7.45846 3.04945 6.21885 4.01818 6.21885H6.75283C7.18606 6.21885 7.57001 5.93989 7.70389 5.52786L8.54894 2.92705Z" fill="#FFB546"></path>
                                    <path d="M26.5489 2.92705C26.8483 2.00574 28.1517 2.00574 28.4511 2.92705L29.2961 5.52786C29.43 5.93989 29.8139 6.21885 30.2472 6.21885H32.9818C33.9505 6.21885 34.3533 7.45846 33.5696 8.02786L31.3572 9.63525C31.0067 9.8899 30.8601 10.3413 30.994 10.7533L31.839 13.3541C32.1384 14.2754 31.0839 15.0415 30.3002 14.4721L28.0878 12.8647C27.7373 12.6101 27.2627 12.6101 26.9122 12.8647L24.6998 14.4721C23.9161 15.0415 22.8616 14.2754 23.161 13.3541L24.006 10.7533C24.1399 10.3413 23.9933 9.8899 23.6428 9.63525L21.4304 8.02787C20.6467 7.45846 21.0495 6.21885 22.0182 6.21885H24.7528C25.1861 6.21885 25.57 5.93989 25.7039 5.52786L26.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M44.5489 2.92705C44.8483 2.00574 46.1517 2.00574 46.4511 2.92705L47.2961 5.52786C47.43 5.93989 47.8139 6.21885 48.2472 6.21885H50.9818C51.9505 6.21885 52.3533 7.45846 51.5696 8.02786L49.3572 9.63525C49.0067 9.8899 48.8601 10.3413 48.994 10.7533L49.839 13.3541C50.1384 14.2754 49.0839 15.0415 48.3002 14.4721L46.0878 12.8647C45.7373 12.6101 45.2627 12.6101 44.9122 12.8647L42.6998 14.4721C41.9161 15.0415 40.8616 14.2754 41.161 13.3541L42.006 10.7533C42.1399 10.3413 41.9933 9.8899 41.6428 9.63525L39.4304 8.02787C38.6467 7.45846 39.0495 6.21885 40.0182 6.21885H42.7528C43.1861 6.21885 43.57 5.93989 43.7039 5.52786L44.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M62.5489 2.92705C62.8483 2.00574 64.1517 2.00574 64.4511 2.92705L65.2961 5.52786C65.43 5.93989 65.8139 6.21885 66.2472 6.21885H68.9818C69.9505 6.21885 70.3533 7.45846 69.5696 8.02786L67.3572 9.63525C67.0067 9.8899 66.8601 10.3413 66.994 10.7533L67.839 13.3541C68.1384 14.2754 67.0839 15.0415 66.3002 14.4721L64.0878 12.8647C63.7373 12.6101 63.2627 12.6101 62.9122 12.8647L60.6998 14.4721C59.9161 15.0415 58.8616 14.2754 59.161 13.3541L60.006 10.7533C60.1399 10.3413 59.9933 9.8899 59.6428 9.63525L57.4304 8.02787C56.6467 7.45846 57.0495 6.21885 58.0182 6.21885H60.7528C61.1861 6.21885 61.57 5.93989 61.7039 5.52786L62.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M80.5489 2.92705C80.8483 2.00574 82.1517 2.00574 82.4511 2.92705L83.2961 5.52786C83.43 5.93989 83.8139 6.21885 84.2472 6.21885H86.9818C87.9505 6.21885 88.3533 7.45846 87.5696 8.02786L85.3572 9.63525C85.0067 9.8899 84.8601 10.3413 84.994 10.7533L85.839 13.3541C86.1384 14.2754 85.0839 15.0415 84.3002 14.4721L82.0878 12.8647C81.7373 12.6101 81.2627 12.6101 80.9122 12.8647L78.6998 14.4721C77.9161 15.0415 76.8616 14.2754 77.161 13.3541L78.006 10.7533C78.1399 10.3413 77.9933 9.8899 77.6428 9.63525L75.4304 8.02787C74.6467 7.45846 75.0495 6.21885 76.0182 6.21885H78.7528C79.1861 6.21885 79.57 5.93989 79.7039 5.52786L80.5489 2.92705Z" fill="#FFB546"></path>
                                  </svg>
                                  (2k reviews)
                            </div>
                            <ul class="feature">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M51.79 72H22.21V54.87h29.58zm-27.58-2h25.58V56.87H24.21z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M51.51 72h-.76l.08-2c9.21.37 10.54-7.25 10.59-7.57v-.11c1.88-7-2.88-8.42-3.08-8.47-3.12-1-6.82 2.69-6.85 2.73l-1.44-1.4c.19-.19 4.56-4.62 8.85-3.25a7 7 0 0 1 3.91 3.13c1.19 2 1.38 4.63.56 7.74-.14.84-1.99 9.2-11.86 9.2zM22.49 72c-9.87 0-11.72-8.36-11.88-9.21-.82-3.11-.63-5.71.56-7.74a7 7 0 0 1 4-3.15c4.24-1.36 8.6 3.08 8.79 3.27l-1.44 1.4s-3.69-3.74-6.8-2.75c-.25.07-5 1.45-3.13 8.49v.11c.05.32 1.37 7.94 10.59 7.57l.08 2z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M57.35 53c-.13-.5-3.15-12.36-2.34-22.66v-.12a7.66 7.66 0 0 0-1.31-5.73c-1.32-1.57-3.58-2.39-6.7-2.39H27c-3.14 0-5.4.82-6.73 2.43A7.66 7.66 0 0 0 19 30.26v.12c.81 10.3-2.21 22.16-2.34 22.66l-1.94-.5c0-.12 3.05-12 2.29-22a9.59 9.59 0 0 1 1.73-7.31c1.73-2.1 4.52-3.17 8.29-3.17H47c3.77 0 6.56 1.07 8.29 3.17A9.59 9.59 0 0 1 57 30.58c-.76 10 2.25 21.84 2.29 22z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M48.07 56.87H25.93V21.1h2v33.77h18.14V21.1h2z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M26.93 34.92h20.14v2H26.93zM42.67 22.1H31.33v-6.26h11.34zm-9.34-2h7.34v-2.26h-7.34z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M44.66 17.84H29.34a3.61 3.61 0 0 1-3.59-4l.86-8.61A3.6 3.6 0 0 1 30.21 2h13.58a3.6 3.6 0 0 1 3.6 3.26l.86 8.6a3.61 3.61 0 0 1-3.59 4zM30.21 4a1.61 1.61 0 0 0-1.61 1.45l-.86 8.61a1.6 1.6 0 0 0 .4 1.25 1.61 1.61 0 0 0 1.2.53h15.32a1.61 1.61 0 0 0 1.2-.53 1.6 1.6 0 0 0 .4-1.25l-.86-8.6A1.61 1.61 0 0 0 43.79 4z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                                    6 seat
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                                    2 person
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                        <path d="M4.42728 0.320436C3.69408 0.518676 3.04392 1.12732 2.75808 1.88332L2.652 2.16004L2.63808 11.5656L2.62416 20.971L2.4444 21.054C2.2092 21.1647 1.92336 21.4551 1.78968 21.7227C1.69296 21.9209 1.6836 22.0131 1.66992 22.7232C1.656 23.4701 1.6608 23.5162 1.75296 23.6362L1.84968 23.7608H16.1702L16.2809 23.641C16.387 23.5258 16.3915 23.5028 16.3915 22.7789C16.3915 22.069 16.387 22.0181 16.2718 21.7738C16.1287 21.4695 15.8568 21.1791 15.5849 21.0406L15.4006 20.9484V15.0468C15.4006 9.6526 15.4051 9.14548 15.4742 9.14548C15.5158 9.14548 15.6725 9.21004 15.8246 9.29308C16.4102 9.60652 16.8113 10.2797 17.0834 11.4276C17.3278 12.4419 17.4338 14.1248 17.3417 15.554C17.2034 17.7485 17.1895 18.1728 17.245 18.7767C17.3371 19.9016 17.5908 20.5702 18.1164 21.0867C18.6096 21.5753 19.1767 21.7966 20.0573 21.8566C21.4634 21.9442 22.3718 21.271 22.7314 19.8694C23.0081 18.7767 22.962 17.4996 22.5377 14.701L22.3486 13.4561L22.3301 11.6441L22.3116 9.82756L22.5835 9.54172C23.1185 8.98372 23.3304 8.49964 23.3304 7.8358C23.3258 7.00588 23.1922 6.58636 22.6711 5.83012C22.3898 5.41972 21.6014 4.5898 21.1313 4.20268C20.117 3.37276 18.8722 2.73196 17.4982 2.33548C16.8619 2.15572 16.7098 2.16028 16.5346 2.37244C16.2718 2.68132 16.4424 3.08716 16.8804 3.193C17.4614 3.3406 18.2035 3.6034 18.7154 3.84772C19.2595 4.10596 20.1031 4.60396 20.1031 4.66372C20.1031 4.67764 20.0201 4.81132 19.9188 4.95868C19.8173 5.10172 19.6651 5.36452 19.5869 5.53492C19.4578 5.80228 19.4347 5.91292 19.4208 6.29116C19.3978 6.83524 19.4762 7.16716 19.7573 7.73884C19.9925 8.20924 20.3705 8.7394 20.9237 9.36172L21.3017 9.7858V11.238C21.3017 12.87 21.3202 13.0731 21.6014 15.0694C21.8734 16.9781 21.9149 17.5037 21.8873 18.5134C21.8642 19.3709 21.8182 19.6431 21.629 20.0856C21.3662 20.6988 20.8085 20.9571 19.9555 20.8601C19.1856 20.7725 18.7891 20.5236 18.5124 19.9656C18.2035 19.334 18.1435 18.3749 18.282 16.3371C18.4757 13.5063 18.2866 11.4454 17.7149 10.122C17.263 9.07996 16.6406 8.47156 15.7646 8.21788L15.4003 8.1118V5.22556C15.4003 2.78188 15.3912 2.2978 15.3312 2.0674C15.1145 1.23292 14.4137 0.532116 13.5792 0.315396C13.1779 0.214356 4.8144 0.214356 4.42728 0.320436ZM13.5653 1.3486C13.8696 1.4962 14.1415 1.77748 14.2846 2.08156L14.4091 2.34436L14.423 11.6254L14.4322 20.9019L9.02856 20.8928L3.6204 20.8788V11.6345C3.6204 2.63476 3.62496 2.38588 3.708 2.1598C3.86472 1.75876 4.31664 1.35748 4.72704 1.2562C4.80552 1.23772 6.774 1.2286 9.10704 1.2286L13.3488 1.23796L13.5653 1.3486ZM21.2832 5.6962C21.6706 6.1018 22.0025 6.53524 22.1916 6.895C22.3529 7.19932 22.4083 7.88164 22.2977 8.21356C22.2101 8.46724 21.9288 8.86828 21.8412 8.86372C21.8088 8.86372 21.6521 8.707 21.4862 8.51788C20.3566 7.20844 20.1122 6.31876 20.6794 5.54404C20.7715 5.41948 20.8637 5.3182 20.8822 5.3182C20.9052 5.3182 21.085 5.48884 21.2832 5.6962ZM15.2434 22.0268C15.391 22.1744 15.4001 22.202 15.4001 22.5108V22.8382H2.62896V22.5108C2.62896 22.202 2.63808 22.1741 2.78568 22.0268L2.9424 21.87H15.0864L15.2434 22.0268Z" fill="black"></path>
                                        <path d="M4.90434 2.22944C4.84914 2.24792 4.7613 2.32616 4.7061 2.39552C4.60938 2.52008 4.60938 2.52008 4.60938 5.64584V8.7764L4.74306 8.924L4.87674 9.07616H13.139L13.2866 8.924L13.4387 8.7764V5.66888C13.4387 3.10544 13.4296 2.54744 13.3742 2.44616C13.2266 2.17424 13.3833 2.18336 9.0033 2.18792C6.80394 2.18792 4.95522 2.2064 4.90434 2.22944ZM12.4473 5.64128V8.08472H5.57754V3.19736H12.4473V5.64128Z" fill="black"></path>
                                      </svg>
                                      Petrol
                                </li>
                            </ul>
                            <div class="pricing">
                                <p>$20<span>/Per day</span></p>
                                <a href="view-details.html" class="button">Rent Car</a>
                            </div>
                            <p class="available">Available Now</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt_30">
                    <!-- card  -->
                    <div class="car--card">
                        <div class="img--area">
                            <img src="assets/images/car4.png" alt="">
                        </div>
                        <div class="details">
                            <h4>Hyundai Tucson Accent</h4>
                            <!-- rating  -->
                            <div class="rating">
                                <svg xmlns="http://www.w3.org/2000/svg" width="91" height="18" viewBox="0 0 91 18" fill="none">
                                    <path d="M8.54894 2.92705C8.8483 2.00574 10.1517 2.00574 10.4511 2.92705L11.2961 5.52786C11.43 5.93989 11.8139 6.21885 12.2472 6.21885H14.9818C15.9505 6.21885 16.3533 7.45846 15.5696 8.02786L13.3572 9.63525C13.0067 9.8899 12.8601 10.3413 12.994 10.7533L13.839 13.3541C14.1384 14.2754 13.0839 15.0415 12.3002 14.4721L10.0878 12.8647C9.7373 12.6101 9.2627 12.6101 8.91222 12.8647L6.69983 14.4721C5.91612 15.0415 4.86164 14.2754 5.16099 13.3541L6.00604 10.7533C6.13992 10.3413 5.99326 9.8899 5.64277 9.63525L3.43039 8.02787C2.64668 7.45846 3.04945 6.21885 4.01818 6.21885H6.75283C7.18606 6.21885 7.57001 5.93989 7.70389 5.52786L8.54894 2.92705Z" fill="#FFB546"></path>
                                    <path d="M26.5489 2.92705C26.8483 2.00574 28.1517 2.00574 28.4511 2.92705L29.2961 5.52786C29.43 5.93989 29.8139 6.21885 30.2472 6.21885H32.9818C33.9505 6.21885 34.3533 7.45846 33.5696 8.02786L31.3572 9.63525C31.0067 9.8899 30.8601 10.3413 30.994 10.7533L31.839 13.3541C32.1384 14.2754 31.0839 15.0415 30.3002 14.4721L28.0878 12.8647C27.7373 12.6101 27.2627 12.6101 26.9122 12.8647L24.6998 14.4721C23.9161 15.0415 22.8616 14.2754 23.161 13.3541L24.006 10.7533C24.1399 10.3413 23.9933 9.8899 23.6428 9.63525L21.4304 8.02787C20.6467 7.45846 21.0495 6.21885 22.0182 6.21885H24.7528C25.1861 6.21885 25.57 5.93989 25.7039 5.52786L26.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M44.5489 2.92705C44.8483 2.00574 46.1517 2.00574 46.4511 2.92705L47.2961 5.52786C47.43 5.93989 47.8139 6.21885 48.2472 6.21885H50.9818C51.9505 6.21885 52.3533 7.45846 51.5696 8.02786L49.3572 9.63525C49.0067 9.8899 48.8601 10.3413 48.994 10.7533L49.839 13.3541C50.1384 14.2754 49.0839 15.0415 48.3002 14.4721L46.0878 12.8647C45.7373 12.6101 45.2627 12.6101 44.9122 12.8647L42.6998 14.4721C41.9161 15.0415 40.8616 14.2754 41.161 13.3541L42.006 10.7533C42.1399 10.3413 41.9933 9.8899 41.6428 9.63525L39.4304 8.02787C38.6467 7.45846 39.0495 6.21885 40.0182 6.21885H42.7528C43.1861 6.21885 43.57 5.93989 43.7039 5.52786L44.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M62.5489 2.92705C62.8483 2.00574 64.1517 2.00574 64.4511 2.92705L65.2961 5.52786C65.43 5.93989 65.8139 6.21885 66.2472 6.21885H68.9818C69.9505 6.21885 70.3533 7.45846 69.5696 8.02786L67.3572 9.63525C67.0067 9.8899 66.8601 10.3413 66.994 10.7533L67.839 13.3541C68.1384 14.2754 67.0839 15.0415 66.3002 14.4721L64.0878 12.8647C63.7373 12.6101 63.2627 12.6101 62.9122 12.8647L60.6998 14.4721C59.9161 15.0415 58.8616 14.2754 59.161 13.3541L60.006 10.7533C60.1399 10.3413 59.9933 9.8899 59.6428 9.63525L57.4304 8.02787C56.6467 7.45846 57.0495 6.21885 58.0182 6.21885H60.7528C61.1861 6.21885 61.57 5.93989 61.7039 5.52786L62.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M80.5489 2.92705C80.8483 2.00574 82.1517 2.00574 82.4511 2.92705L83.2961 5.52786C83.43 5.93989 83.8139 6.21885 84.2472 6.21885H86.9818C87.9505 6.21885 88.3533 7.45846 87.5696 8.02786L85.3572 9.63525C85.0067 9.8899 84.8601 10.3413 84.994 10.7533L85.839 13.3541C86.1384 14.2754 85.0839 15.0415 84.3002 14.4721L82.0878 12.8647C81.7373 12.6101 81.2627 12.6101 80.9122 12.8647L78.6998 14.4721C77.9161 15.0415 76.8616 14.2754 77.161 13.3541L78.006 10.7533C78.1399 10.3413 77.9933 9.8899 77.6428 9.63525L75.4304 8.02787C74.6467 7.45846 75.0495 6.21885 76.0182 6.21885H78.7528C79.1861 6.21885 79.57 5.93989 79.7039 5.52786L80.5489 2.92705Z" fill="#FFB546"></path>
                                  </svg>
                                  (2k reviews)
                            </div>
                            <ul class="feature">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M51.79 72H22.21V54.87h29.58zm-27.58-2h25.58V56.87H24.21z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M51.51 72h-.76l.08-2c9.21.37 10.54-7.25 10.59-7.57v-.11c1.88-7-2.88-8.42-3.08-8.47-3.12-1-6.82 2.69-6.85 2.73l-1.44-1.4c.19-.19 4.56-4.62 8.85-3.25a7 7 0 0 1 3.91 3.13c1.19 2 1.38 4.63.56 7.74-.14.84-1.99 9.2-11.86 9.2zM22.49 72c-9.87 0-11.72-8.36-11.88-9.21-.82-3.11-.63-5.71.56-7.74a7 7 0 0 1 4-3.15c4.24-1.36 8.6 3.08 8.79 3.27l-1.44 1.4s-3.69-3.74-6.8-2.75c-.25.07-5 1.45-3.13 8.49v.11c.05.32 1.37 7.94 10.59 7.57l.08 2z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M57.35 53c-.13-.5-3.15-12.36-2.34-22.66v-.12a7.66 7.66 0 0 0-1.31-5.73c-1.32-1.57-3.58-2.39-6.7-2.39H27c-3.14 0-5.4.82-6.73 2.43A7.66 7.66 0 0 0 19 30.26v.12c.81 10.3-2.21 22.16-2.34 22.66l-1.94-.5c0-.12 3.05-12 2.29-22a9.59 9.59 0 0 1 1.73-7.31c1.73-2.1 4.52-3.17 8.29-3.17H47c3.77 0 6.56 1.07 8.29 3.17A9.59 9.59 0 0 1 57 30.58c-.76 10 2.25 21.84 2.29 22z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M48.07 56.87H25.93V21.1h2v33.77h18.14V21.1h2z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M26.93 34.92h20.14v2H26.93zM42.67 22.1H31.33v-6.26h11.34zm-9.34-2h7.34v-2.26h-7.34z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M44.66 17.84H29.34a3.61 3.61 0 0 1-3.59-4l.86-8.61A3.6 3.6 0 0 1 30.21 2h13.58a3.6 3.6 0 0 1 3.6 3.26l.86 8.6a3.61 3.61 0 0 1-3.59 4zM30.21 4a1.61 1.61 0 0 0-1.61 1.45l-.86 8.61a1.6 1.6 0 0 0 .4 1.25 1.61 1.61 0 0 0 1.2.53h15.32a1.61 1.61 0 0 0 1.2-.53 1.6 1.6 0 0 0 .4-1.25l-.86-8.6A1.61 1.61 0 0 0 43.79 4z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                                    6 seat
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                                    2 person
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                        <path d="M4.42728 0.320436C3.69408 0.518676 3.04392 1.12732 2.75808 1.88332L2.652 2.16004L2.63808 11.5656L2.62416 20.971L2.4444 21.054C2.2092 21.1647 1.92336 21.4551 1.78968 21.7227C1.69296 21.9209 1.6836 22.0131 1.66992 22.7232C1.656 23.4701 1.6608 23.5162 1.75296 23.6362L1.84968 23.7608H16.1702L16.2809 23.641C16.387 23.5258 16.3915 23.5028 16.3915 22.7789C16.3915 22.069 16.387 22.0181 16.2718 21.7738C16.1287 21.4695 15.8568 21.1791 15.5849 21.0406L15.4006 20.9484V15.0468C15.4006 9.6526 15.4051 9.14548 15.4742 9.14548C15.5158 9.14548 15.6725 9.21004 15.8246 9.29308C16.4102 9.60652 16.8113 10.2797 17.0834 11.4276C17.3278 12.4419 17.4338 14.1248 17.3417 15.554C17.2034 17.7485 17.1895 18.1728 17.245 18.7767C17.3371 19.9016 17.5908 20.5702 18.1164 21.0867C18.6096 21.5753 19.1767 21.7966 20.0573 21.8566C21.4634 21.9442 22.3718 21.271 22.7314 19.8694C23.0081 18.7767 22.962 17.4996 22.5377 14.701L22.3486 13.4561L22.3301 11.6441L22.3116 9.82756L22.5835 9.54172C23.1185 8.98372 23.3304 8.49964 23.3304 7.8358C23.3258 7.00588 23.1922 6.58636 22.6711 5.83012C22.3898 5.41972 21.6014 4.5898 21.1313 4.20268C20.117 3.37276 18.8722 2.73196 17.4982 2.33548C16.8619 2.15572 16.7098 2.16028 16.5346 2.37244C16.2718 2.68132 16.4424 3.08716 16.8804 3.193C17.4614 3.3406 18.2035 3.6034 18.7154 3.84772C19.2595 4.10596 20.1031 4.60396 20.1031 4.66372C20.1031 4.67764 20.0201 4.81132 19.9188 4.95868C19.8173 5.10172 19.6651 5.36452 19.5869 5.53492C19.4578 5.80228 19.4347 5.91292 19.4208 6.29116C19.3978 6.83524 19.4762 7.16716 19.7573 7.73884C19.9925 8.20924 20.3705 8.7394 20.9237 9.36172L21.3017 9.7858V11.238C21.3017 12.87 21.3202 13.0731 21.6014 15.0694C21.8734 16.9781 21.9149 17.5037 21.8873 18.5134C21.8642 19.3709 21.8182 19.6431 21.629 20.0856C21.3662 20.6988 20.8085 20.9571 19.9555 20.8601C19.1856 20.7725 18.7891 20.5236 18.5124 19.9656C18.2035 19.334 18.1435 18.3749 18.282 16.3371C18.4757 13.5063 18.2866 11.4454 17.7149 10.122C17.263 9.07996 16.6406 8.47156 15.7646 8.21788L15.4003 8.1118V5.22556C15.4003 2.78188 15.3912 2.2978 15.3312 2.0674C15.1145 1.23292 14.4137 0.532116 13.5792 0.315396C13.1779 0.214356 4.8144 0.214356 4.42728 0.320436ZM13.5653 1.3486C13.8696 1.4962 14.1415 1.77748 14.2846 2.08156L14.4091 2.34436L14.423 11.6254L14.4322 20.9019L9.02856 20.8928L3.6204 20.8788V11.6345C3.6204 2.63476 3.62496 2.38588 3.708 2.1598C3.86472 1.75876 4.31664 1.35748 4.72704 1.2562C4.80552 1.23772 6.774 1.2286 9.10704 1.2286L13.3488 1.23796L13.5653 1.3486ZM21.2832 5.6962C21.6706 6.1018 22.0025 6.53524 22.1916 6.895C22.3529 7.19932 22.4083 7.88164 22.2977 8.21356C22.2101 8.46724 21.9288 8.86828 21.8412 8.86372C21.8088 8.86372 21.6521 8.707 21.4862 8.51788C20.3566 7.20844 20.1122 6.31876 20.6794 5.54404C20.7715 5.41948 20.8637 5.3182 20.8822 5.3182C20.9052 5.3182 21.085 5.48884 21.2832 5.6962ZM15.2434 22.0268C15.391 22.1744 15.4001 22.202 15.4001 22.5108V22.8382H2.62896V22.5108C2.62896 22.202 2.63808 22.1741 2.78568 22.0268L2.9424 21.87H15.0864L15.2434 22.0268Z" fill="black"></path>
                                        <path d="M4.90434 2.22944C4.84914 2.24792 4.7613 2.32616 4.7061 2.39552C4.60938 2.52008 4.60938 2.52008 4.60938 5.64584V8.7764L4.74306 8.924L4.87674 9.07616H13.139L13.2866 8.924L13.4387 8.7764V5.66888C13.4387 3.10544 13.4296 2.54744 13.3742 2.44616C13.2266 2.17424 13.3833 2.18336 9.0033 2.18792C6.80394 2.18792 4.95522 2.2064 4.90434 2.22944ZM12.4473 5.64128V8.08472H5.57754V3.19736H12.4473V5.64128Z" fill="black"></path>
                                      </svg>
                                      Petrol
                                </li>
                            </ul>
                            <div class="pricing">
                                <p>$20<span>/Per day</span></p>
                                <a href="view-details.html" class="button">Rent Car</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt_30">
                    <!-- card  -->
                    <div class="car--card">
                        <div class="img--area">
                            <img src="assets/images/car8.png" alt="">
                        </div>
                        <div class="details">
                            <h4>Hyundai Tucson Accent</h4>
                            <!-- rating  -->
                            <div class="rating">
                                <svg xmlns="http://www.w3.org/2000/svg" width="91" height="18" viewBox="0 0 91 18" fill="none">
                                    <path d="M8.54894 2.92705C8.8483 2.00574 10.1517 2.00574 10.4511 2.92705L11.2961 5.52786C11.43 5.93989 11.8139 6.21885 12.2472 6.21885H14.9818C15.9505 6.21885 16.3533 7.45846 15.5696 8.02786L13.3572 9.63525C13.0067 9.8899 12.8601 10.3413 12.994 10.7533L13.839 13.3541C14.1384 14.2754 13.0839 15.0415 12.3002 14.4721L10.0878 12.8647C9.7373 12.6101 9.2627 12.6101 8.91222 12.8647L6.69983 14.4721C5.91612 15.0415 4.86164 14.2754 5.16099 13.3541L6.00604 10.7533C6.13992 10.3413 5.99326 9.8899 5.64277 9.63525L3.43039 8.02787C2.64668 7.45846 3.04945 6.21885 4.01818 6.21885H6.75283C7.18606 6.21885 7.57001 5.93989 7.70389 5.52786L8.54894 2.92705Z" fill="#FFB546"></path>
                                    <path d="M26.5489 2.92705C26.8483 2.00574 28.1517 2.00574 28.4511 2.92705L29.2961 5.52786C29.43 5.93989 29.8139 6.21885 30.2472 6.21885H32.9818C33.9505 6.21885 34.3533 7.45846 33.5696 8.02786L31.3572 9.63525C31.0067 9.8899 30.8601 10.3413 30.994 10.7533L31.839 13.3541C32.1384 14.2754 31.0839 15.0415 30.3002 14.4721L28.0878 12.8647C27.7373 12.6101 27.2627 12.6101 26.9122 12.8647L24.6998 14.4721C23.9161 15.0415 22.8616 14.2754 23.161 13.3541L24.006 10.7533C24.1399 10.3413 23.9933 9.8899 23.6428 9.63525L21.4304 8.02787C20.6467 7.45846 21.0495 6.21885 22.0182 6.21885H24.7528C25.1861 6.21885 25.57 5.93989 25.7039 5.52786L26.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M44.5489 2.92705C44.8483 2.00574 46.1517 2.00574 46.4511 2.92705L47.2961 5.52786C47.43 5.93989 47.8139 6.21885 48.2472 6.21885H50.9818C51.9505 6.21885 52.3533 7.45846 51.5696 8.02786L49.3572 9.63525C49.0067 9.8899 48.8601 10.3413 48.994 10.7533L49.839 13.3541C50.1384 14.2754 49.0839 15.0415 48.3002 14.4721L46.0878 12.8647C45.7373 12.6101 45.2627 12.6101 44.9122 12.8647L42.6998 14.4721C41.9161 15.0415 40.8616 14.2754 41.161 13.3541L42.006 10.7533C42.1399 10.3413 41.9933 9.8899 41.6428 9.63525L39.4304 8.02787C38.6467 7.45846 39.0495 6.21885 40.0182 6.21885H42.7528C43.1861 6.21885 43.57 5.93989 43.7039 5.52786L44.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M62.5489 2.92705C62.8483 2.00574 64.1517 2.00574 64.4511 2.92705L65.2961 5.52786C65.43 5.93989 65.8139 6.21885 66.2472 6.21885H68.9818C69.9505 6.21885 70.3533 7.45846 69.5696 8.02786L67.3572 9.63525C67.0067 9.8899 66.8601 10.3413 66.994 10.7533L67.839 13.3541C68.1384 14.2754 67.0839 15.0415 66.3002 14.4721L64.0878 12.8647C63.7373 12.6101 63.2627 12.6101 62.9122 12.8647L60.6998 14.4721C59.9161 15.0415 58.8616 14.2754 59.161 13.3541L60.006 10.7533C60.1399 10.3413 59.9933 9.8899 59.6428 9.63525L57.4304 8.02787C56.6467 7.45846 57.0495 6.21885 58.0182 6.21885H60.7528C61.1861 6.21885 61.57 5.93989 61.7039 5.52786L62.5489 2.92705Z" fill="#FFB546"></path>
                                    <path d="M80.5489 2.92705C80.8483 2.00574 82.1517 2.00574 82.4511 2.92705L83.2961 5.52786C83.43 5.93989 83.8139 6.21885 84.2472 6.21885H86.9818C87.9505 6.21885 88.3533 7.45846 87.5696 8.02786L85.3572 9.63525C85.0067 9.8899 84.8601 10.3413 84.994 10.7533L85.839 13.3541C86.1384 14.2754 85.0839 15.0415 84.3002 14.4721L82.0878 12.8647C81.7373 12.6101 81.2627 12.6101 80.9122 12.8647L78.6998 14.4721C77.9161 15.0415 76.8616 14.2754 77.161 13.3541L78.006 10.7533C78.1399 10.3413 77.9933 9.8899 77.6428 9.63525L75.4304 8.02787C74.6467 7.45846 75.0495 6.21885 76.0182 6.21885H78.7528C79.1861 6.21885 79.57 5.93989 79.7039 5.52786L80.5489 2.92705Z" fill="#FFB546"></path>
                                  </svg>
                                  (2k reviews)
                            </div>
                            <ul class="feature">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M51.79 72H22.21V54.87h29.58zm-27.58-2h25.58V56.87H24.21z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M51.51 72h-.76l.08-2c9.21.37 10.54-7.25 10.59-7.57v-.11c1.88-7-2.88-8.42-3.08-8.47-3.12-1-6.82 2.69-6.85 2.73l-1.44-1.4c.19-.19 4.56-4.62 8.85-3.25a7 7 0 0 1 3.91 3.13c1.19 2 1.38 4.63.56 7.74-.14.84-1.99 9.2-11.86 9.2zM22.49 72c-9.87 0-11.72-8.36-11.88-9.21-.82-3.11-.63-5.71.56-7.74a7 7 0 0 1 4-3.15c4.24-1.36 8.6 3.08 8.79 3.27l-1.44 1.4s-3.69-3.74-6.8-2.75c-.25.07-5 1.45-3.13 8.49v.11c.05.32 1.37 7.94 10.59 7.57l.08 2z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M57.35 53c-.13-.5-3.15-12.36-2.34-22.66v-.12a7.66 7.66 0 0 0-1.31-5.73c-1.32-1.57-3.58-2.39-6.7-2.39H27c-3.14 0-5.4.82-6.73 2.43A7.66 7.66 0 0 0 19 30.26v.12c.81 10.3-2.21 22.16-2.34 22.66l-1.94-.5c0-.12 3.05-12 2.29-22a9.59 9.59 0 0 1 1.73-7.31c1.73-2.1 4.52-3.17 8.29-3.17H47c3.77 0 6.56 1.07 8.29 3.17A9.59 9.59 0 0 1 57 30.58c-.76 10 2.25 21.84 2.29 22z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M48.07 56.87H25.93V21.1h2v33.77h18.14V21.1h2z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M26.93 34.92h20.14v2H26.93zM42.67 22.1H31.33v-6.26h11.34zm-9.34-2h7.34v-2.26h-7.34z" fill="#000000" opacity="1" data-original="#000000" class=""></path><path d="M44.66 17.84H29.34a3.61 3.61 0 0 1-3.59-4l.86-8.61A3.6 3.6 0 0 1 30.21 2h13.58a3.6 3.6 0 0 1 3.6 3.26l.86 8.6a3.61 3.61 0 0 1-3.59 4zM30.21 4a1.61 1.61 0 0 0-1.61 1.45l-.86 8.61a1.6 1.6 0 0 0 .4 1.25 1.61 1.61 0 0 0 1.2.53h15.32a1.61 1.61 0 0 0 1.2-.53 1.6 1.6 0 0 0 .4-1.25l-.86-8.6A1.61 1.61 0 0 0 43.79 4z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                                    6 seat
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                                    2 person
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                        <path d="M4.42728 0.320436C3.69408 0.518676 3.04392 1.12732 2.75808 1.88332L2.652 2.16004L2.63808 11.5656L2.62416 20.971L2.4444 21.054C2.2092 21.1647 1.92336 21.4551 1.78968 21.7227C1.69296 21.9209 1.6836 22.0131 1.66992 22.7232C1.656 23.4701 1.6608 23.5162 1.75296 23.6362L1.84968 23.7608H16.1702L16.2809 23.641C16.387 23.5258 16.3915 23.5028 16.3915 22.7789C16.3915 22.069 16.387 22.0181 16.2718 21.7738C16.1287 21.4695 15.8568 21.1791 15.5849 21.0406L15.4006 20.9484V15.0468C15.4006 9.6526 15.4051 9.14548 15.4742 9.14548C15.5158 9.14548 15.6725 9.21004 15.8246 9.29308C16.4102 9.60652 16.8113 10.2797 17.0834 11.4276C17.3278 12.4419 17.4338 14.1248 17.3417 15.554C17.2034 17.7485 17.1895 18.1728 17.245 18.7767C17.3371 19.9016 17.5908 20.5702 18.1164 21.0867C18.6096 21.5753 19.1767 21.7966 20.0573 21.8566C21.4634 21.9442 22.3718 21.271 22.7314 19.8694C23.0081 18.7767 22.962 17.4996 22.5377 14.701L22.3486 13.4561L22.3301 11.6441L22.3116 9.82756L22.5835 9.54172C23.1185 8.98372 23.3304 8.49964 23.3304 7.8358C23.3258 7.00588 23.1922 6.58636 22.6711 5.83012C22.3898 5.41972 21.6014 4.5898 21.1313 4.20268C20.117 3.37276 18.8722 2.73196 17.4982 2.33548C16.8619 2.15572 16.7098 2.16028 16.5346 2.37244C16.2718 2.68132 16.4424 3.08716 16.8804 3.193C17.4614 3.3406 18.2035 3.6034 18.7154 3.84772C19.2595 4.10596 20.1031 4.60396 20.1031 4.66372C20.1031 4.67764 20.0201 4.81132 19.9188 4.95868C19.8173 5.10172 19.6651 5.36452 19.5869 5.53492C19.4578 5.80228 19.4347 5.91292 19.4208 6.29116C19.3978 6.83524 19.4762 7.16716 19.7573 7.73884C19.9925 8.20924 20.3705 8.7394 20.9237 9.36172L21.3017 9.7858V11.238C21.3017 12.87 21.3202 13.0731 21.6014 15.0694C21.8734 16.9781 21.9149 17.5037 21.8873 18.5134C21.8642 19.3709 21.8182 19.6431 21.629 20.0856C21.3662 20.6988 20.8085 20.9571 19.9555 20.8601C19.1856 20.7725 18.7891 20.5236 18.5124 19.9656C18.2035 19.334 18.1435 18.3749 18.282 16.3371C18.4757 13.5063 18.2866 11.4454 17.7149 10.122C17.263 9.07996 16.6406 8.47156 15.7646 8.21788L15.4003 8.1118V5.22556C15.4003 2.78188 15.3912 2.2978 15.3312 2.0674C15.1145 1.23292 14.4137 0.532116 13.5792 0.315396C13.1779 0.214356 4.8144 0.214356 4.42728 0.320436ZM13.5653 1.3486C13.8696 1.4962 14.1415 1.77748 14.2846 2.08156L14.4091 2.34436L14.423 11.6254L14.4322 20.9019L9.02856 20.8928L3.6204 20.8788V11.6345C3.6204 2.63476 3.62496 2.38588 3.708 2.1598C3.86472 1.75876 4.31664 1.35748 4.72704 1.2562C4.80552 1.23772 6.774 1.2286 9.10704 1.2286L13.3488 1.23796L13.5653 1.3486ZM21.2832 5.6962C21.6706 6.1018 22.0025 6.53524 22.1916 6.895C22.3529 7.19932 22.4083 7.88164 22.2977 8.21356C22.2101 8.46724 21.9288 8.86828 21.8412 8.86372C21.8088 8.86372 21.6521 8.707 21.4862 8.51788C20.3566 7.20844 20.1122 6.31876 20.6794 5.54404C20.7715 5.41948 20.8637 5.3182 20.8822 5.3182C20.9052 5.3182 21.085 5.48884 21.2832 5.6962ZM15.2434 22.0268C15.391 22.1744 15.4001 22.202 15.4001 22.5108V22.8382H2.62896V22.5108C2.62896 22.202 2.63808 22.1741 2.78568 22.0268L2.9424 21.87H15.0864L15.2434 22.0268Z" fill="black"></path>
                                        <path d="M4.90434 2.22944C4.84914 2.24792 4.7613 2.32616 4.7061 2.39552C4.60938 2.52008 4.60938 2.52008 4.60938 5.64584V8.7764L4.74306 8.924L4.87674 9.07616H13.139L13.2866 8.924L13.4387 8.7764V5.66888C13.4387 3.10544 13.4296 2.54744 13.3742 2.44616C13.2266 2.17424 13.3833 2.18336 9.0033 2.18792C6.80394 2.18792 4.95522 2.2064 4.90434 2.22944ZM12.4473 5.64128V8.08472H5.57754V3.19736H12.4473V5.64128Z" fill="black"></path>
                                      </svg>
                                      Petrol
                                </li>
                            </ul>
                            <div class="pricing">
                                <p>$20<span>/Per day</span></p>
                                <a href="view-details.html" class="button">Rent Car</a>
                            </div>
                            <p class="available">Available Now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- more cars area end  -->
</main>
@endsection
