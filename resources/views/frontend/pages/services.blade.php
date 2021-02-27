@extends('frontend.master')
@section('content')

<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Services</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="page_content">
  <div class="container">
    <div class="service-wrap">
      <div class="row service_box">
      @foreach($servicess as $services)
        <div class="col-lg-4">
          <div class="serviceImg"><img alt="" src="{{URL::to('uploads', $services->services_img)}}"></div>
          <h3><a href="services_details.html">{{$services->name}} <span>{{$services->description}}</span></a></h3>
        </div>
@endforeach
      </div>
    </div>
  </div>
</div>
<!-- Inner Content End --> 

@endsection