<section id="contact">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Contact</h3>
      <p class="section-description">We are looking forward to grow your business with technology. If you have any question regarding your business, don’t hesitate to tell us!</p>
    </div>
  </div>
  <!-- Uncomment below if you wan to use dynamic maps -->
  <iframe src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=-6.239617873536601,106.81500971317291&q=Gedung%20GMT%2C%20Jl.%20Wijaya%20I%20No.5%2C%20RT.7%2FRW.4%2C%20Petogogan%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012170+(PT%20Asta%20Multimedia%20Tamausiness%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

  <div class="container wow fadeInUp mt-5">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info" style="font-family:'Product Sans';">
          <div>
            <i class="fa fa-map-marker"></i>
            <p>Gedung GMT Lt 4<br>Jl. Wijaya I No.5, RT 7/RW 4<br> Petogogan, Kebayoran Baru<br>Jakarta Selatan, 12170</p>
          </div>

          <div>
            <i class="fa fa-envelope"></i>
            <p>asta.multimediatama@gmail.com</p>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p>(021) 27513131</p>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
        </div>

      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="{{route('pesan.save')}}" method="POST" role="form" class="contactForm">
            @csrf
            <div class="form-group">
              <input type="text" name="pengirim" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="judul" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
