<div>
    {{-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius --}}
    <header class="top-header top-header-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-left">
                        <div class="header-left-card">
                            <ul>
                                <li>
                                    <div class="head-icon">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <a href="#">123 Western Road, LA.</a>
                                </li>

                                <li>
                                    <div class="head-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <a href="mailto:hello@nixo.com">hello@nixo.com</a>
                                </li>

                                <li>
                                    <div class="head-icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <a href="tel:15143214567">+1 (514) 321-4567</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="top-right">
                        <div class="top-right-login">
                            <a href="login-register.html"><i class="flaticon-user"></i> Log In Or
                                Register</a>
                        </div>

                        <div class="language-list">
                            <select class="language-list-item">
                                <option>English</option>
                                <option>العربيّة</option>
                                <option>Deutsch</option>
                                <option>Português</option>
                                <option>简体中文</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/images/logos/logo-2.png" alt="Logo" />
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav main-nav-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logos/logo-1.png" alt="Logo" />
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a wire:navigate href="{{ route('home') }}" class="nav-link active">
                                    {{ __('app.home') }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="about.html" class="nav-link">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Case Studies
                                            <i class="bx bx-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="case-studies-1.html" class="nav-link">
                                                    Case Studies Style One
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="case-studies-2.html" class="nav-link">
                                                    Case Studies Style Two
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="case-studies-details.html" class="nav-link">
                                                    Case Studies Details
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">
                                            Testimonials
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">
                                            Team
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">
                                            FAQ
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User
                                            <i class="bx bx-chevron-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="login-register.html" class="nav-link">
                                                    Log In Or Register
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="forget-password.html" class="nav-link">
                                                    Forget Password
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="terms-condition.html" class="nav-link">
                                            Terms & Conditions
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">
                                            Privacy Policy
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">
                                            404 page
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">
                                            Coming Soon
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services-1.html" class="nav-link">
                                            Services Grid
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-2.html" class="nav-link">
                                            Services Style One
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-3.html" class="nav-link">
                                            Services Style Two
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-details.html" class="nav-link">
                                            Services Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-1.html" class="nav-link">
                                            Blog Grid
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">
                                            Blog Left Sidebar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-3.html" class="nav-link">
                                            Blog Right Sidebar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">
                                            Blog Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">
                                    Contact Us
                                </a>
                            </li>
                        </ul>

                        <div class="nav-btn">
                            <a href="contact.html" class="default-btn btn-bg1 border-radius-5">Request A Quote</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
