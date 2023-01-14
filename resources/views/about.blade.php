@extends('landing-layout')

@section('content')
 <!-- ABOUT -->
 <section class="about section-padding pb-0" id="about">
    <div class="container">
         <div class="row">

              <div class="col-lg-7 mx-auto col-md-10 col-12">
                   <div class="about-info">

                        <h2 class="mb-4" data-aos="fade-up">the best <strong>Maintaining Management System</strong> in Morocco</h2>

                        <p class="mb-0" data-aos="fade-up">Total 5 HTML pages are included in this template from TemplateMo website. Please check 2 <a href="blog.html">blog</a> pages, <a href="project-detail.html">project</a> page, and <a href="contact.html">contact</a> page.
                        <br><br>You are <strong>allowed</strong> to use this template for commercial or non-commercial purpose. You are NOT allowed to redistribute the template ZIP file on template collection websites.</p>
                   </div>

                   <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                    <img src="{{url('/assets/sub-assets/images/office.png')}}" class="img-fluid" alt="office">
                  </div>
              </div>

         </div>
    </div>
</section>


@endsection



@section('title','about')
