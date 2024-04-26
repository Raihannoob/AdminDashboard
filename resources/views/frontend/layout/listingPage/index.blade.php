@extends('frontend.app')

@section('tittle')
Car listing
@endsection
@section('content')
<main>
    <!-- rent heo area start -->
    <section class="rent--hero--area rent--posi">
        <div class="rent--img">
            <h1>Find The Perfect <span>Car For Renting</span></h1>
            <img src="assets/images/listing.png" alt="">
        </div>
        <div class="container">
            <!-- car search  -->
            <div class="car--search--wrapper">
                <form action="#">
                    <!-- input group  -->
                    <div class="input--group">
                        <label for="to">Where To</label>
                        <input type="text" id="to" placeholder="Gulsan,Avenu">
                    </div>
                    <!-- input group  -->
                    <div class="input--group">
                        <label for="from">Pick Up From</label>
                        <input type="text" id="from" placeholder="Gulsan,Avenu">
                    </div>
                    <!-- input group  -->
                    <div class="input--group">
                        <h4>Pick Up Date & Time</h4>
                        <div class="date--time">
                            <div class="date">
                                <input type="text" id="date1" class="pick--date" placeholder="1/3/2024" readonly>
                            </div>
                            <div class="time">
                                <input type="text" id="time1" class="timepick" placeholder="10:00 AM" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- input group  -->
                    <div class="input--group last">
                        <h4>Drop Off Date & Time</h4>
                        <div class="date--time">
                            <div class="date">
                                <input type="text" id="date2" class="pick--date" placeholder="1/3/2024" readonly>
                            </div>
                            <div class="time">
                                <input type="text" id="time2" class="timepick" placeholder="10:00 AM" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="submit--btn">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                fill="none">
                                <path
                                    d="M10.9406 2.43151C8.55612 2.43551 6.27046 3.38451 4.58438 5.07058C2.89831 6.75666 1.94931 9.04232 1.94531 11.4268C1.94731 13.8133 2.89518 16.1016 4.58125 17.7906C6.26733 19.4795 8.55412 20.4312 10.9406 20.4372C13.0571 20.4372 15.0074 19.6926 16.5494 18.4605L20.2949 22.206C20.4847 22.3824 20.7354 22.4785 20.9945 22.4739C21.2535 22.4694 21.5007 22.3646 21.6842 22.1817C21.8677 21.9987 21.9731 21.7518 21.9783 21.4927C21.9835 21.2337 21.8882 20.9827 21.7122 20.7925L17.9667 17.0432C19.2459 15.4522 19.9433 13.472 19.9434 11.4306C19.9434 6.47183 15.8993 2.43151 10.9406 2.43151ZM10.9406 4.43466C14.8184 4.43466 17.9403 7.55277 17.9403 11.4268C17.9403 15.3008 14.8184 18.4378 10.9406 18.4378C7.06279 18.4378 3.94468 15.3121 3.94468 11.4343C3.94468 7.55655 7.06279 4.43466 10.9406 4.43466Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <img class="rent-img rent-img1" src="assets/images/rent.svg" alt="">
        <img class="rent-img rent-img2" src="assets/images/rent.svg" alt="">
    </section>
    <!-- rent heo area end -->

    <!-- car filter area end -->
    <div class="car--filter--area section--shape">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt_50 pr_10">
                    <!-- Left Filter Box -->
                    <div class="filter--box">
                        <h3>Filter</h3>
                        <div class="form-group available--car">
                            <input type="checkbox" id="economy1">
                            <label for="economy1">
                                <div class="filter--option">
                                    <p>Show Available Cars Only</p>
                                </div>
                            </label>
                        </div>
                        <!-- Filter Accordion -->
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseType" aria-expanded="true">
                                    Car type
                                    </button>
                                </h2>
                                <div id="collapseType" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <input type="checkbox" id="economy1">
                                            <label for="economy1">
                                                <div class="filter--option">
                                                    <p>Economy</p>
                                                    <span>50</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="standard1">
                                            <label for="standard1">
                                                <div class="filter--option">
                                                    <p>Standard</p>
                                                    <span>66</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="full1">
                                            <label for="full1">
                                                <div class="filter--option">
                                                    <p>Full-size</p>
                                                    <span>35</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="compact1">
                                            <label for="compact1">
                                                <div class="filter--option">
                                                    <p>Compact</p>
                                                    <span>99</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="van1">
                                            <label for="van1">
                                                <div class="filter--option">
                                                    <p>Van</p>
                                                    <span>27</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLocations" aria-expanded="false">
                                    Locations
                                    </button>
                                </h2>
                                <div id="collapseLocations" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <input type="checkbox" id="economy2">
                                            <label for="economy2">
                                                <div class="filter--option">
                                                    <p>Economy</p>
                                                    <span>50</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="standard2">
                                            <label for="standard2">
                                                <div class="filter--option">
                                                    <p>Standard</p>
                                                    <span>66</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="full2">
                                            <label for="full2">
                                                <div class="filter--option">
                                                    <p>Full-size</p>
                                                    <span>35</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="compact2">
                                            <label for="compact2">
                                                <div class="filter--option">
                                                    <p>Compact</p>
                                                    <span>99</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="van2">
                                            <label for="van2">
                                                <div class="filter--option">
                                                    <p>Van</p>
                                                    <span>27</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePrice" aria-expanded="false">
                                    Price range
                                    </button>
                                </h2>
                                <div id="collapsePrice" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <input type="checkbox" id="economy2">
                                            <label for="economy2">
                                                <div class="filter--option">
                                                    <p>Economy</p>
                                                    <span>50</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="standard2">
                                            <label for="standard2">
                                                <div class="filter--option">
                                                    <p>Standard</p>
                                                    <span>66</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="full2">
                                            <label for="full2">
                                                <div class="filter--option">
                                                    <p>Full-size</p>
                                                    <span>35</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="compact2">
                                            <label for="compact2">
                                                <div class="filter--option">
                                                    <p>Compact</p>
                                                    <span>99</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="van2">
                                            <label for="van2">
                                                <div class="filter--option">
                                                    <p>Van</p>
                                                    <span>27</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTransmission" aria-expanded="false">
                                    Transmission
                                    </button>
                                </h2>
                                <div id="collapseTransmission" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <input type="checkbox" id="economy3">
                                            <label for="economy3">
                                                <div class="filter--option">
                                                    <p>Economy</p>
                                                    <span>50</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="standard3">
                                            <label for="standard3">
                                                <div class="filter--option">
                                                    <p>Standard</p>
                                                    <span>66</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="full3">
                                            <label for="full3">
                                                <div class="filter--option">
                                                    <p>Full-size</p>
                                                    <span>35</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="compact3">
                                            <label for="compact3">
                                                <div class="filter--option">
                                                    <p>Compact</p>
                                                    <span>99</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="van3">
                                            <label for="van3">
                                                <div class="filter--option">
                                                    <p>Van</p>
                                                    <span>27</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBags" aria-expanded="false">
                                    Bags
                                    </button>
                                </h2>
                                <div id="collapseBags" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <input type="checkbox" id="economy4">
                                            <label for="economy4">
                                                <div class="filter--option">
                                                    <p>Economy</p>
                                                    <span>50</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="standard4">
                                            <label for="standard4">
                                                <div class="filter--option">
                                                    <p>Standard</p>
                                                    <span>66</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="full4">
                                            <label for="full4">
                                                <div class="filter--option">
                                                    <p>Full-size</p>
                                                    <span>35</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="compact4">
                                            <label for="compact4">
                                                <div class="filter--option">
                                                    <p>Compact</p>
                                                    <span>99</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="van4">
                                            <label for="van4">
                                                <div class="filter--option">
                                                    <p>Van</p>
                                                    <span>27</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReview" aria-expanded="false">
                                    User Review
                                    </button>
                                </h2>
                                <div id="collapseReview" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <input type="checkbox" id="economy5">
                                            <label for="economy5">
                                                <div class="filter--option">
                                                    <p>Economy</p>
                                                    <span>50</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="standard5">
                                            <label for="standard5">
                                                <div class="filter--option">
                                                    <p>Standard</p>
                                                    <span>66</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="full5">
                                            <label for="full5">
                                                <div class="filter--option">
                                                    <p>Full-size</p>
                                                    <span>35</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="compact5">
                                            <label for="compact5">
                                                <div class="filter--option">
                                                    <p>Compact</p>
                                                    <span>99</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="van5">
                                            <label for="van5">
                                                <div class="filter--option">
                                                    <p>Van</p>
                                                    <span>27</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter--btn--area">
                            <button class="button btn-filter w-100 mt_45">Apply Filter</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt_30">
                    <!-- filter Carbox -->
                    <div class="filter--carbox--area">
                        <div class="row">
                            <div class="col-md-6 mt_30">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_30">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_30">
                                <!-- card  -->
                                <div class="car--card">
                                    <div class="img--area">
                                        <img src="assets/images/car6.png" alt="">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_30">
                                <!-- card  -->
                                <div class="car--card">
                                    <div class="img--area">
                                        <img src="assets/images/car7.png" alt="">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_30">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_30">
                                <!-- card  -->
                                <div class="car--card">
                                    <div class="img--area">
                                        <img src="assets/images/car9.png" alt="">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_30">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt_30">
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
                                            <a href="{{ route('view-details.index') }}" class="button">Rent Car</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagination -->
                <ul class="filter--pagination text-center justify-content-center">
                    <li class="prev">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15.0938 19.9201L8.57375 13.4001C7.80375 12.6301 7.80375 11.3701 8.57375 10.6001L15.0938 4.08008" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="links">1</a>
                    </li>
                    <li>
                        <a href="#" class="links active">2</a>
                    </li>
                    <li>
                        <a href="#" class="links">3</a>
                    </li>
                    <li>
                        <a href="#" class="links">4</a>
                    </li>
                    <li>
                        <a href="#" class="links">5</a>
                    </li>
                    <li class="next">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M8.90625 19.9201L15.4263 13.4001C16.1963 12.6301 16.1963 11.3701 15.4263 10.6001L8.90625 4.08008" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- car filter area end  -->
    <!-- steps area start  -->
    <section class="steps--area" style="background-image: url({{ asset('frontend/images/steps-bg.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>3 Easy Steps To<br> Renting Our Vehicles</h3>
                </div>
                <div class="col-md-4 mt_20">
                    <!-- steps--box  -->
                    <div class="steps--box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
                            <path d="M41.7376 17.9C39.6576 8.64 31.5776 4.5 24.4975 4.5C24.4975 4.5 24.4975 4.5 24.4775 4.5C17.4175 4.5 9.35755 8.64 7.25755 17.88C4.89755 28.2 11.2175 36.94 16.9375 42.46C19.0575 44.5 21.7775 45.52 24.4975 45.52C27.2176 45.52 29.9376 44.5 32.0376 42.46C37.7576 36.94 44.0776 28.22 41.7376 17.9ZM31.0576 19.56L23.0575 27.56C22.7575 27.86 22.3775 28 21.9975 28C21.6175 28 21.2375 27.86 20.9375 27.56L17.9375 24.56C17.3575 23.98 17.3575 23.02 17.9375 22.44C18.5175 21.86 19.4775 21.86 20.0575 22.44L21.9975 24.38L28.9375 17.44C29.5175 16.86 30.4775 16.86 31.0576 17.44C31.6376 18.02 31.6376 18.98 31.0576 19.56Z" fill="#FF0000"/>
                          </svg>
                          <p>Choose Pickup & Dropoff Dates</p>
                    </div>
                </div>
                <div class="col-md-4 mt_20">
                    <!-- steps--box  -->
                    <div class="steps--box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
                            <path d="M34.0005 7.62V4.5C34.0005 3.68 33.3205 3 32.5005 3C31.6805 3 31.0005 3.68 31.0005 4.5V7.5H18.0005V4.5C18.0005 3.68 17.3205 3 16.5005 3C15.6805 3 15.0005 3.68 15.0005 4.5V7.62C9.60046 8.12 6.98046 11.34 6.58046 16.12C6.54046 16.7 7.02046 17.18 7.58046 17.18H41.4205C42.0005 17.18 42.4805 16.68 42.4205 16.12C42.0205 11.34 39.4005 8.12 34.0005 7.62Z" fill="#FF0000"/>
                            <path d="M40.5 20.1797H8.5C7.4 20.1797 6.5 21.0797 6.5 22.1797V34.4997C6.5 40.4997 9.5 44.4997 16.5 44.4997H32.5C39.5 44.4997 42.5 40.4997 42.5 34.4997V22.1797C42.5 21.0797 41.6 20.1797 40.5 20.1797ZM18.92 36.9197C18.82 36.9997 18.72 37.0997 18.62 37.1597C18.5 37.2397 18.38 37.2997 18.26 37.3397C18.14 37.3997 18.02 37.4397 17.9 37.4597C17.76 37.4797 17.64 37.4997 17.5 37.4997C17.24 37.4997 16.98 37.4397 16.74 37.3397C16.48 37.2397 16.28 37.0997 16.08 36.9197C15.72 36.5397 15.5 36.0197 15.5 35.4997C15.5 34.9797 15.72 34.4597 16.08 34.0797C16.28 33.8997 16.48 33.7597 16.74 33.6597C17.1 33.4997 17.5 33.4597 17.9 33.5397C18.02 33.5597 18.14 33.5997 18.26 33.6597C18.38 33.6997 18.5 33.7597 18.62 33.8397C18.72 33.9197 18.82 33.9997 18.92 34.0797C19.28 34.4597 19.5 34.9797 19.5 35.4997C19.5 36.0197 19.28 36.5397 18.92 36.9197ZM18.92 29.9197C18.54 30.2797 18.02 30.4997 17.5 30.4997C16.98 30.4997 16.46 30.2797 16.08 29.9197C15.72 29.5397 15.5 29.0197 15.5 28.4997C15.5 27.9797 15.72 27.4597 16.08 27.0797C16.64 26.5197 17.52 26.3397 18.26 26.6597C18.52 26.7597 18.74 26.8997 18.92 27.0797C19.28 27.4597 19.5 27.9797 19.5 28.4997C19.5 29.0197 19.28 29.5397 18.92 29.9197ZM25.92 36.9197C25.54 37.2797 25.02 37.4997 24.5 37.4997C23.98 37.4997 23.46 37.2797 23.08 36.9197C22.72 36.5397 22.5 36.0197 22.5 35.4997C22.5 34.9797 22.72 34.4597 23.08 34.0797C23.82 33.3397 25.18 33.3397 25.92 34.0797C26.28 34.4597 26.5 34.9797 26.5 35.4997C26.5 36.0197 26.28 36.5397 25.92 36.9197ZM25.92 29.9197C25.82 29.9997 25.72 30.0797 25.62 30.1597C25.5 30.2397 25.38 30.2997 25.26 30.3397C25.14 30.3997 25.02 30.4397 24.9 30.4597C24.76 30.4797 24.64 30.4997 24.5 30.4997C23.98 30.4997 23.46 30.2797 23.08 29.9197C22.72 29.5397 22.5 29.0197 22.5 28.4997C22.5 27.9797 22.72 27.4597 23.08 27.0797C23.26 26.8997 23.48 26.7597 23.74 26.6597C24.48 26.3397 25.36 26.5197 25.92 27.0797C26.28 27.4597 26.5 27.9797 26.5 28.4997C26.5 29.0197 26.28 29.5397 25.92 29.9197ZM32.92 36.9197C32.54 37.2797 32.02 37.4997 31.5 37.4997C30.98 37.4997 30.46 37.2797 30.08 36.9197C29.72 36.5397 29.5 36.0197 29.5 35.4997C29.5 34.9797 29.72 34.4597 30.08 34.0797C30.82 33.3397 32.18 33.3397 32.92 34.0797C33.28 34.4597 33.5 34.9797 33.5 35.4997C33.5 36.0197 33.28 36.5397 32.92 36.9197ZM32.92 29.9197C32.82 29.9997 32.72 30.0797 32.62 30.1597C32.5 30.2397 32.38 30.2997 32.26 30.3397C32.14 30.3997 32.02 30.4397 31.9 30.4597C31.76 30.4797 31.62 30.4997 31.5 30.4997C30.98 30.4997 30.46 30.2797 30.08 29.9197C29.72 29.5397 29.5 29.0197 29.5 28.4997C29.5 27.9797 29.72 27.4597 30.08 27.0797C30.28 26.8997 30.48 26.7597 30.74 26.6597C31.1 26.4997 31.5 26.4597 31.9 26.5397C32.02 26.5597 32.14 26.5997 32.26 26.6597C32.38 26.6997 32.5 26.7597 32.62 26.8397C32.72 26.9197 32.82 26.9997 32.92 27.0797C33.28 27.4597 33.5 27.9797 33.5 28.4997C33.5 29.0197 33.28 29.5397 32.92 29.9197Z" fill="#FF0000"/>
                          </svg>
                          <p>Choose Your Vehicle</p>
                    </div>
                </div>
                <div class="col-md-4 mt_20">
                    <!-- steps--box  -->
                    <div class="steps--box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
                            <path d="M44 16.5002C44 17.3202 43.32 18.0002 42.5 18.0002H6.5C5.68 18.0002 5 17.3202 5 16.5002C5 15.6802 5.68 15.0002 6.5 15.0002H8.54L9.3 11.3802C10.02 7.88016 11.52 4.66016 17.48 4.66016H31.52C37.48 4.66016 38.98 7.88016 39.7 11.3802L40.46 15.0002H42.5C43.32 15.0002 44 15.6802 44 16.5002Z" fill="#FF0000"/>
                            <path d="M44.8631 27.82C44.5631 24.52 43.6831 21 37.2631 21H11.7431C5.3231 21 4.4631 24.52 4.1431 27.82L3.0231 40C2.8831 41.52 3.3831 43.04 4.4231 44.18C5.4831 45.34 6.9831 46 8.5831 46H12.3431C15.5831 46 16.2031 44.14 16.6031 42.92L17.0031 41.72C17.4631 40.34 17.5831 40 19.3831 40H29.6231C31.4231 40 31.4831 40.2 32.0031 41.72L32.4031 42.92C32.8031 44.14 33.4231 46 36.6631 46H40.4231C42.0031 46 43.5231 45.34 44.5831 44.18C45.6231 43.04 46.1231 41.52 45.9831 40L44.8631 27.82ZM18.5031 32H12.5031C11.6831 32 11.0031 31.32 11.0031 30.5C11.0031 29.68 11.6831 29 12.5031 29H18.5031C19.3231 29 20.0031 29.68 20.0031 30.5C20.0031 31.32 19.3231 32 18.5031 32ZM36.5031 32H30.5031C29.6831 32 29.0031 31.32 29.0031 30.5C29.0031 29.68 29.6831 29 30.5031 29H36.5031C37.3231 29 38.0031 29.68 38.0031 30.5C38.0031 31.32 37.3231 32 36.5031 32Z" fill="#FF0000"/>
                          </svg>
                          <p>Choose Pickup Location</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- steps area end  -->
    <!-- testimonial area start  -->
    <section class="testimonial--area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt_48">
                    <!-- testi--title  -->
                    <div class="testi--title">
                        <h3>
                            What our <span>customers</span> have to say
                            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="52" viewBox="0 0 49 52" fill="none">
                                <path d="M22.5997 0V18.9913C22.5997 27.7333 20.7164 34.9681 16.9497 40.6956C13.0325 46.4232 7.38256 50.1913 0 52V44.087C4.51994 42.8812 7.75922 40.6203 9.71786 37.3043C11.6765 34.1391 12.8065 29.9942 13.1078 24.8696H4.51994V0H22.5997ZM49 0V18.9913C49 27.7333 47.1167 34.9681 43.3501 40.6956C39.4328 46.4232 33.7829 50.1913 26.4003 52V44.087C30.9203 42.8812 34.1595 40.6203 36.1182 37.3043C38.0768 34.1391 39.2068 29.9942 39.5081 24.8696L30.9203 24.8696L30.9203 0H49Z" fill="#E2E4FD"/>
                            </svg>
                        </h3>
                        <p><strong>We are world wide corporates Brand</strong> Experience the future of automotive innovation with our latest car models we offer a wide range of rental cars to suit your needs. </p>
                    </div>
                </div>
                <div class="col-md-6 mt_48">
                    <!-- testi box  -->
                    <div class="testi--box">
                        <img src="assets/images/testi1.png" alt="">
                        <h4>MeKabirr</h4>
                        <span>Costomer </span>
                        <p>“On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next.</p>
                    </div>
                </div>
                <div class="col-md-6 mt_48">
                    <!-- testi box  -->
                    <div class="testi--box">
                        <img src="assets/images/testi2.png" alt="">
                        <h4>MeKabirr</h4>
                        <span>Costomer </span>
                        <p>“On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next.</p>
                    </div>
                </div>
                <div class="col-md-6 mt_48">
                    <!-- testi box  -->
                    <div class="testi--box">
                        <img src="assets/images/testi3.png" alt="">
                        <h4>MeKabirr</h4>
                        <span>Costomer </span>
                        <p>“On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end  -->
</main>
@endsection
