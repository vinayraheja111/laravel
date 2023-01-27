<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('assets/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub {{ (request()->is('admin/dashbord')) ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ route('admin_dash') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub {{ (request()->is('admin/cat')) ? 'active' : '' }}">
                            <a class="js-arrow" href="{{  route('cat_dash')}}">
                                <i class="fas fa-desktop"></i>Category</a>
                        </li>
                        <li class="has-sub {{ (request()->is('admin/coupen')) ? 'active' : '' }}">
                            <a class="js-arrow" href="{{  route('cpn_dash')}}">
                                <i class="fas fa-desktop"></i>Coupen</a>
                        </li>
                        <li class="has-sub {{ (request()->is('admin/size')) ? 'active' : '' }}">
                            <a class="js-arrow" href="{{  route('size_dash')}}">
                                <i class="fas fa-desktop"></i>Size</a>
                        </li>
                         <li class="has-sub {{ (request()->is('admin/product')) ? 'active' : '' }}">
                            <a class="js-arrow" href="{{  route('prod_dash')}}">
                                <i class="fas fa-desktop"></i>Product</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>