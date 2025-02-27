@include('layouts/header')
    <main>
      <!-- slider Area Start-->
      <div class="slider-area">
        <!-- Mobile Menu -->
        <div class="slider-active">
          <div
            class="single-slider slider-height d-flex align-items-center"
            data-background="{{asset('assets/img/hero/h1_hero.jpg')}}"
          >
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-9 col-md-10">
                  <div class="hero__caption">
                    <h1>Find the most exciting startup jobs</h1>
                  </div>
                </div>
              </div>
              <!-- Search Box -->
              <div class="row">
                <div class="col-xl-8">
                  <!-- form -->
                  {{-- <form action="#" class="search-box">
                    <div class="input-form">
                      <input type="text" placeholder="Job Tittle or keyword" />
                    </div>
                    <div class="search-form">
                      <button>Find job</button>
                    </div>
                  </form> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider Area End-->
      <!-- Our Services Start -->
      <div class="our-services section-pad-t30">
        <div class="container">
          <!-- Section Tittle -->
          <div class="row">
            <div class="col-lg-12">
              <div class="section-tittle text-center">
                <span>FEATURED TOURS Packages</span>
                <h2>Browse Top Categories</h2>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-contnet-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-tour"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Design & Creative</a></h5>
                  <span>(653)</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-cms"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Design & Development</a></h5>
                  <span>(658)</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-report"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Sales & Marketing</a></h5>
                  <span>(658)</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-app"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Mobile Application</a></h5>
                  <span>(658)</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-helmet"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Construction</a></h5>
                  <span>(658)</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-high-tech"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Information Technology</a></h5>
                  <span>(658)</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-real-estate"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Real Estate</a></h5>
                  <span>(658)</span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-content"></span>
                </div>
                <div class="services-cap">
                  <h5><a href="">Content Writer</a></h5>
                  <span>(658)</span>
                </div>
              </div>
            </div>
          </div>
          <!-- More Btn -->
          <!-- Section Button -->
          <div class="row">
            <div class="col-lg-12">
              {{-- <div class="browse-btn2 text-center mt-50">
                <a href="{{ url('/job') }}" class="border-btn2"
                  >Browse All Sectors</a
                >
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <!-- Our Services End -->

      <!-- How  Apply Process Start-->
      <div
        class="apply-process-area apply-bg pt-150 pb-150"
        data-background="{{asset('assets/img/gallery/how-applybg.png')}}"
      >
        <div class="container">
          <!-- Section Tittle -->
          <div class="row">
            <div class="col-lg-12">
              <div class="section-tittle white-text text-center">
                <span>Apply process</span>
                <h2>How it works</h2>
              </div>
            </div>
          </div>
          <!-- Apply Process Caption -->
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-process text-center mb-30">
                <div class="process-ion">
                  <span class="flaticon-search"></span>
                </div>
                <div class="process-cap">
                  <h5>1. Search a job</h5>
                  <p>
                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                    tempor incididunt ut laborea.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-process text-center mb-30">
                <div class="process-ion">
                  <span class="flaticon-curriculum-vitae"></span>
                </div>
                <div class="process-cap">
                  <h5>2. Apply for job</h5>
                  <p>
                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                    tempor incididunt ut laborea.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-process text-center mb-30">
                <div class="process-ion">
                  <span class="flaticon-tour"></span>
                </div>
                <div class="process-cap">
                  <h5>3. Get your job</h5>
                  <p>
                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                    tempor incididunt ut laborea.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- How  Apply Process End-->
      <!-- Testimonial Start -->
      <div class="testimonial-area testimonial-padding">
        <div class="container">
          <!-- Testimonial contents -->
          <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
              <div class="h1-testimonial-active dot-style">
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <!-- Testimonial Content -->
                  <div class="testimonial-caption">
                    <!-- founder -->
                    <div class="testimonial-founder">
                      <div class="founder-img mb-30">
                        <img
                          src="{{asset('assets/img/testmonial/testimonial-founder.png')}}"
                          alt=""
                        />
                        <span>Margaret Lawson</span>
                        <p>Creative Director</p>
                      </div>
                    </div>
                    <div class="testimonial-top-cap">
                      <p>
                        “I am at an age where I just want to be fit and healthy
                        our bodies are our responsibility! So start caring for
                        your body and it will care for you. Eat clean it will
                        care for you and workout hard.”
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <!-- Testimonial Content -->
                  <div class="testimonial-caption">
                    <!-- founder -->
                    <div class="testimonial-founder">
                      <div class="founder-img mb-30">
                        <img
                          src="{{asset('assets/img/testmonial/testimonial-founder.png')}}"
                          alt=""
                        />
                        <span>Margaret Lawson</span>
                        <p>Creative Director</p>
                      </div>
                    </div>
                    <div class="testimonial-top-cap">
                      <p>
                        “I am at an age where I just want to be fit and healthy
                        our bodies are our responsibility! So start caring for
                        your body and it will care for you. Eat clean it will
                        care for you and workout hard.”
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <!-- Testimonial Content -->
                  <div class="testimonial-caption">
                    <!-- founder -->
                    <div class="testimonial-founder">
                      <div class="founder-img mb-30">
                        <img
                          src="{{asset('assets/img/testmonial/testimonial-founder.png')}}"
                          alt=""
                        />
                        <span>Margaret Lawson</span>
                        <p>Creative Director</p>
                      </div>
                    </div>
                    <div class="testimonial-top-cap">
                      <p>
                        “I am at an age where I just want to be fit and healthy
                        our bodies are our responsibility! So start caring for
                        your body and it will care for you. Eat clean it will
                        care for you and workout hard.”
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->
    </main>
@include('layouts/footer')
