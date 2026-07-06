@extends('layouts.app')

@section('title', 'الصفحة الرئيسية')

@section('content')

  <main class="main">

<section class="first-hero d-flex align-items-center text-center" dir="rtl">

  <div class="first-hero-overlay"></div>

  <div class="container position-relative">

    <h1 class="first-hero-title fw-bold mb-3">
      شركة الرحمن لخدمات العزل المتكاملة
    </h1>

    <p class="first-hero-text mb-4 fs-5">
       كيان سعودي متخصص يضع معايير جديدة في حماية المباني
    </p>

    <a href="https://wa.me/966551689585" target="_blank" class="whatsapp-btn">
      تواصل عبر واتساب
    </a>

  </div>

</section>
   
<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section" dir="rtl">

  <div class="container text-center mb-5">
    <h2 style="font-weight:700;">شركة الرحمن</h2>
    <p>حيث تلتقي الأمانة بالإتقان</p>
  </div>

  <div class="container">
    <div class="row gy-4 justify-content-center">

      <!-- Item 1 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
        <div class="service-item text-center p-4 w-100">
          <div class="icon mb-3">
            <i class="bi bi-geo-alt"></i>
          </div>
          <h4>خبرة محلية سعودية</h4>
          <p>نفهم تفاصيل المناخ ومتطلبات البناء في المملكة لذلك نضمن لك جودة تليق ببيئتنا.</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item text-center p-4 w-100">
          <div class="icon mb-3">
            <i class="bi bi-shield-check"></i>
          </div>
          <h4>لا يوجد سبيل للمخاطرة</h4>
          <p>نستخدم أجود مواد العزل المطابقة للمواصفات والمقاييس العالمية.</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item text-center p-4 w-100">
          <div class="icon mb-3">
            <i class="bi bi-person-check"></i>
          </div>
          <h4>إشراف مختص</h4>
          <p>كل خطوة في مشروعك تتم تحت أعين هندسية خبيرة لضمان الإتقان.</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
        <div class="service-item text-center p-4 w-100">
          <div class="icon mb-3">
            <i class="bi bi-clock"></i>
          </div>
          <h4>نقدر وقتك</h4>
          <p>نلتزم بإنهاء المشاريع في مواعيدها المحددة دون تأخير.</p>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item text-center p-4 w-100">
          <div class="icon mb-3">
            <i class="bi bi-droplet-half"></i>
          </div>
          <h4>اختبار العزل</h4>
          <p>نطبق اختبار Flood Test تحت إشراف العميل لضمان نجاح العزل 100%.</p>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item text-center p-4 w-100">
          <div class="icon mb-3">
            <i class="bi bi-award"></i>
          </div>
          <h4>ضمان 10 سنوات</h4>
          <p>نمنحك شهادة ضمان موثقة تعكس ثقتنا في جودة أعمالنا.</p>
        </div>
      </div>

    </div>
  </div>

</section>
   

<section class="features section" dir="rtl" id="services">

  <div class="container">

    <div class="text-center mb-5">
      <h2>خدماتنا</h2>
      <p class="text-muted">نقدم مجموعة متكاملة من خدمات العزل</p>
    </div>

    <div class="row g-4">

      @foreach($services as $service)

        <div class="col-md-4 col-sm-6">

          <div class="service-card text-center p-4 shadow-sm rounded h-100">

            <img src="{{ asset('uploads/' . $service->image) }}"
                 class="img-fluid mb-3"
                 style="height:120px; object-fit:contain;">

            <h4 class="mb-2">{{ $service->title }}</h4>

            <div class="text-muted">
              {{ Str::limit($service->description, 90) }}
            </div>

            <a href="{{ route('services.show', $service->slug) }}"
               class="btn btn-primary btn-sm mt-2">
              قراءة المزيد
            </a>

          </div>

        </div>

      @endforeach

    </div>

  </div>

</section>
<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section" dir="rtl">

  <div class="container" data-aos="zoom-out">

    <div class="row g-5 align-items-center">

      <!-- Content -->
      <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">

        <h3>
          عقارك هو استثمارك الحقيقي.. احمه بذكاء مع خبراء شركة الرحمن للعزل
        </h3>

        <p>
          عقارك مش مجرد مبنى.. ده استثمار لازم تحافظ عليه.  
          احمه بذكاء مع خبراء شركة الرحمن للعزل، قبل ما التسربات أو حرارة الشمس تكلفك أضعاف.
          نحن نوفر لك حلول عزل متكاملة تضمن لك راحة بال طويلة الأمد.
        </p>

         <a href="https://wa.me/966551689585" target="_blank" class="whatsapp-btn">
      تواصل عبر واتساب
    </a>

      </div>

      <!-- Image -->
      <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">

        <div class="img">
          <img style="height: 300px"
           src="{{ asset('assets/img/aqar.jpg') }}" alt="شركة الرحمن للعزل" class="img-fluid rounded shadow">
        </div>

      </div>

    </div>

  </div>

