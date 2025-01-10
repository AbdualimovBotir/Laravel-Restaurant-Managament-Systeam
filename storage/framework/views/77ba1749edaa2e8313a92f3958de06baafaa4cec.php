<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">
                <?php if($user !== null): ?>
                    <div class="profile-image">
                        <?php if($user->img): ?>
                            <img
                                class="img-xs rounded-circle ml-2 cursor-pointer"
                                src="<?php echo e($user->img); ?>"
                                alt="Profile image"
                            />
                        <?php else: ?>
                            <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
                        <?php endif; ?>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name"><?php echo e($user->name); ?></p>
                        <?php if($isAdmin === true): ?>
                            <p class="designation">Administrator</p>
                        <?php else: ?>
                            <p class="designation">General User</p>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
                    <div class="text-wrapper">
                        <p class="profile-name">Guest User</p>
                        <p class="designation">Guest</p>
                    </div>
                <?php endif; ?>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Jadval</span> <!-- Changed "Tables" to "Jadval" -->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                <span class="menu-title">Foydalanuvchilar</span> <!-- Changed "Users" to "Foydalanuvchilar" -->
                <i class="fa-solid fa-users menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('foodmenu.index')); ?>">
                <span class="menu-title">Oziq-ovqat menyusi</span> <!-- Changed "Food Menu" to "Oziq-ovqat menyusi" -->
                <i class="fa-solid fa-bowl-rice menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('reservation.index')); ?>">
                <span class="menu-title">Rezervatsiyalar</span> <!-- Changed "Reservations" to "Rezervatsiyalar" -->
                <i class="fa-solid fa-table menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('specialdishes.index')); ?>">
                <span class="menu-title">Maxsus taomlar</span> <!-- Changed "Special dishes" to "Maxsus taomlar" -->
                <i class="fa-solid fa-bell-concierge menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('testimonial.index')); ?>">
                <span class="menu-title">Izohlar</span> <!-- Changed "Testimonials" to "Izohlar" -->
                <i class="fa-solid fa-star-half-stroke menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
<?php /**PATH C:\Users\Admin\PhpstormProjects\restaurant-site-laravel\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>