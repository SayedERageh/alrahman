<footer id="footer" class="footer dark-background" dir="rtl">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">

        <!-- About -->
    <div class="col-lg-4 col-md-6 footer-about">
  <a href="{{ route('home') }}" class="logo d-flex align-items-center">
    <span class="sitename">شركة الرحمن</span>
  </a>
  <div class="footer-contact pt-3">
    <p>
      شركة الرحمن لخدمات العزل المتكاملة  كيان سعودي متخصص،
      يضع معايير جديدة في حماية المباني من خلال حلول عزل متطورة
      تضمن الجودة والكفاءة والاستدامة.
    </p>


    <p class="mt-3"><strong>رقم التواصل:</strong> <span>966551689585</span></p>
    <p><strong>متاحون لخدمتكم طوال أيام الأسبوع</strong></p>
  </div>
</div>

        <!-- Links -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>روابط سريعة</h4>
          <ul>
  <li><a href="{{ route('home') }}">الرئيسية</a></li>
<li><a href="{{ route('about') }}">من نحن</a></li>
<li><a href="{{ route('services.index') }}">خدماتنا</a></li>
<li><a href="{{ route('contact') }}">تواصل معنا</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>خدماتنا</h4>
          <ul>
    @foreach($services ?? [] as $service)
      <li>
        <a href="{{ route('services.show', $service->slug) }}">
          {{ $service->title }}
        </a>
      </li>
    @endforeach
  </ul>
        </div>

        <!-- CTA -->
        <div class="col-lg-4 col-md-12 footer-links">
          <h4>احجز الآن</h4>
          <p>
            احجز معاينة الآن واحصل على أفضل حلول العزل بأعلى جودة .
          </p>
          <a href="tel:+966551689585" class="btn btn-primary mt-2">اتصل الآن</a>
        </div>

      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="copyright text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">

      <div>
        © جميع الحقوق محفوظة <strong><span>شركة الرحمن</span></strong>
      </div>

      <!-- Social -->
      <div class="social-links mt-3 mt-lg-0">
        <a href="https://www.instagram.com/al_rahman.co" target="_blank">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@al_rahman.co" target="_blank">
          <i class="bi bi-tiktok"></i>
        </a>
        <a href="https://x.com/AlRahman_Co" target="_blank">
          <i class="bi bi-twitter-x"></i>
        </a>
      </div>

    </div>
  </div>

</footer>