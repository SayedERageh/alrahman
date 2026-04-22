@extends('layouts.app')

@section('title', 'الصفحة الرئيسية')

@section('content')

<!-- Hero Section -->
<section class="container text-center py-5">
    <h1 class="fw-bold">أهلاً بيك في موقعنا السياحي</h1>
    <p class="mt-3">احجز أفضل الرحلات بأسعار مميزة وخدمات عالية الجودة</p>
    <a href="#" class="btn btn-primary mt-3">احجز الآن</a>
</section>

<!-- Services -->
<section class="container py-5">
    <div class="row text-center">

        <div class="col-md-4">
            <h4>رحلات داخلية</h4>
            <p>استمتع بأجمل الأماكن داخل مصر</p>
        </div>

        <div class="col-md-4">
            <h4>رحلات خارجية</h4>
            <p>سافر لأفضل الوجهات العالمية</p>
        </div>

        <div class="col-md-4">
            <h4>حجز فنادق</h4>
            <p>أفضل الفنادق بأقل الأسعار</p>
        </div>

    </div>
</section>

<!-- About -->
<section class="container py-5 text-center">
    <h2>من نحن</h2>
    <p class="mt-3">
        نحن شركة متخصصة في تنظيم الرحلات السياحية وتقديم أفضل العروض
    </p>
</section>

@endsection