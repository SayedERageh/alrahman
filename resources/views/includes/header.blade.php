<header id="header" class="header d-flex align-items-center sticky-top" >
  <div class="container-fluid d-flex align-items-center justify-content-between flex-row-reverse">

    <!-- MOBILE -->
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    <!-- LOGO -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo.png') }}" alt="شركة الرحمن">
    </a>

    <!-- NAV -->
    <nav id="navmenu" class="navmenu" dir="rtl">
      <ul class="d-flex gap-4 mb-0">

        <li><a href="{{ route('home') }}" class="active">الرئيسية</a></li>
        <li><a href="#about">من نحن</a></li>
        <li><a href="#services">الخدمات</a></li>
        <li><a href="#portfolio">الأعمال</a></li>
        <li><a href="#team">الفريق</a></li>
        <li><a href="#">المدونة</a></li>

        <li class="dropdown">
          <a href="#"><span>القائمة</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">خيار 1</a></li>
            <li><a href="#">خيار 2</a></li>
          </ul>
        </li>

        <li><a href="#contact">تواصل معنا</a></li>

      </ul>
    </nav>

    <!-- BUTTON -->
    <a class="btn-getstarted" href="#contact">ابدأ الآن</a>


  </div>
</header>