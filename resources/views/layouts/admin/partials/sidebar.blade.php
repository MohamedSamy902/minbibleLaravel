<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="{{ route('users.edit', auth()->user()->id) }}">
            <i data-feather="settings"></i>
        </a>
        <img class="img-90 rounded-circle"
            src="
                    {{ auth()->user()->getFirstMediaUrl('user') != null
                        ? auth()->user()->getFirstMediaUrl('user')
                        : asset('assets/images/dashboard/1.png') }}"
            alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">{{ auth()->user()->roles_name }}</span></div>
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6>
        </a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>{{ __('master.list') }}</h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('languages') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Languages</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('languages') }};">
                            <li><a href="{{ route('languages.index') }}"
                                    class="{{ routeActive('languages.index') }}">languages List</a>
                            </li>
                            <li><a href="{{ route('languages.create') }}"
                                    class="{{ routeActive('languages.create') }}">Add Languages
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('users') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('user.user') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('users') }};">
                            <li><a href="{{ route('users.index') }}"
                                    class="{{ routeActive('users.index') }}">{{ __('user.user_list') }}</a>
                            </li>
                            <li><a href="{{ route('users.create') }}"
                                    class="{{ routeActive('users.create') }}">{{ __('user.user_add') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('sections') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Index</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('sections') }};">

                            <li><a href="{{ URL::route('sections.index', 'Home') }}"
                                    class="{{ routeActive('users.index') }}">Home</a>
                            </li>
                            <li><a href="{{ URL::route('sections.index', 'ABOUT_THE_BOOK') }}"
                                    class="{{ routeActive('users.index') }}">ABOUT THE BOOK</a>
                            </li>
                            <li><a href="{{ URL::route('sections.index', 'About_The_Writer') }}"
                                    class="{{ routeActive('users.index') }}">About The Writer</a>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('category') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Category</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('category') }};">
                            <li><a href="{{ route('category.index') }}"
                                    class="{{ routeActive('category.index') }}">Category</a>
                            </li>
                            <li>
                                <a href="{{ route('category.create') }}" class="{{ routeActive('category.create') }}">Add Category
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('blogs') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('blogs') }};">
                            <li><a href="{{ route('blogs.index') }}"
                                    class="{{ routeActive('blogs.index') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('blogs.create') }}" class="{{ routeActive('blogs.create') }}">Add Blog
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('products') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Product</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('products') }};">
                            <li><a href="{{ route('products.index') }}"
                                    class="{{ routeActive('products.index') }}">Product</a>
                            </li>
                            <li>
                                <a href="{{ route('products.create') }}" class="{{ routeActive('products.create') }}">Add Product
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('nonmuslims') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>NonMuslim</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('nonmuslims') }};">
                            <li><a href="{{ route('nonmuslims.index') }}"
                                    class="{{ routeActive('nonmuslims.index') }}">NonMuslim</a>
                            </li>
                            <li>
                                <a href="{{ route('nonmuslims.create') }}" class="{{ routeActive('nonmuslims.create') }}">Add NonMuslim
                                </a></li>
                        </ul>
                    </li>


                    

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
