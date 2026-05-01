<!-- Contact Section -->
<section id="contact" class="contact section" dir="rtl">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>تواصل معنا</h2>
    <p>نحن في شركة الرحمن جاهزون لخدمتك في أي وقت، تواصل معنا الآن واحصل على أفضل حلول العزل</p>
  </div>

  <!-- Google Map - الرياض -->
  <div class="mb-5">
    <iframe 
      style="width: 100%; height: 400px;"
      src="https://maps.google.com/maps?q=Riyadh%20Saudi%20Arabia&t=&z=13&ie=UTF8&iwloc=&output=embed"
      frameborder="0" 
      allowfullscreen="">
    </iframe>
  </div>

  <div class="container" data-aos="fade">

    <div class="row gy-5 gx-lg-5">

      <!-- بيانات الشركة -->
      <div class="col-lg-4">

        <div class="info">
          <h3>تواصل مباشر</h3>
          <p>
            شركة الرحمن متخصصة في جميع أعمال العزل (أسطح - خزانات - فوم - إيبوكسي)
            بأعلى جودة وضمان يصل إلى 10 سنوات.
          </p>

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>الموقع:</h4>
              <p>الرياض - المملكة العربية السعودية</p>
            </div>
          </div>

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>البريد الإلكتروني:</h4>
              <p>info@alrahman.com</p>
            </div>
          </div>

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>رقم التواصل:</h4>
              <p dir="ltr">+966551689585</p>
            </div>
          </div>

        </div>

      </div>

      <!-- الفورم -->
      <div class="col-lg-8">
       <form action="{{ route('contact.store') }}" method="POST">

  @csrf

  <div class="row">

    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" placeholder="الاسم" required>
    </div>

    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" required>
    </div>

  </div>

  <div class="form-group mt-3">
    <textarea name="message" class="form-control" rows="5" placeholder="اكتب مشكلتك..." required></textarea>
  </div>

  <div class="text-center mt-3">
    <button type="submit" class="btn btn-primary">
      إرسال الطلب
    </button>
  </div>

</form>
      </div>

    </div>

  </div>

</section>