</section>

<!-- Onfocus Section -->
<section id="onfocus" class="onfocus section dark-background" dir="rtl">

  <div class="container-fluid p-0" data-aos="fade-up">

    <div class="row g-0">

      <!-- Video -->
      <div class="col-lg-6 video-play position-relative">
        <a href="https://youtube.com/shorts/EO4CEZ1MZ4o?feature=share" class="glightbox pulsating-play-btn"></a>
      </div>

      <!-- Content -->
      <div class="col-lg-6">
        <div class="content d-flex flex-column justify-content-center h-100 p-4">

          <h3>
            نحن في شركة الرحمن نؤمن أن العمل أمانة.. وأفضل إعلان لنا هو بيت آمن وعميل راضٍ
          </h3>

          <p class="fst-italic">
            نلتزم بتقديم حلول عزل هندسية متكاملة تحقق أعلى معايير الجودة والاستدامة داخل المملكة.
          </p>

          <ul>
            <li><i class="bi bi-check-circle"></i> ضمان يصل إلى 10 سنوات على جميع أعمال العزل</li>
            <li><i class="bi bi-check-circle"></i> تنفيذ وفق المواصفات القياسية العالمية</li>
            <li><i class="bi bi-check-circle"></i> اختبار شامل قبل التسليم (Flood Test)</li>
            <li><i class="bi bi-check-circle"></i> متابعة دورية ودعم فني بعد التنفيذ</li>
          </ul>

          <a href="https://wa.me/966551689585" class="read-more align-self-start">
            <span>اطلب معاينة مجانية الآن</span>
            <i class="bi bi-arrow-right"></i>
          </a>

        </div>
      </div>

    </div>

  </div>

</section>
 <!-- Services Section -->
<section id="services" class="services section" dir="rtl">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>كيف نبدأ بحماية منزلك؟</h2>
    <p>
      الغموض مرعب.. ولذلك وضعنا لك رحلة واضحة من البداية حتى الاستلام لتكون على يقين كامل بكل خطوة.
    </p>
  </div>

  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <!-- Step 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 shadow-sm rounded text-center h-100 border-top border-primary">

          <div class="icon mb-3">
            <i class="bi bi-search" style="font-size:40px; color:#0d6efd;"></i>
          </div>

          <h4 style="color:#0d6efd;">المعاينة</h4>

          <p>
            نرسل خبير لفحص الموقع وتحديد نوع التسرب أو المشكلة بدقة واختيار نوع العزل المناسب.
          </p>

        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 shadow-sm rounded text-center h-100 border-top border-primary">

          <div class="icon mb-3">
            <i class="bi bi-clipboard-data" style="font-size:40px; color:#0d6efd;"></i>
          </div>

          <h4 style="color:#0d6efd;">الخطة والحل</h4>

          <p>
            نقدم عرض تفصيلي يوضح الخامات، مدة التنفيذ، والتكلفة بكل شفافية بدون أي مفاجآت.
          </p>

        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 shadow-sm rounded text-center h-100 border-top border-primary">

          <div class="icon mb-3">
            <i class="bi bi-tools" style="font-size:40px; color:#0d6efd;"></i>
          </div>

          <h4 style="color:#0d6efd;">التنفيذ والرقابة</h4>

          <p>
            يبدأ فريق متخصص بتنفيذ الأعمال تحت إشراف هندسي كامل لضمان أعلى جودة ممكنة.
          </p>

        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 shadow-sm rounded text-center h-100 border-top border-primary">

          <div class="icon mb-3">
            <i class="bi bi-check-circle" style="font-size:40px; color:#0d6efd;"></i>
          </div>

          <h4 style="color:#0d6efd;">الاختبار والاستلام</h4>

          <p>
            لا يتم تسليم المشروع إلا بعد اختبار شامل (Flood Test) والتأكد من نجاح العزل 100%.
          </p>

        </div>
      </div>

    </div>

  </div>

</section>

<div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

    @foreach($faqs as $faq)
        <div class="faq-item {{ $loop->first ? 'faq-active' : '' }}">
            <i class="faq-icon bi bi-question-circle"></i>

            <h3>{{ $faq->question }}</h3>

            <div class="faq-content">
                <p>{{ $faq->answer }}</p>
            </div>

            <i class="faq-toggle bi bi-chevron-right"></i>
        </div>
    @endforeach

</div>

        <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    

  </main>

@endsection