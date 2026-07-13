@extends('layouts.app')

@section('title', 'الصفحة الرئيسية')

@section('content')
 <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">من نحن</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('contact') }}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">about</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<!-- About Section -->
<section id="about" class="about-simple py-5" dir="rtl">
    <div class="container">
        <div class="row align-items-center g-5">

 
            <!-- Content -->
            <div class="col-lg-6">

                <h2 class="about-title">
                    شركة الرحمن للعزل
                </h2>

                <p class="about-text">
                    شركة متخصصة في أعمال عزل الأسطح والخزانات والحمامات، نقدم حلول عزل
                    احترافية باستخدام أحدث المواد والتقنيات لضمان حماية المباني من
                    تسربات المياه ودرجات الحرارة العالية، مع الالتزام بأعلى معايير
                    الجودة والاحترافية.
                </p>

                <p class="about-text">
                    نسعى إلى تقديم أفضل خدمة لعملائنا من خلال فريق عمل متخصص وخبرة
                    طويلة في تنفيذ جميع مشاريع العزل داخل المملكة، مع ضمان حقيقي على
                    جميع الأعمال.
                </p>

            </div>

                       <!-- Image -->
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/faq.jpg') }}"
                     class="img-fluid rounded-4 shadow"
                     alt="شركة الرحمن للعزل">
            </div>

        </div>
    </div>
</section>


<section class="section bg-light text-center">

  <div class="container">
    <div class="row g-5 justify-content-center">

      <!-- فلسفتنا -->
      <div class="col-lg-6 col-md-6">
        <div class="circle-wrap">
            <div class="dot"></div>
          <div class="circle-card">
            <div class="icon"><i class="bi bi-lightbulb"></i></div>
            <h4>فلسفتنا</h4>
            <p>
              بدأنا لأننا رأينا الكثير من الوعود والقليل من الإتقان…
              ورأينا بيوت تُبنى بشقاء العمر ثم تعاني بسبب قطرة ماء أو شمس لا ترحم.
            </p>
          </div>
        </div>
      </div>

      <!-- رسالتنا -->
      <div class="col-lg-6 col-md-6">
        <div class="circle-wrap">
            <div class="dot"></div>
          <div class="circle-card">
            <div class="icon"><i class="bi bi-bullseye"></i></div>
            <h4>رسالتنا</h4>
            <p>
              تقديم حلول هندسية ذكية توازن بين كفاءة الأداء وترشيد الاستهلاك
              لنكون الشريك الموثوق في مجال العزل.
            </p>
          </div>
        </div>
      </div>

      <!-- لماذا نحن -->
      <div class="col-lg-6 col-md-6">
        <div class="circle-wrap">
            <div class="dot"></div>
          <div class="circle-card">
            <div class="icon"><i class="bi bi-shield-check"></i></div>
            <h4>لماذا نحن؟</h4>
            <p>
              مواد معتمدة – فريق متخصص – اختبار 100% – ضمان يصل إلى 10 سنوات.
            </p>
          </div>
        </div>
      </div>

      <!-- رؤيتنا -->
      <div class="col-lg-6 col-md-6">
        <div class="circle-wrap">
            <div class="dot"></div>
          <div class="circle-card">
            <div class="icon"><i class="bi bi-eye"></i></div>
            <h4>رؤيتنا</h4>
            <p>
              الأمانة والإتقان أساس عملنا لنكون الخيار الأول في العزل داخل المملكة.
            </p>
            <a href="tel:+966551689585" class="btn btn-primary btn-sm mt-2">
              تواصل معنا
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
<style>
    
.about-simple {
    background: #fff;
}

.about-simple img {
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.about-title {
    color: #18b7c9;
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 25px;
}

.about-text {
    font-size: 20px;
    line-height: 2;
    color: #555;
    margin-bottom: 20px;
}    
    /* Wrapper (الدائرة الخارجية) */
.circle-wrap {
  position: relative;
  width: 350px;
  height: 350px;
  margin: auto;
  border-radius: 50%;
  padding: 10px;
  background: linear-gradient(135deg, #0d6efd, #4dabf7);
}


/* AI Rotating Half Circle */
.circle-wrap::after {
  content: "";
  position: absolute;
  width: 120%;
  height: 120%;
  border-radius: 50%;
  top: -10%;
  left: -10%;

  border: 3px solid transparent;
  border-top: 3px solid #0d6efd;
  border-right: 3px solid #4dabf7;

  animation: rotateCircle 6s linear infinite;
}

/* نقطة صغيرة */
.circle-wrap .dot {
  position: absolute;
  width: 10px;
  height: 10px;
  background: #0d6efd;
  border-radius: 50%;
  top: 10%;
  right: 10%;
  box-shadow: 0 0 10px #0d6efd;
}

/* Animation */
@keyframes rotateCircle {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Glow خفيف */
.circle-wrap::before {
  content: "";
  position: absolute;
  inset: -10px;
  border-radius: 50%;
  background: linear-gradient(135deg, #0d6efd, #4dabf7);
  filter: blur(25px);
  opacity: 0.3;
}

/* الدائرة الداخلية */
.circle-card {
  position: relative;
  z-index: 2;
  width: 100%;
  height: 100%;
  background: #fff;
  border-radius: 50%;
  padding: 40px 30px;
  text-align: center;

  display: flex;
  flex-direction: column;
  justify-content: center;

  box-shadow: inset 0 0 0 2px rgba(13,110,253,0.1);
}

/* أيقونة */
.circle-card .icon {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #0d6efd, #4dabf7);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 28px;
  margin: -70px auto 10px;
  box-shadow: 0 10px 20px rgba(13,110,253,0.4);
}

/.circle-card h4 {
  color: #0d6efd;
  margin-bottom: 12px;
  font-weight: 700;
  font-size: 20px; /* كبرناه */
}

.circle-card p {
  font-size: 15px; /* كان صغير */
  color: #444;
  line-height: 1.8;
  font-weight: 500;
}

/* Hover Animation */
.circle-wrap:hover {
  transform: scale(1.05);
  transition: 0.4s;
}

/* Responsive */
@media (max-width: 768px) {
  .circle-wrap {
    width: 280px;
    height: 280px;
  }
}
</style>

@endsection