<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid d-flex align-items-center justify-content-between flex-row-reverse">

    <!-- LOGO -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="شركة الرحمن">
    </a>

    <!-- NAV -->
    <nav id="navmenu" class="navmenu" dir="rtl">

      @php
        function isActive($route) {
            return request()->routeIs($route) ? 'active' : '';
        }
      @endphp

      <ul class="d-flex gap-4 mb-0">

        <li>
          <a href="{{ route('home') }}" class="{{ isActive('home') }}">
            الرئيسية
          </a>
        </li>

        <li>
          <a href="{{ route('about') }}" class="{{ isActive('about') }}">
            من نحن
          </a>
        </li>

        <li>
          <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
            الخـــدمـــات
          </a>
        </li>

        <li class="dropdown">
          <a href="#" class="{{ request()->routeIs('services.show') ? 'active' : '' }}">
            <span>انواع الخدمات</span>
            <i class="bi bi-chevron-down"></i>
          </a>

          <ul>
            @foreach($services as $service)
              <li>
                <a href="{{ route('services.show', $service->slug) }}">
                  {{ $service->title }}
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li>
          <a href="{{ route('posts.index') }}" class="{{ isActive('posts.index') }}">
            المقالات
          </a>
        </li>

        <li>
          <a href="{{ route('contact') }}" class="{{ isActive('contact') }}">
            تواصل معنا
          </a>
        </li>

      </ul>
    </nav>

    <!-- BUTTON -->
    <a class="btn-getstarted" href="#contact">ابدأ الآن</a>

    <!-- MOBILE -->
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

  </div>
</header>