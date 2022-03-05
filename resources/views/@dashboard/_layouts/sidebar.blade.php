<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }} Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item @if(Route::currentRouteName() == 'dashboard.index') active @endif">
        <a class="nav-link" href="{{ route('dashboard.index') }}"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span> </a>
    </li>

    <!-- About us -->
    <li class="nav-item @if(Route::currentRouteName() == 'about.index') active @endif">
        <a class="nav-link" href="{{ route('about.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>About us</span> </a>
    </li>

    <!-- Media -->
    <li class="nav-item @if(Route::currentRouteName() == 'media.index') active @endif">
        <a class="nav-link" href="{{ route('media.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Media</span> </a>
    </li>

    <!-- Categories -->
    <li class="nav-item @if(Route::currentRouteName() == 'category.index') active @endif">
        <a class="nav-link" href="{{ route('category.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Categories</span> </a>
    </li>

    <!-- Products -->
    <li class="nav-item @if(Route::currentRouteName() == 'product.index') active @endif">
        <a class="nav-link" href="{{ route('product.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Products</span> </a>
    </li>

    <!-- Slider -->
    <li class="nav-item @if(Route::currentRouteName() == 'slider.index') active @endif">
        <a class="nav-link" href="{{ route('slider.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Slider</span> </a>
    </li>

    <!-- Social -->
    <li class="nav-item @if(Route::currentRouteName() == 'social.index') active @endif">
        <a class="nav-link" href="{{ route('social.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Social</span> </a>
    </li>

    <!-- testimonial -->
    <li class="nav-item @if(Route::currentRouteName() == 'testimonial.index') active @endif">
        <a class="nav-link" href="{{ route('testimonial.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Testimonial</span> </a>
    </li>

    <!-- Messages -->
    <li class="nav-item @if(Route::currentRouteName() == 'message.index') active @endif">
        <a class="nav-link" href="{{ route('message.index') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Messages</span> </a>
    </li>

    <!-- translations -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('translations') }}"> <i class="fas fa-fw fa-angle-right"></i> <span>Translations</span> </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
