<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a class="nav-link" href="{{ route('admin.index') }}">
                @if ($user !== null)
                    <div class="profile-image">
                        @if ($user->img)
                            <img
                                class="img-xs rounded-circle ml-2 cursor-pointer"
                                src="{{ $user->img }}"
                                alt="Profile image"
                            />
                        @else
                            <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
                        @endif
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ $user->name }}</p>
                        @if ($isAdmin === true)
                            <p class="designation">Administrator</p>
                        @else
                            <p class="designation">General User</p>
                        @endif
                    </div>
                @else
                    <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
                    <div class="text-wrapper">
                        <p class="profile-name">Guest User</p>
                        <p class="designation">Guest</p>
                    </div>
                @endif
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Jadval</span> <!-- Changed "Tables" to "Jadval" -->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <span class="menu-title">Foydalanuvchilar</span> <!-- Changed "Users" to "Foydalanuvchilar" -->
                <i class="fa-solid fa-users menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('foodmenu.index') }}">
                <span class="menu-title">Oziq-ovqat menyusi</span> <!-- Changed "Food Menu" to "Oziq-ovqat menyusi" -->
                <i class="fa-solid fa-bowl-rice menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reservation.index') }}">
                <span class="menu-title">Rezervatsiyalar</span> <!-- Changed "Reservations" to "Rezervatsiyalar" -->
                <i class="fa-solid fa-table menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('specialdishes.index') }}">
                <span class="menu-title">Maxsus taomlar</span> <!-- Changed "Special dishes" to "Maxsus taomlar" -->
                <i class="fa-solid fa-bell-concierge menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('testimonial.index') }}">
                <span class="menu-title">Izohlar</span> <!-- Changed "Testimonials" to "Izohlar" -->
                <i class="fa-solid fa-star-half-stroke menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
