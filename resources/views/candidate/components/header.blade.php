<header class="site-navbar mt-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="site-logo col-6"><a href="index.html">JobPulse</a></div>

            <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                    <li><a href="{{ url('/dashboard') }}"" class="nav-link active">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>


                    <li class="has-children">
                        <a href="job-listings.html">Job Listings</a>
                        <ul class="dropdown">
                            <li><a href="job-single.html">Job Single</a></li>
                            <li><a href="post-job.html">Post a Job</a></li>
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
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
                    <li class="d-lg-none"><a href="login.html">Log In</a></li>
                </ul>
            </nav>

            <div class="right-cta-menu text-right d-flex align-items-center col-6">
                <div class="d-flex flex-column-reverse ml-auto mb-3" style="margin-top: 10px;">
                    <!-- Adjusted margin-top value -->
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-white" style="margin-left: 10px;">{{ Auth::user()->email }}
                    </div>
                </div>


                <div class="ml-auto mt-3 mr-2"> <!-- Adjusted margin -->
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

                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3">
                    <span class="icon-menu h3 m-0 p-0 mt-2"></span>
                </a>
            </div>
        </div>
    </div>
</header>
