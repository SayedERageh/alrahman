<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>@yield('title', 'شركة الرحمن لعزل الأسطح والخزانات')</title>

<meta name="description"
    content="@yield('description', 'شركة الرحمن لعزل الأسطح والخزانات تقدم خدمات العزل المائي والحراري وعزل الفوم وعزل الخزانات بأفضل الخامات وأعلى معايير الجودة في جميع أنحاء مصر.')">

<meta name="keywords"
    content="@yield('keywords', 'شركة الرحمن, عزل الأسطح, عزل الخزانات, العزل المائي, العزل الحراري, عزل فوم, كشف تسربات المياه, عزل الأسقف, عزل المباني')">

<meta name="author" content="شركة الرحمن لعزل الأسطح والخزانات">

<meta name="robots" content="@yield('robots', 'index,follow')">

<link rel="canonical" href="@yield('canonical', url()->current())">

<meta property="og:title" content="@yield('title', 'شركة الرحمن لعزل الأسطح والخزانات')">

<meta property="og:description"
    content="@yield('description', 'شركة الرحمن لعزل الأسطح والخزانات تقدم خدمات العزل المائي والحراري وعزل الفوم وعزل الخزانات بأفضل جودة.')">

<meta property="og:url" content="{{ url()->current() }}">

<meta property="og:type" content="website">

<meta property="og:site_name" content="شركة الرحمن لعزل الأسطح والخزانات">
```


  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
<link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">
<!-- Floating Buttons -->
<div class="floating-buttons">

  <!-- WhatsApp -->
  <a href="https://wa.me/966551689585" target="_blank" class="float-btn whatsapp">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Call -->
  <a href="tel:+966551689585" class="float-btn call">
    <i class="bi bi-telephone-fill"></i>
  </a>

</div>

<style>
.floating-buttons {
    position: fixed;
    left: 20px;
    bottom: 20px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 9999;
}

.float-btn {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 24px;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: 0.3s;
}

.float-btn:hover {
    transform: scale(1.1);
    color: #fff;
}

.whatsapp {
    background: #25D366;
}

.call {
    background: #007bff;
}
</style>
    @include('includes.header')

  <main class="main">
        @yield('content')
  </main>
    @include('includes.footer')


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>