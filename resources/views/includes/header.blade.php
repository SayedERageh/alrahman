<header id="header" class="header d-flex align-items-center fixed-top" dir="rtl">
  <div class="header-container container-fluid bg-light container-xl position-relative d-flex align-items-center justify-content-between">

    <!-- LOGO -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center ms-auto ms-xl-0">
      <img src="{{ asset('assets/img/logo.png') }}" alt="شركة الرحمن" style="height: 45px;">
    </a>

    <!-- NAV -->
    <nav id="navmenu" class="navmenu bg-light" dir="rtl">

      <ul>

        <li>
          <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
            الرئيسية
          </a>
        </li>

        <li>
          <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
            من نحن
          </a>
        </li>

   
<li class="dropdown">
  <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
    <span>الخدمات</span>
    <i class="bi bi-chevron-down"></i>
  </a>

  <ul>
    @foreach($services ?? [] as $service)
      <li>
        <a href="{{ route('services.show', $service->slug) }}">
          {{ $service->title }}
        </a>
      </li>
    @endforeach
  </ul>
</li>

        <li>
          <a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'active' : '' }}">
            المقالات
          </a>
        </li>

        <li>
          <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            تواصل معنا
          </a>
        </li>

      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- CTA BUTTONS -->
    <div class="d-flex gap-2">
      <a class="btn-getstarted" href="#contact">
        ابدأ الآن
      </a>
    </div>

  </div>
</header>