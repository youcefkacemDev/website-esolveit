<div>
    {{-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh --}}

    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/images/logo/esolveit_logo.png') }}" alt="Logo" />
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav main-nav-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" height="50px" />
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

                            @if (false)
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
                            @endif

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
