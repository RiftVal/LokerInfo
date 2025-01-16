@include('layouts/header');
<main>
    <!-- Hero Area Start-->
    <div class="slider-area">
      <div
        class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="{{asset('assets/img/hero/about.jpg')}}"
      >
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2>UI/UX Designer</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End -->

    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-between">
          <!-- Left Content -->
          <div class="col-xl-7 col-lg-8">
            <!-- job single -->
            <div class="single-job-items mb-50">
              <div class="job-items">
                <div class="company-img company-img-details">
                  <a href="#"
                    ><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""
                  /></a>
                </div>
                <div class="job-tittle">
                  <a href="#">
                    <h4>{{ $data->job_name }}</h4>
                  </a>
                  <ul>
                    <li>
                      <i class="fas fa-map-marker-alt"></i>{{ $data->job_location }}
                    </li>
                    <li>${{ $data->job_salary }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- job single End -->

            <div class="job-post-details">
              <div class="post-details1 mb-50">
                <!-- Small Section Tittle -->
                <div class="small-section-tittle">
                  <h4>Job Description</h4>
                </div>
                <p>
                  {{ $data->job_desc }}
                </p>
              </div>
              <div class="post-details2 mb-50">
                <!-- Small Section Tittle -->
                <div class="small-section-tittle">
                  <h4>Required Knowledge, Skills, and Abilities</h4>
                </div>
                <ul>
                  <li>{{ $data->job_require }}</li>
                  <li>
                    Mobile Applicationin iOS/Android/Tizen or other platform
                  </li>
                  <li>Research and code , libraries, APIs and frameworks</li>
                  <li>Strong knowledge on software development life cycle</li>
                  <li>Strong problem solving and debugging skills</li>
                </ul>
              </div>
              <div class="post-details2 mb-50">
                <!-- Small Section Tittle -->
                <div class="small-section-tittle">
                  <h4>Education + Experience</h4>
                </div>
                <ul>
                  <li>3 or more years of professional design experience</li>
                  <li>Direct response email experience</li>
                  <li>Ecommerce website design experience</li>
                  <li>Familiarity with mobile and web apps preferred</li>
                  <li>Experience using Invision a plus</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Right Content -->
          <div class="col-xl-4 col-lg-4">
            <div class="post-details3 mb-50">
              <!-- Small Section Tittle -->
              <div class="small-section-tittle">
                <h4>Job Overview</h4>
              </div>
              <ul>
                <li>Posted date : <span>{{ $data->created_at }}</span></li>
                <li>Location : <span>{{ $data->job_location }}</span></li>
                <li>Job nature : <span>{{ $data->employment_type }}</span></li>
                <li>Exp date : <span>12 Sep 2020</span></li>
              </ul>
              <div class="apply-btn2">
                @if (auth()->check())
                <div class="row">
                 
                  <div class="ml-2"><a href="{{ route('job.applicant', $data->id) }}" class="btn">Apply Now</a></div>
                  <form action="{{ route('favorites.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->check()}}">
                    <input type="hidden" name="job_id" value="{{$data->id}}">
                    <button type="submit" class="btn">Tambah ke Favorit</button>
                </form>
{{--     
                  <div class="ml-2"><a href="" class="btn">Favorite</a></div> --}}
                </div>
                @else
              <div class="row">
                <div class="ml-2"><a href="{{ route('login') }}" class="btn">Apply Now</a></div>
        
           
        
              </div>
                @endif
              </div>
            </div>
            <div class="post-details4 mb-50">
              <!-- Small Section Tittle -->
              <div class="small-section-tittle">
                <h4>Company Information</h4>
              </div>
              <span>Ziggo</span>
              <p>
                {{ $data->job_companiesDesc }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- job post company End -->
  </main>
  @include('layouts/footer')