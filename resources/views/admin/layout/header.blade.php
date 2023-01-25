<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub {{ (request()->is('admin/dashbord')) ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ route('admin_dash')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                         <li class="has-sub {{ (request()->is('admin/cat')) ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ route('cat_dash')}}">
                                <i class="fas fa-tachometer-alt"></i>category</a>
                        </li>
                
                    </ul>
                </div>
            </nav>
        </header>

        