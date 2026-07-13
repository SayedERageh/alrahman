@extends('layouts.app')

@section('title',  $service->title)

@section('meta')
<meta name="description" content="{{ $service->meta_description }}">
<meta name="keywords" content="{{ $service->meta_keywords }}">
@endsection

@section('content')
 <!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
    <div class="container page-header-inner text-center">

        <h1 class="display-3 text-white fw-bold mb-3 animated slideInDown">
            {{ $service->title }}
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">

                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">الرئيسية</a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ route('services.index') }}">الخدمات</a>
                </li>

                <li class="breadcrumb-item active text-white" aria-current="page">
                    {{ \Illuminate\Support\Str::limit($service->title, 40) }}
                </li>

            </ol>
        </nav>

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