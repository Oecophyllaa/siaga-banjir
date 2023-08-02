@extends('layouts.front')

@section('content')
  <!-- Hero -->
  <header class="masthead text-center text-white" id="home">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/800x325?flood" class="d-block w-100" alt="#">
          <div class="carousel-caption d-none d-md-flex flex-column">
            <h5 class="text-secondary-emphasis">25 Juni 2023</h5>
            <h1 class="display-4">Pembuatan Website Siaga Banjir</h1>
            <p>Mahasiswa Politeknik Negeri Jember melakukan pembuatan website Siaga Banjir di Kelurahan Tambakkemerakan</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/800x326?flood" class="d-block w-100" alt="#">
          <div class="carousel-caption d-none d-md-flex flex-column">
            <h5 class="text-secondary-emphasis">25 Juni 2023</h5>
            <h1 class="display-4">Pembuatan Website Siaga Banjir</h1>
            <p>Mahasiswa Politeknik Negeri Jember melakukan pembuatan website Siaga Banjir di Kelurahan Tambakkemerakan</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/800x327?flood" class="d-block w-100" alt="#">
          <div class="carousel-caption d-none d-md-flex flex-column">
            <h5 class="text-secondary-emphasis">25 Juni 2023</h5>
            <h1 class="display-4">Pembuatan Website Siaga Banjir</h1>
            <p>Mahasiswa Politeknik Negeri Jember melakukan pembuatan website Siaga Banjir di Kelurahan Tambakkemerakan</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  <!-- EndHero -->

  <!-- Maps -->
  <section class="page-section" id="maps">
    <div class="container">
      <h2 class="page-section-heading text-uppercase text-secondary mb-5 text-center">Peta</h2>
      <div class="row justify-content-center">
        <div id="map" style="height: 65vh"></div>
      </div>
    </div>
  </section>

  <!-- Infografik -->
  <section class="page-section portfolio" id="news">
    <div class="container">
      <!-- Infografik Section Heading-->
      <h2 class="page-section-heading text-uppercase text-secondary mb-0 text-center">Infografis</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Infografik Grid Items-->
      <div class="row justify-content-center">
        <!-- Infografik Item 1-->
        @forelse ($infographics as $key => $infografik)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#infografikModal" data-title="{{ $infografik->title }}"
              data-img-url="{{ $infografik->thumbnail }}">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid" src="{{ $infografik->thumbnail }}" alt="news-img-1" />
            </div>
          </div>
        @empty
          <div class="col-12 mb-5">
            <h1 class="display-4 text-nowrap text-center">Infografis tidak tersedia</h1>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- About Section-->
  <section class="page-section bg-primary mb-0 text-white" id="about">
    <div class="container">
      <!-- About Section Heading-->
      <h2 class="page-section-heading text-uppercase text-center text-white">Tentang</h2>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- About Section Content-->
      <div class="row text-justify">
        <div class="col-lg-4 ms-auto">
          <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files
            including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4 me-auto">
          <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to
            the contact form to make it fully functional!</p>
        </div>
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

<!-- modals - infografik -->
@push('before-script')
  <!-- Infografik Modals-->
  <!-- Infografik Modal 1-->
  @foreach ($infographics as $infografik)
    <div class="portfolio-modal modal fade" id="infografikModal" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body pb-5 text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Infografik</h2>
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image-->
                  <img class="img-fluid mb-5 rounded infografik-img" src="#" alt="foto-infografik" />
                  <!-- Portfolio Modal - Text-->
                  <p class="mb-4 infografik-title"></p>
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
  @endforeach
@endpush

@push('after-script')
  <script>
    $('#infografikModal').on('show.bs.modal', function(e) {
      var button = $(e.relatedTarget);
      var modal = $(this);

      modal.find('.infografik-img').attr('src', button.data('img-url'));
      modal.find('.infografik-title').html(button.data('title'));
    });
  </script>
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

    const sensor1 = "<b>Pos 15</b> <br />" +
      "Luapan air: " + Math.floor(Math.random() * 30) + " cm <br />" +
      "Status: " + "Siaga <br />" +
      "Sensor: Aktif";

    const sensor2 = "<b>Pos 17</b> <br />" +
      "Luapan air: " + Math.floor(Math.random() * 30) + " cm <br />" +
      "Status: " + "Siaga <br />" +
      "Sensor: Nonaktif";

    const markerX = L.marker([-7.4005546571160705, 112.5789206127241]).addTo(map)
      .bindPopup(sensor1)
      .openPopup();

    const markerY = L.marker([-7.402802054057466, 112.58622149464613]).addTo(map)
      .bindPopup(sensor2)
      .openPopup();
  </script>
@endpush
