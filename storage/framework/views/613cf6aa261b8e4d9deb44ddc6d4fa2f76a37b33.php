<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="<?php echo e(route('users.edit', auth()->user()->id)); ?>">
            <i data-feather="settings"></i>
        </a>
        <img class="img-90 rounded-circle"
            src="
                    <?php echo e(auth()->user()->getFirstMediaUrl('user') != null
                        ? auth()->user()->getFirstMediaUrl('user')
                        : asset('assets/images/dashboard/1.png')); ?>"
            alt="" />
        <div class="badge-bottom"><span class="badge badge-primary"><?php echo e(auth()->user()->roles_name); ?></span></div>
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600"><?php echo e(auth()->user()->name); ?></h6>
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
                            <h6><?php echo e(__('master.list')); ?></h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('languages')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Languages</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('languages')); ?>;">
                            <li><a href="<?php echo e(route('languages.index')); ?>"
                                    class="<?php echo e(routeActive('languages.index')); ?>">languages List</a>
                            </li>
                            <li><a href="<?php echo e(route('languages.create')); ?>"
                                    class="<?php echo e(routeActive('languages.create')); ?>">Add Languages
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('users')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('user.user')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('users')); ?>;">
                            <li><a href="<?php echo e(route('users.index')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('user.user_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('users.create')); ?>"
                                    class="<?php echo e(routeActive('users.create')); ?>"><?php echo e(__('user.user_add')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('sections')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Index</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('sections')); ?>;">

                            <li><a href="<?php echo e(URL::route('sections.index', 'Home')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>">Home</a>
                            </li>
                            <li><a href="<?php echo e(URL::route('sections.index', 'ABOUT_THE_BOOK')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>">ABOUT THE BOOK</a>
                            </li>
                            <li><a href="<?php echo e(URL::route('sections.index', 'About_The_Writer')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>">About The Writer</a>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('category')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Category</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('category')); ?>;">
                            <li><a href="<?php echo e(route('category.index')); ?>"
                                    class="<?php echo e(routeActive('category.index')); ?>">Category</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('category.create')); ?>" class="<?php echo e(routeActive('category.create')); ?>">Add Category
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('blogs')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('blogs')); ?>;">
                            <li><a href="<?php echo e(route('blogs.index')); ?>"
                                    class="<?php echo e(routeActive('blogs.index')); ?>">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('blogs.create')); ?>" class="<?php echo e(routeActive('blogs.create')); ?>">Add Blog
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('products')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Product</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('products')); ?>;">
                            <li><a href="<?php echo e(route('products.index')); ?>"
                                    class="<?php echo e(routeActive('products.index')); ?>">Product</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('products.create')); ?>" class="<?php echo e(routeActive('products.create')); ?>">Add Product
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('nonmuslims')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>NonMuslim</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('nonmuslims')); ?>;">
                            <li><a href="<?php echo e(route('nonmuslims.index')); ?>"
                                    class="<?php echo e(routeActive('nonmuslims.index')); ?>">NonMuslim</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('nonmuslims.create')); ?>" class="<?php echo e(routeActive('nonmuslims.create')); ?>">Add NonMuslim
                                </a></li>
                        </ul>
                    </li>


                    

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>