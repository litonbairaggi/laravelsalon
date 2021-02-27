@extends('frontend.master')
@section('content')
<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Blog</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Blog Start -->
<div class="blog-wrap blogWrp">
  <div class="container">
    <div class="row">
    @foreach($blogs as $blog)
      <div class="col-lg-6">
        <div class="blogImg"><img alt="" src="{{URL::to('uploads', $blog->blog_img)}}"></div>
        <div class="blog_sec">
          <h3><a href="blog_details.html">{{$blog->name}}</a></h3>
          <div class="blog_date">Feb 27, 2021</div>
        </div>
      </div>
    @endforeach  
    </div>
    <div class="blog-pagination text-center"> <a href="#0"><i class="fas fa-angle-left"></i></a> <a href="#0">01</a> <a href="#0" class="active">02</a> <a href="#0">03</a> <a href="#0"><i class="fas fa-angle-right"></i></a> </div>
  </div>
</div>
<!-- Blog End --> 

<!-- Appointment Start -->
<div class="appointment-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h3>Donec egestas auctor arcu tincidunt.</h3>
      </div>
      <div class="col-lg-4">
        <div class="readmore"><a href="#">Book An Appointment</a></div>
      </div>
    </div>
  </div>
</div>
<!-- Appointment Start -->
@endsection