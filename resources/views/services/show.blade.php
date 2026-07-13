@extends('layouts.app')

@section('title',  $service->title)

@section('meta')
<meta name="description" content="{{ $service->meta_description }}">
<meta name="keywords" content="{{ $service->meta_keywords }}">
@endsection

@section('content')
 <!-- Page Header Start -->
<div class="container-fluid page-header mt-6 mb-5 p-0"
     style="background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 50%, #084298 100%);">

    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                الخــدمات
            </h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('services.index') }}">Services</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        {{ $service->title }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>

</div>
<!-- Page Header End -->
<main class="main " dir="rtl">

<main class="main " dir="rtl">

    <!-- Title -->
    <div class="page-title">
        <div class="container">
            <h1>{{ $service->title }}</h1>
        </div>
    </div>

    <!-- Content -->
    <section class="section">
        <div class="container">

            <div class="row">

                <!-- Image -->
                <div class="col-lg-5 mb-4">

                    <img src="{{ asset('uploads/' . $service->image) }}"
                         class="img-fluid rounded"
                         alt="{{ $service->title }}">

                </div>

                <!-- Details -->
                <div class="col-lg-7">

                    <h3>{{ $service->short_description }}</h3>

                    <hr>

                    <div class="content">
                        {!! $service->description !!}
                    </div>

                    <hr>

                    <p><strong>SEO Description:</strong></p>
                    <p>{{ $service->meta_description }}</p>

                </div>

            </div>

        </div>
    </section>

</main>

@endsection