@extends('layouts.front')

@section('content')
  <!-- Hero -->
  <header class="masthead text-center text-white" id="home">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/800x325?white" class="img-fluid w-100" alt="first-slider-img">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/800x326?white" class="d-block w-100" alt="second-slider-img">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/800x327?white" class="d-block w-100" alt="third-slider-img">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  <!-- EndHero -->

  <!-- Maps -->
  <section class="page-section" id="maps">
    <div class="container">
      <h2 class="page-section-heading text-uppercase text-secondary mb-5 text-center">Maps</h2>
      <div class="row justify-content-center">
        <div id="map" style="height: 65vh"></div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section-->
  <section class="page-section portfolio" id="news">
    <div class="container">
      <!-- Portfolio Section Heading-->
      <h2 class="page-section-heading text-uppercase text-secondary mb-0 text-center">Berita</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Portfolio Grid Items-->
      <div class="row justify-content-center">
        <!-- Portfolio Item 1-->
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{ asset('front/img/portfolio/cabin.png') }}" alt="news-img-1" />
          </div>
        </div>
        <!-- Portfolio Item 2-->
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{ asset('front/img/portfolio/cake.png') }}" alt="news-img-2" />
          </div>
        </div>
        <!-- Portfolio Item 3-->
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="img-fluid" src="{{ asset('front/img/portfolio/circus.png') }}" alt="news-img-3" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section-->
  <section class="page-section bg-primary mb-0 text-white" id="about">
    <div class="container">
      <!-- About Section Heading-->
      <h2 class="page-section-heading text-uppercase text-center text-white">About</h2>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- About Section Content-->
      <div class="row">
        <div class="col-lg-4 ms-auto">
          <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files
            including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4 me-auto">
          <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to
            the contact form to make it fully functional!</p>
        </div>
      </div>
      <!-- About Section Button-->
      <div class="mt-4 text-center">
        <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
          <i class="fas fa-download me-2"></i>
          Free Download!
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section-->
  <section class="page-section" id="contact">
    <div class="container">
      <!-- Contact Section Heading-->
      <h2 class="page-section-heading text-uppercase text-secondary mb-0 text-center">Contact Me</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Contact Section Form-->
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
          <!-- * * * * * * * * * * * * * * *-->
          <!-- * * SB Forms Contact Form * *-->
          <!-- * * * * * * * * * * * * * * *-->
          <!-- This form is pre-integrated with SB Forms.-->
          <!-- To make this form functional, sign up at-->
          <!-- https://startbootstrap.com/solution/contact-forms-->
          <!-- to get an API token!-->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <!-- Name input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
              <label for="name">Full name</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
              <label for="email">Email address</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
              <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
              <label for="phone">Phone number</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>
            <!-- Message input-->
            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"
                data-sb-validations="required"></textarea>
              <label for="message">Message</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
              <div class="mb-3 text-center">
                <div class="fw-bolder">Form submission successful!</div>
                To activate this form, sign up at
                <br />
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
              </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-danger mb-3 text-center">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('before-script')
  <!-- Portfolio Modals-->
  <!-- Portfolio Modal 1-->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body pb-5 text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid mb-5 rounded" src="assets/img/portfolio/cabin.png" alt="..." />
                <!-- Portfolio Modal - Text-->
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam,
                  recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">
                  <i class="fas fa-xmark fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 2-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body pb-5 text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid mb-5 rounded" src="assets/img/portfolio/cake.png" alt="..." />
                <!-- Portfolio Modal - Text-->
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam,
                  recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">
                  <i class="fas fa-xmark fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 3-->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body pb-5 text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid mb-5 rounded" src="assets/img/portfolio/circus.png" alt="..." />
                <!-- Portfolio Modal - Text-->
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam,
                  recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">
                  <i class="fas fa-xmark fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 4-->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body pb-5 text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid mb-5 rounded" src="assets/img/portfolio/game.png" alt="..." />
                <!-- Portfolio Modal - Text-->
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam,
                  recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">
                  <i class="fas fa-xmark fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 5-->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body pb-5 text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid mb-5 rounded" src="assets/img/portfolio/safe.png" alt="..." />
                <!-- Portfolio Modal - Text-->
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam,
                  recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">
                  <i class="fas fa-xmark fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 6-->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body pb-5 text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title-->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image-->
                <img class="img-fluid mb-5 rounded" src="assets/img/portfolio/submarine.png" alt="..." />
                <!-- Portfolio Modal - Text-->
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam,
                  recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" data-bs-dismiss="modal">
                  <i class="fas fa-xmark fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endpush

<!-- Paho MQTT Connections -->
@push('after-script')
  <script>
    // Create a client instance
    var client = new Paho.Client("test.mosquitto.org", Number(8081), "RPI_" + parseInt(Math.random() * 100, 10));

    // set callback handlers
    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;

    // connect the client
    client.connect({
      onSuccess: onConnect
    });

    // called when the client connects
    function onConnect() {
      // Once a connection has been made, make a subscription and send a message.
      console.log("onConnect");

      client.subscribe("mqtt/water-level");

      message = new Paho.Message("OK");
      message.destinationName = "mqtt/web";
      client.send(message);
    }

    // called when the client loses its connection
    function onConnectionLost(responseObject) {
      if (responseObject.errorCode !== 0) {
        console.log("onConnectionLost:" + responseObject.errorMessage);
      }
    }

    // called when a message arrives
    function onMessageArrived(message) {
      if (message.destinationName == "mqtt/test") {
        // document.getElementById("status").innerHTML = message.payloadString;
        // console.log("onMessageArrived:" + message.payloadString);
      }

      if (message.destinationName == "mqtt/water-level") {
        // document.getElementById("water-level").innerHTML = Math.round(message.payloadString);
        console.log("onMessageArrived:" + Math.round(message.payloadString));
      }
    }
  </script>
@endpush

<!-- Leaflet Configs -->
@push('after-script')
  <script src="{{ asset('front/locations/data.js') }}"></script>
  <script>
    let map = L.map('map').setView([-7.400538, 112.578910], 17);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 20,
    }).addTo(map);

    L.geoJSON(location1).addTo(map);

    const popups = "<b>Pos 15</b> <br />" +
      "Ketinggian air: " + Math.floor(Math.random() * 155) + " cm <br />" +
      "Status: " + "siaga";

    const markerx = L.marker([-7.4005546571160705, 112.5789206127241]).addTo(map)
      .bindPopup(popups)
      .openPopup();
  </script>
@endpush
