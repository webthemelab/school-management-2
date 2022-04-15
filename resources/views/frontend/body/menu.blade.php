<div class="banner-agile">


     <ul class="slider">
         @foreach ($sliders as $row)
        <li class="active">
            <div class="banner-w3ls-1" style=" background-image: url('{{asset($row->image)}}'); ">

                <div class="banner-text-posi-w3ls">
                    <div class="banner-text-whtree">
                        <h3 class="text-capitalize text-white p-4">
                            {{$row->title}}
                        </h3>
                    </div>
                </div>
            </div>
        </li>
        @endforeach

    </ul>
    <ul class="pager">
        @foreach ($sliders as $row)


        <li data-index="0" class="active"></li>
        @endforeach

    </ul>




    <!-- navigation -->
    <div class="navigation-w3ls">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
             aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Courses
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="language.html">Language</a>
                            <a class="dropdown-item" href="communication.html">Communication</a>
                            <a class="dropdown-item" href="business.html">Business</a>
                            <a class="dropdown-item" href="software.html">Software</a>
                            <a class="dropdown-item" href="social_media.html">Social Media</a>
                            <a class="dropdown-item" href="photography.html">Photography</a>
                            <a class="dropdown-item" href="course_details.html">Course Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="form.html">Apply Now</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about.html">Instructors</a>
                            <a class="dropdown-item" href="index.html">What We Do</a>
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="register.html">Register</a>
                            <a class="dropdown-item" href="404.html">404 Page</a>
                            <a class="dropdown-item" href="coming_soon.html">Coming Soon</a>
                            <a class="dropdown-item" href="form.html">Admission Form</a>
                            <a class="dropdown-item" href="faq.html">Faq</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- //navigation -->





</div>


