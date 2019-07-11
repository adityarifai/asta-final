<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Asta Multimedia Tama | Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="icon">
  <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="apple-touch-icon">
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('regna/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('regna/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugin/slick/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugin/slick/slick/slick-theme.css') }}">
</head>
<body id="page-service">
  @include('partials.nav')
  <main>
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <h1><b>Layanan Spesial Dan Terbaik Dari Kami</b></h1>
          </div>
          <div class="col-12 col-md-6 mt-5 mt-md-0">
            <div class="outerservice">
              <div>
                <i class="far fa-handshake"></i>
                <p>MICE</p>
                <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
              </div>
              <div>
                <i class="fas fa-plane"></i>
                <p>TRAVEL</p>
                <p>Outbond - Travel Ecotourism and Adventure</p>
              </div>
              <div>
                <i class="fas fa-box-open"></i>
                <p>PRODUCT LAUNCHING</p>
                <p>Launching a new product can be an exciting time for any company</p>
              </div>
              <div>
                <i class="fab fa-artstation"></i>
                <p>MULTIMEDIA</p>
                <p>Record, Photograph, Film, Graphic Design and Printing</p>
              </div>
              <div>
                <i class="fas fa-project-diagram"></i>
                <p>IT SOLUTION</p>
                <p>IT Solution and Multimedia Communication</p>
              </div>
              <div>
                <i class="fas fa-poll"></i>
                <p>ADVERTISING</p>
                <p>Public marketing communications that are openly sponsored to promote or sell products, services, or ideas</p>
              </div>
              <div><i></i><p></p><p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="background-color: #E5E5E5;" id="product">
    <div class="container">
      <h1><b>Beberapa Project Dari Asta</b></h1>
      <div class="row" style="margin-top: 50px;">
        @foreach($produks as $prd)
        <div style="background-color: white;border-radius: 15px;border: 4px solid #d6d6d6;" class="col-12">
          <figure style="margin-bottom: 3rem;margin-top: 3rem;">
            <img style="border-radius: 3px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-left: 0px;padding-right: 0px;margin-left: 15px;margin-right: 15px;" src='{{asset('picture_product/'.$prd->picture)}}' class="col-md-4" height="200" alt="Our Product">
            <figcaption class="col">
              <p class="mb-2">{{ $prd->produk }}</p>
              <p>
                {{ $prd->detail }}
              </p>
              <button type="button" class="btn btn-info show-modal text-capitalize" data-toggle="modal" data-target="#product_self{{ $prd->id }}">
                view detail
              </button>
              <div class="modal fade" id="product_self{{ $prd->id }}" tabindex="-1" role="dialog" aria-labelledby="product__self{{ $prd->id }}Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $prd->produk }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src='{{asset('picture_product/'.$prd->picture)}}' height="200" alt="Our Product">
                      <p class="my-3">About This Product</p>
                      <p>{{ $prd->detail }}</p>
                      <p>Created On <time class="text-success font-weight-bold">{{ $prd->tanggal }}</time></p>
                      <p class="mb-0">Type : <span class="badge badge-primary mr-2">{{ $prd->teknologi }}</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </figcaption>
          </figure>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @include('partials.contact')
</main>
@include('partials.footer')
<script src="{{ asset('js/jquery.js') }}" charset="utf-8"></script>
<script src="{{ asset('plugin/slick/slick/slick.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('regna/lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('regna/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('regna/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('regna/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{ asset('regna/lib/superfish/superfish.min.js')}}"></script>
<script src="{{ asset('regna/contactform/contactform.js')}}"></script>
<script src="https://kit.fontawesome.com/8e654f3295.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
$(document).ready(function() {
  ScrollReveal().reveal("#product .row .col-12:nth-child(odd)", {
    reset: true,
    interval: 300,
    mobile: false,
    origin: 'left'
  });
  ScrollReveal().reveal("#product .row .col-12:nth-child(even)", {
    reset: true,
    mobile: false,
    interval: 300,
    origin: 'right'
  });
  $(".outerservice").slick({
    slidesToShow: 2,
    infinite: false,
    responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });
});
</script>
<script src="{{ asset('regna/js/main.js')}}"></script>
</body>
</html>