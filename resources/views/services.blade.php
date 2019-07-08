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
              <h1>Our Speciality Services</h1>
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
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fas fa-box-open"></i>
                  <p>PRODUCT LAUNCHING</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fab fa-artstation"></i>
                  <p>MULTIMEDIA</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fas fa-project-diagram"></i>
                  <p>IT SOLUTION</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fas fa-poll"></i>
                  <p>ADVERTISING</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section style="background-color: #E5E5E5;" id="product">
        <div class="container">
          <h1>Here Are Some Of Our Highlighted Project</h1>
          <div class="row" style="margin-top: 100px;">
            <div style="background-color: white;" class="col-12">
              <figure>
                <img src="{{ asset('img/product1.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda fuga minima ipsam hic? Quo minus neque nulla vel alias animi et, repellat, consequuntur rerum blanditiis soluta eaque omnis? Impedit, necessitatibus.</p>
                  <button type="button" class="btn btn-info show-modal text-capitalize" data-toggle="modal" data-target="#product__self1">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self1" tabindex="-1" role="dialog" aria-labelledby="product__self1Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Product Name</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product1.jpg') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary mr-2">PHP</span><span class="badge badge-warning mr-2">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product2.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis tempora nesciunt aliquam aperiam eos recusandae repudiandae saepe, quam sed qui.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self2">
                    view detail
                  </button>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product3.png') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt modi ipsa accusamus alias corrupti ipsum quae tempora culpa tempore quos.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self3">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self3" tabindex="-1" role="dialog" aria-labelledby="product__self3Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product3.png') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On: <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary">PHP</span><span class="badge badge-warning">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product4.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorem quia similique nesciunt eaque eius maxime saepe, tempore officia tempora.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self4">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self4" tabindex="-1" role="dialog" aria-labelledby="product__self4Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product4.jpg') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary">PHP</span><span class="badge badge-warning">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product5.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione quas, inventore optio perspiciatis odio eaque nemo illo. Modi, repudiandae.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self5">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self5" tabindex="-1" role="dialog" aria-labelledby="product__self5Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product5.jpg') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary">PHP</span><span class="badge badge-warning">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
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