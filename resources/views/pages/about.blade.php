@extends('layouts.app')

@section('title', 'الصفحة الرئيسية')

@section('content')
<!-- About Section -->
<section id="about" class="about section" dir="rtl">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>من نحن؟</h2>
    <p>
      في الرحمن .. نحن لا نعزل الأسطح فقط، بل نحمي منزلك واستثمارك من أخطر التحديات المناخية.
      نقدم حلول عزل احترافية تضمن لك الراحة والأمان على المدى الطويل.
    </p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">

    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-5">
        <div class="about-img">
          <img src="assets/img/about-portrait.jpg" class="img-fluid" alt="شركة عزل اسطح وخزانات">
        </div>
      </div>

      <div class="col-lg-7">
        <h3 class="pt-0 pt-lg-5">
          شركة الرحمن لخدمات العزل المتكاملة هي كيان سعودي متخصص يضع معايير جديدة في حماية المباني
        </h3>

        <!-- Tabs -->
        <ul class="nav nav-pills mb-3">
          <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">عن الشركة</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">رؤيتنا</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">مميزاتنا</a></li>
        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class="tab-content">

          <!-- Tab 1 -->
          <div class="tab-pane fade show active" id="about-tab1">

            <p class="fst-italic">
              نحن لا نقدم خدمات عزل تقليدية، بل نصمم منظومات حماية متكاملة تضمن استدامة العقار
              وسلامة من فيه وفقًا لأعلى مواصفات كود البناء السعودي.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>عزل أسطح مائي وحراري بأعلى جودة</h4>
            </div>
            <p>
              نحمي منزلك من تسربات المياه وحرارة الشمس مما يطيل عمر المبنى ويقلل تكاليف الصيانة.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>حلول عزل متكاملة للخزانات والحمامات</h4>
            </div>
            <p>
              نضمن لك بيئة صحية وآمنة خالية من الرطوبة والتسربات التي تؤثر على سلامة البناء.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>تقنيات حديثة ومواد معتمدة</h4>
            </div>
            <p>
              نستخدم أحدث المواد والتقنيات المعتمدة لتحقيق أفضل أداء ممكن في جميع مشاريعنا.
            </p>

          </div><!-- End Tab 1 -->

          <!-- Tab 2 -->
          <div class="tab-pane fade" id="about-tab2">

            <p class="fst-italic">
              رؤيتنا أن نكون الخيار الأول في مجال العزل داخل المملكة من خلال تقديم جودة حقيقية
              تبني الثقة مع عملائنا.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>الجودة قبل أي شيء</h4>
            </div>
            <p>
              نركز على تنفيذ كل مشروع بأعلى مستوى من الدقة والاحترافية لضمان نتائج تدوم لسنوات.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>راحة العميل أولويتنا</h4>
            </div>
            <p>
              نحرص على تقديم تجربة مريحة وسلسة بداية من المعاينة وحتى التسليم النهائي.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>تطوير مستمر</h4>
            </div>
            <p>
              نتابع أحدث تقنيات العزل عالميًا لنقدم حلول متطورة تواكب احتياجات السوق.
            </p>

          </div><!-- End Tab 2 -->

          <!-- Tab 3 -->
          <div class="tab-pane fade" id="about-tab3">

            <p class="fst-italic">
              ما يميزنا ليس فقط الخدمة بل النتائج التي يراها عملاؤنا على أرض الواقع.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>خبرة في السوق السعودي</h4>
            </div>
            <p>
              نفهم طبيعة المناخ القاسي ونقدم حلول مناسبة لكل حالة.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>التزام بالمواعيد</h4>
            </div>
            <p>
              ننجز المشاريع في الوقت المحدد دون تأخير مع الحفاظ على أعلى جودة.
            </p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>ضمان يصل إلى 10 سنوات</h4>
            </div>
            <p>
              نقدم ضمان حقيقي يعكس ثقتنا في جودة التنفيذ وراحة عملائنا.
            </p>

          </div><!-- End Tab 3 -->

        </div>

      </div>

    </div>

  </div>

</section><!-- /About Section -->


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

 <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div dir="rtl" class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
          <h1>عزل الأسطح <span>درع الحماية الأقوى</span></h1>

  <p>
    لمبناك يبدأ من اختيارك للشريك الصحيح.<br>
    نقدم حلول عزل هندسية متكاملة تضمن استدامة مبناك وقيمته العقارية<br>
    بضمان حقيقي يصل إلى 10 سنوات.
  </p>
        <div class="d-flex" dir="rtl">
    <a href="tel:+201000000000" class="btn-watch-video d-flex align-items-center">
              <span>اتصل بنا</span>

      <i class="bi bi-telephone"></i>
    </a>
        <a href="#contact" class="btn-get-started scrollto">تواصل معنا الآن</a>

  </div>
      </div>

    </section><!-- /Hero Section -->

@endsection