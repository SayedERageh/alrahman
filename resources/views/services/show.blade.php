@extends('layouts.app')

@section('title', $service->title)

@section('meta')
<meta name="description" content="{{ $service->meta_description }}">
<meta name="keywords" content="{{ $service->meta_keywords }}">
@endsection

@section('content')

<!-- Hero -->
<div class="container-fluid page-header p-0"
    style="background:linear-gradient(rgba(8,32,50,.65),rgba(8,32,50,.65)),
    url('{{ asset('uploads/'.$service->image) }}') center center/cover;height:420px;">

    <div class="container h-100">

        <div class="d-flex h-100 align-items-center justify-content-center flex-column text-center">

            <h1 class="display-3 fw-bold text-white mb-3">
                {{ $service->title }}
            </h1>

            <nav>
                <ol class="breadcrumb justify-content-center">

                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">الرئيسية</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('services.index') }}">الخدمات</a>
                    </li>

                    <li class="breadcrumb-item text-white active">
                        {{ $service->title }}
                    </li>

                </ol>
            </nav>

        </div>

    </div>

</div>

<!-- Service -->
<section class="service-section py-5">

    <div class="container">

        <div class="row align-items-center gy-5">

            <!-- Image -->
            <div class="col-lg-6">

                <div class="service-image">

                    <img src="{{ asset('uploads/'.$service->image) }}"
                        class="img-fluid"
                        alt="{{ $service->title }}">

                </div>

            </div>

            <!-- Content -->
            <div class="col-lg-6">

                <div class="service-card">

                    <span class="service-badge">
                        خدماتنا
                    </span>

                    <h2 class="section-title mt-4">
                        {{ $service->title }}
                    </h2>

                    <h4 class="section-subtitle mt-3">
                        {{ $service->short_description }}
                    </h4>

                    <div class="service-content mt-4">
                        {!! $service->description !!}
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@if($service->meta_description)

<section class="py-5 bg-white">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="seo-box">

                    <h3 class="section-title mb-4">
                        معلومات إضافية
                    </h3>

                    <p>
                        {{ $service->meta_description }}
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endif

@endsection

@push('styles')

<style>

body{

    background:#f6f9fc;

}

/* ===================== */

.page-header{

    position:relative;

}

.breadcrumb-item a{

    color:#fff;

    text-decoration:none;

}

/* ===================== */

.service-section{

    padding:100px 0;

}

/* ===================== */

.service-image{

    overflow:hidden;

    border-radius:20px;

    box-shadow:0 20px 50px rgba(0,0,0,.08);

}

.service-image img{

    width:100%;

    transition:.4s;

}

.service-image:hover img{

    transform:scale(1.05);

}

/* ===================== */

.service-card{

    background:#fff;

    border-radius:20px;

    padding:45px;

    box-shadow:0 15px 40px rgba(0,0,0,.08);

}

/* ===================== */

.service-badge{

    display:inline-block;

    padding:12px 30px;

    border-radius:50px;

    background:#eaf5ff;

    color:#0d6efd;

    font-weight:700;

    font-size:15px;

}

/* ===================== */
/* كل العناوين باللون الأزرق */

h1,
h2,
h3,
h4,
h5,
h6,
.section-title{

    color:#0d6efd;

    font-weight:700;

}

/* ===================== */

.section-title{

    font-size:42px;

}

.section-subtitle{

    color:#2c3e50;

    line-height:1.8;

    font-weight:600;

}

/* ===================== */

.service-content{

    color:#666;

    font-size:18px;

    line-height:2.2;

}

.service-content p{

    margin-bottom:18px;

}

.service-content ul{

    padding-right:20px;

}

.service-content li{

    margin-bottom:12px;

}

/* ===================== */

.seo-box{

    background:#fff;

    border-radius:20px;

    padding:45px;

    box-shadow:0 15px 35px rgba(0,0,0,.08);

}

/* ===================== */

@media(max-width:991px){

.section-title{

font-size:30px;

}

.service-card{

padding:30px;

}

.page-header{

height:300px !important;

}

}

</style>

@endpush