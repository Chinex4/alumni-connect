<x-home title="About AlumniConnect">
        <!--==========================-->
        <!--=         Banner         =-->
        <!--==========================-->
        <section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="m-auto text-center col-lg-8">
                        <div class="page-title-content">
                            <h1 class="h2">All Event Archive</h1>
                            <p>
                                Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=========================-->
        <!--=          Event        =-->
        <!--=========================-->
        <section id="page-content-wrap">
            <div class="event-page-content-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="event-filter-area">
                                <form action="https://codeboxr.net/themedemo/AlumniConnect/html/{{ route('index') }}" class="form-inline d-flex">
                                    <select name="year" id="year">
                                        <option selected>Year</option>
                                        <option>2018</option>
                                        <option>2017</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                        <option>2014</option>
                                    </select>

                                    <select name="place" id="place">
                                        <option selected>Place</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Colorado</option>
                                        <option>Delaware</option>
                                    </select>

                                    <select name="type" id="type">
                                        <option selected>Type</option>
                                        <option>Meetup</option>
                                        <option>Seminar</option>
                                        <option>Get Together</option>
                                    </select>

                                    <button class="btn btn-brand">Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-event-list">
                                <!-- Single Event Start -->
                                <div class="single-upcoming-event">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="up-event-thumb">
                                                <img src="assets/images/event/event-img-1.jpg" class="img-fluid" alt="Upcoming Event">
                                                <h4 class="up-event-date">It’s 27 February 2023</h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="up-event-text">
                                                        <div class="event-countdown">
                                                            <div class="event-countdown-counter" data-date="2024/9/10"></div>
                                                            <p>Remaining</p>
                                                        </div>
                                                        <h3><a href="single-{{ route('event') }}">We are going to arrange a get
                                                                together!</a></h3>
                                                        <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquipv ex ea.</p>
                                                        <a href="single-{{ route('event') }}" class="btn btn-brand btn-brand-dark">join
                                                            with us</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Event End -->

                                <!-- Single Event Start -->
                                <div class="single-upcoming-event">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="up-event-thumb">
                                                <img src="assets/images/event/event-img-3.jpg" class="img-fluid" alt="Upcoming Event">
                                                <h4 class="up-event-date">It’s 27 February 2023</h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="up-event-text">
                                                        <div class="event-countdown">
                                                            <div class="event-countdown-counter" data-date="2024/9/10"></div>
                                                            <p>Remaining</p>
                                                        </div>
                                                        <h3>
                                                            <a href="single-{{ route('event') }}">
                                                                We are going to arrange a get together!
                                                            </a>
                                                        </h3>
                                                        <p>
                                                            Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquipv ex ea.
                                                        </p>
                                                        <a href="single-{{ route('event') }}" class="btn btn-brand btn-brand-dark">
                                                            Join with us
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Event End -->

                                <!-- Single Event Start -->
                                <div class="single-upcoming-event">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="up-event-thumb">
                                                <img src="assets/images/event/event-img-1.jpg" class="img-fluid" alt="Upcoming Event">
                                                <h4 class="up-event-date">It’s 27 February 2023</h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="up-event-text">
                                                        <div class="event-countdown">
                                                            <div class="event-countdown-counter" data-date="2024/9/10"></div>
                                                            <p>Remaining</p>
                                                        </div>
                                                        <h3>
                                                            <a href="single-{{ route('event') }}">
                                                                We are going to arrange a get together!
                                                            </a>
                                                        </h3>
                                                        <p>
                                                            Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquipv ex ea.
                                                        </p>
                                                        <a href="single-{{ route('event') }}" class="btn btn-brand btn-brand-dark">
                                                            Join with us
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Event End -->

                                <!-- Single Event Start -->
                                <div class="single-upcoming-event">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="up-event-thumb">
                                                <img src="assets/images/event/event-img-4.jpg" class="img-fluid" alt="Upcoming Event">
                                                <h4 class="up-event-date">It’s 27 February 2023</h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="up-event-text">
                                                        <div class="event-countdown">
                                                            <div class="event-countdown-counter" data-date="2024/9/10"></div>
                                                            <p>Remaining</p>
                                                        </div>
                                                        <h3>
                                                            <a href="single-{{ route('event') }}">
                                                                We are going to arrange a get together!
                                                            </a>
                                                        </h3>
                                                        <p>
                                                            Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquipv ex ea.
                                                        </p>
                                                        <a href="single-{{ route('event') }}" class="btn btn-brand btn-brand-dark">join
                                                            with us</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Event End -->
                            </div>
                        </div>
                    </div>

                    <!-- Pagination Start -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center pagination-wrap">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">50</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination End -->
                </div>
            </div>
        </section>

        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
    </x-home>
