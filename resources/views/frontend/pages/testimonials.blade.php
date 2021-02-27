@extends('frontend.master')
@section('content')
<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Testimonials</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="page_content">
  <div class="container">
    <div class="testimonials">
      <ul class="testi_list row">
      @foreach($testimonials as $testimonial)
        <li class="col-lg-6 col-md-6">
          <div class="testimonials_sec">
            <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
            <div class="client_box">
              <div class="clientImg"><img alt="" src="{{URL::to('uploads', $testimonial->testimonial_img)}}"></div>
              <h3>{{$testimonial->name}}</h3>
            </div>
            <p>{{$testimonial->description}}</p>
          </div>
        </li>
      @endforeach  
      </ul>
      <div class="blog-pagination text-center"> <a href="#0"><i class="fas fa-angle-left"></i></a> <a href="#0">01</a> <a href="#0" class="active">02</a> <a href="#0">03</a> <a href="#0"><i class="fas fa-angle-right"></i></a> </div>
    </div>
  </div>
</div>
<!-- Inner Content End -->
@endsection