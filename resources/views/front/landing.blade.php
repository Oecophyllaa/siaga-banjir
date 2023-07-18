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
  <section class="page-section portfolio" id="portfolio">
    <div class="container">
      <!-- Portfolio Section Heading-->
      <h2 class="page-section-heading text-uppercase text-secondary mb-0 text-center">Portfolio</h2>
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

@push('after-script')
  <script>
    let map = L.map('map').setView([-7.400538, 112.578910], 17);

    let location1 = {
      "type": "FeatureCollection",
      "features": [{
        "type": "Feature",
        "properties": {},
        "geometry": {
          "coordinates": [
            [
              [
                112.58321533242763,
                -7.39445292446213
              ],
              [
                112.58042899320336,
                -7.394630257639265
              ],
              [
                112.5803380558273,
                -7.395604122855421
              ],
              [
                112.5802500928922,
                -7.39577634847722
              ],
              [
                112.57993432850981,
                -7.395899366737359
              ],
              [
                112.57972231528161,
                -7.395838975959391
              ],
              [
                112.57922983977065,
                -7.39760487733572
              ],
              [
                112.5792027742521,
                -7.398090238085665
              ],
              [
                112.57923013879318,
                -7.398249313993526
              ],
              [
                112.57925884611083,
                -7.398336300556522
              ],
              [
                112.57926203581341,
                -7.398622565307712
              ],
              [
                112.57911240327749,
                -7.399067874354695
              ],
              [
                112.57889620279575,
                -7.399456075333317
              ],
              [
                112.57878858304402,
                -7.3999156869390035
              ],
              [
                112.57887002674997,
                -7.400236010589062
              ],
              [
                112.57886450513634,
                -7.400423550396187
              ],
              [
                112.57880376745202,
                -7.400576867551806
              ],
              [
                112.57866848806712,
                -7.400665846231985
              ],
              [
                112.57880100665223,
                -7.401915652580905
              ],
              [
                112.57884794031396,
                -7.402164792082124
              ],
              [
                112.57890039558421,
                -7.402319477534975
              ],
              [
                112.57906880461813,
                -7.402448153880485
              ],
              [
                112.57939043824125,
                -7.402541238872933
              ],
              [
                112.57970516987349,
                -7.40279037802765
              ],
              [
                112.58022558136948,
                -7.403510416759755
              ],
              [
                112.58120277831931,
                -7.405473101910681
              ],
              [
                112.58156987866438,
                -7.406629670972209
              ],
              [
                112.58202029125466,
                -7.407159980470824
              ],
              [
                112.58208912954022,
                -7.4077600089403175
              ],
              [
                112.58217032609731,
                -7.4082285837649104
              ],
              [
                112.58354051800714,
                -7.408257659992819
              ],
              [
                112.58317513350227,
                -7.408634532440442
              ],
              [
                112.58318935231969,
                -7.409060429666674
              ],
              [
                112.58411253546231,
                -7.409043737699142
              ],
              [
                112.58441476708548,
                -7.409068340613731
              ],
              [
                112.58496428982431,
                -7.4083619247862265
              ],
              [
                112.58534158045457,
                -7.408580773736775
              ],
              [
                112.58543966378936,
                -7.408538072236904
              ],
              [
                112.58567889144777,
                -7.408559422987359
              ],
              [
                112.58760915713894,
                -7.408459130024114
              ],
              [
                112.58800786989717,
                -7.408041603948784
              ],
              [
                112.58844964363131,
                -7.4077600899305605
              ],
              [
                112.58882842074394,
                -7.407679431386435
              ],
              [
                112.58894245259312,
                -7.4076074713002935
              ],
              [
                112.58894165516841,
                -7.407177292080112
              ],
              [
                112.58891841410295,
                -7.4068284376304945
              ],
              [
                112.58883787412724,
                -7.406725637306035
              ],
              [
                112.5886544662635,
                -7.406548504383836
              ],
              [
                112.58846866612174,
                -7.406427516229588
              ],
              [
                112.58865144058184,
                -7.406268891700258
              ],
              [
                112.58920976027075,
                -7.405538905573101
              ],
              [
                112.58895971966871,
                -7.405217897600764
              ],
              [
                112.58769982222633,
                -7.404249821989453
              ],
              [
                112.58800124906551,
                -7.403906624960011
              ],
              [
                112.58812803972168,
                -7.403797497736896
              ],
              [
                112.58857858513228,
                -7.403638551514765
              ],
              [
                112.58855895332792,
                -7.402946160809041
              ],
              [
                112.58815146889451,
                -7.402960394824157
              ],
              [
                112.58774828690294,
                -7.402910714960236
              ],
              [
                112.58736970885874,
                -7.402759191841953
              ],
              [
                112.58635919763073,
                -7.402550100604741
              ],
              [
                112.58627945508213,
                -7.402480512021183
              ],
              [
                112.58625955474531,
                -7.402079193204689
              ],
              [
                112.58622925257656,
                -7.401807955530842
              ],
              [
                112.5862404165337,
                -7.401550160965462
              ],
              [
                112.58629084646459,
                -7.401321034511185
              ],
              [
                112.58638813237529,
                -7.4011019879785245
              ],
              [
                112.58660423468866,
                -7.400852891605983
              ],
              [
                112.58665925704719,
                -7.400769859452562
              ],
              [
                112.58538446286944,
                -7.400620149776613
              ],
              [
                112.58468770769755,
                -7.4005282318745085
              ],
              [
                112.58453894227489,
                -7.400021290075674
              ],
              [
                112.58385948816249,
                -7.397069798773317
              ],
              [
                112.58357865318536,
                -7.39581984314663
              ],
              [
                112.5834232789568,
                -7.395251998848438
              ],
              [
                112.58328045132664,
                -7.394727998643065
              ],
              [
                112.58321533242763,
                -7.39445292446213
              ]
            ]
          ],
          "type": "Polygon"
        }
      }]
    }

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 20,
    }).addTo(map);

    L.geoJSON(location1).addTo(map);
  </script>
@endpush
