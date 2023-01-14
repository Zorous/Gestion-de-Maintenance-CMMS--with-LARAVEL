@extends('landing-layout')

@section('content')
     <!-- PROJECT -->
     <section class="project section-padding" id="project">
        <div class="container-fluid">
             <div class="row">

                  <div class="col-lg-12 col-12">

                      <h2 class="mb-5 text-center" data-aos="fade-up">
                          Please take a look through our
                          <strong>featured Digital Trends</strong>
                      </h2>

                       <div class="owl-carousel owl-theme" id="project-slide">
                            <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                 <img src="{{url('/assets/images/project/project-image01.jpg')}}" class="img-fluid" alt="project image">

                                 <div class="project-info">
                                      <small>Marketing</small>

                                      <h3>
                                           <a href="project-detail.html">
                                                <span>Sweet Go Agency</span>
                                                <i class="fa fa-angle-right project-icon"></i>
                                           </a>
                                      </h3>
                                 </div>
                            </div>

                            <div class="item project-wrapper" data-aos="fade-up">
                                 <img src="{{url('/assets/images/project/project-image02.jpg')}}" class="img-fluid" alt="project image">

                                 <div class="project-info">
                                      <small>Website</small>

                                      <h3>
                                           <a href="project-detail.html">
                                                <span>Smart Ladies</span>
                                                <i class="fa fa-angle-right project-icon"></i>
                                           </a>
                                      </h3>
                                 </div>
                            </div>

                            <div class="item project-wrapper" data-aos="fade-up">
                                 <img src="{{url('images/project/project-image03.jpg')}}" class="img-fluid" alt="project image">

                                 <div class="project-info">
                                      <small>Branding</small>

                                      <h3>
                                           <a href="project-detail.html">
                                                <span>Shoes factory</span>
                                                <i class="fa fa-angle-right project-icon"></i>
                                           </a>
                                      </h3>
                                 </div>
                            </div>

                            <div class="item project-wrapper" data-aos="fade-up">
                                 <img src="{{url('images/project/project-image04.jpg')}}" class="img-fluid" alt="project image">

                                 <div class="project-info">
                                      <small>Social Media</small>

                                      <h3>
                                           <a href="project-detail.html">
                                                <span>Race Bicycle</span>
                                                <i class="fa fa-angle-right project-icon"></i>
                                           </a>
                                      </h3>
                                 </div>
                            </div>

                            <div class="item project-wrapper" data-aos="fade-up">
                                 <img src="{{url('/assets/images/project/project-image05.jpg')}}" class="img-fluid" alt="project image">

                                 <div class="project-info">
                                      <small>Video</small>

                                      <h3>
                                           <a href="project-detail.html">
                                                <span>Ultimate HealthCare</span>
                                                <i class="fa fa-angle-right project-icon"></i>
                                           </a>
                                      </h3>
                                 </div>
                            </div>
                       </div>
                  </div>

             </div>
        </div>
   </section>
@endsection
