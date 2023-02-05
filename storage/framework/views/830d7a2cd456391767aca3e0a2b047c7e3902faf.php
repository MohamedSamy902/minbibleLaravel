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

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
                        <li class="dropdown">
                            <a class="nav-link menu-title <?php echo e(prefixActive('roles')); ?>" href="javascript:void(0)">
                                <i data-feather="home"></i>
                                <span><?php echo e(__('role.role')); ?></span>
                            </a>
                            <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('roles')); ?>;">
                                <li><a href="<?php echo e(route('roles.index')); ?>"
                                        class="<?php echo e(routeActive('roles.index')); ?>"><?php echo e(__('role.role_list')); ?></a>
                                </li>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                                    <li><a href="<?php echo e(route('roles.create')); ?>"
                                            class="<?php echo e(routeActive('roles.create')); ?>"><?php echo e(__('role.add_role')); ?>

                                        </a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                        <li class="dropdown">
                            <a class="nav-link menu-title <?php echo e(prefixActive('users')); ?>" href="javascript:void(0)">
                                <i data-feather="home"></i>
                                <span><?php echo e(__('user.user')); ?></span>
                            </a>
                            <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('users')); ?>;">
                                <li><a href="<?php echo e(route('users.index')); ?>"
                                        class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('user.user_list')); ?></a>
                                </li>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
                                    <li><a href="<?php echo e(route('users.create')); ?>"
                                            class="<?php echo e(routeActive('users.create')); ?>"><?php echo e(__('user.user_add')); ?>

                                        </a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH /home/sharo/Desktop/masterLaravel/resources/views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>