@extends('layouts.app')

@section('title', $page?->seo_title ?? 'الحدمات')

@section('description', $page?->seo_description)

@section('keywords', $page?->seo_keywords)
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
    <div class="container page-header-inner text-center">

        <h1 class="display-3 text-white fw-bold mb-3 animated slideInDown">
            الخــدمات
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">

                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">الرئيسية</a>
                </li>

                <li class="breadcrumb-item active text-white" aria-current="page">
                    الخدمات
                </li>

            </ol>
        </nav>

    </div>
</div>
<!-- Page Header End -->
<main class="main">
<section id="services" class="services section" dir="rtl">

  <div class="container section-title" data-aos="fade-up">
    <h2>الخدمات</h2>
    <p>تعرف على أهم خدماتنا</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      @foreach($services as $service)

        <div class="col-xl-4 col-md-6" data-aos="zoom-in">

          <div class="service-item">

            <div class="img">
              <img src="{{ asset('uploads/' . $service->image) }}"
                   class="img-fluid"
                   style="height:450px; object-fit:cover;"
                   alt="{{ $service->title }}">
            </div>

            <div class="details position-relative">

              <div class="icon">
                <i class="bi bi-activity"></i> 
              </div>

              <a href="{{ route('services.show', $service->slug) }}" class="stretched-link">
                <h3>{{ $service->title }}</h3>
              </a>

            
  <!-- زر التفاصيل -->
  <a href="{{ route('services.show', $service->slug) }}" class="btn btn-primary mt-2">
    عرض التفاصيل
  </a>
            </div>

          </div>

        </div>

      @endforeach

    </div>

  </div>

</section>
</main>

@endsection