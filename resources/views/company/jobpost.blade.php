<!doctype html>
<html lang="en">

<head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{ asset('welcome/css') }}/custom-bs.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('welcome/fonts') }}/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('welcome/fonts') }}/line-icons/style.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/animate.min.css">
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/quill.snow.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('welcome/css') }}/style.css">
</head>

<body id="top">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        <header class="site-navbar mt-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6"><a href="index.html">JobPulse</a></div>

                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                            <li><a href="index.html" class="nav-link active">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="has-children">
                                <a href="job-listings.html" class="active">Job Listings</a>
                                <ul class="dropdown">
                                    <li><a href="job-single.html">Job Single</a></li>
                                    <li><a href="post-job.html" class="active">Post a Job</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="services.html">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="service-single.html">Service Single</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="faq.html">Frequently Ask Questions</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a>
                            </li>
                            <li class="d-lg-none"><a href="login.html">Log In</a></li>
                        </ul>
                    </nav>

                    <div class="ml-auto mt-3 mr-2"> <!-- Adjusted mr-2 margin -->
                        <x-responsive-nav-link :href="route('profile.edit')" class="text-white">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();" class="text-white">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>


                </div>
            </div>
        </header>

        <!-- HOME -->
        <section class="section-hero overlay inner-page bg-image"
            style="background-image: {{ asset('welcome/images/hero_1.jpg') }};" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold">Post A Job</h1>
                        <div class="custom-breadcrumbs">
                            <a href="#">Home</a> <span class="mx-2 slash">/</span>
                            <a href="#">Job</a> <span class="mx-2 slash">/</span>
                            <span class="text-white"><strong>Post a Job</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="site-section">
            <div class="container">
                <div class="row align-items-center mb-5">
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <form class="p-4 p-md-5 border rounded" method="post"
                            action="{{ route('company.jobpost.store') }}">
                            @csrf
                            <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>

                            <div class="form-group">
                                <label for="title">Job Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Job Title"
                                    name="title">
                            </div>

                            <div class="form-group">
                                <label for="job-category">Job Category</label>
                                <select name="category_id"class="selectpicker border rounded" id="job-region"
                                    data-style="btn-black" data-width="100%" data-live-search="true"
                                    title="Select Category">
                                    <option>Engineering</option>
                                    <option>Accountant</option>
                                    <option>Information Technology</option>
                                    <option>Fashion Designing</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="job-type">Job Nature</label>
                                <select name="job_type_id" class="selectpicker border rounded" id="job-type"
                                    data-style="btn-black" data-width="100%" data-live-search="true"
                                    title="Select Job Nature">
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                    <option>Remote</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="vacancy">Job Vacancy</label>
                                <input type="text" class="form-control" id="job-title" placeholder="Job Title"
                                    name="job-vacancy">
                            </div>

                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="text" class="form-control" id="salary" placeholder="Job Title"
                                    name ="salary">
                            </div>

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="e.g. Dhaka, Bangladesh">
                            </div>

                            <div class="form-group">
                                <label for="description">Job Description</label>
                                <textarea class="form-control" name="description" id="description" cols="5" rows="5"
                                    placeholder="Job description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="benefits" class="mb-2">Benefits</label>
                                <textarea class="form-control" name="benefits" id="benefits" cols="5" rows="5"
                                    placeholder="Benefits"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="qualifications" class="mb-2">Qualifications</label>
                                <textarea class="form-control" name="qualifications" id="qualifications" cols="5" rows="5"
                                    placeholder="Qualifications"></textarea>
                            </div>


                            <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>
                            <div class="form-group">
                                <label for="company-name">Company Name</label>
                                <input type="text" class="form-control" id="company-name"
                                    placeholder="e.g. Amazon" name="company-name">
                            </div>

                            <div class="form-group">
                                <label for="company-location">Company Location</label>
                                <input type="text" class="form-control" id="company-location"
                                    placeholder="e.g. Dhaka,Bangladesh" name="company-location">
                            </div>

                            <div class="form-group">
                                <label for="company-website">Website (Optional)</label>
                                <input type="text" class="form-control" id="company-website"
                                    name="company-website" placeholder="https://">
                            </div>


                            <div class="form-group">
                                <label for="company_linkedin">Linkedin Username (Optional)</label>
                                <input type="text" class="form-control" id="company_linkedin"
                                    name="company_linkedin" placeholder="companyname">
                            </div>

                            <div class="card-footer  p-4">
                                <a href="{{ route('company.dashboard') }}">
                                    <button type="submit" class="btn btn-primary">Save Job</button>
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>



        <footer class="site-footer">

            <a href="#top" class="smoothscroll scroll-top">
                <span class="icon-keyboard_arrow_up"></span>
            </a>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Search Trending</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Web Developers</a></li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Company</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Contact Us</h3>
                        <div class="footer-social">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                        <p class="copyright"><small>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </small></p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- SCRIPTS -->
    <script src="{{ asset('welcome/js') }}/jquery.min.js"></script>
    <script src="{{ asset('welcome/js') }}/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('welcome/js') }}/isotope.pkgd.min.js"></script>
    <script src="{{ asset('welcome/js') }}/stickyfill.min.js"></script>
    <script src="{{ asset('welcome/js') }}/jquery.fancybox.min.js"></script>
    <script src="{{ asset('welcome/js') }}/jquery.easing.1.3.js"></script>

    <script src="{{ asset('welcome/js') }}/jquery.waypoints.min.js"></script>
    <script src="{{ asset('welcome/js') }}/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('welcome/js') }}/owl.carousel.min.js"></script>
    <script src="{{ asset('welcome/js') }}/quill.min.js"></script>


    <script src="{{ asset('welcome/js') }}/bootstrap-select.min.js"></script>

    <script src="{{ asset('welcome/js') }}/custom.js"></script>



</body>

</html>
