@extends('frontend.master')
@section('content')

<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Gallery</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="page_content">
  <div class="container">
    <div class="galley_inner">
      <div class="row">
      @foreach($gallerys as $gallery)
        <div class="col-lg-3 col-md-6">
          <div class="galleryImg"><img src="{{URL::to('uploads',$gallery->gallery_img)}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{URL::to('uploads',$gallery->gallery_img)}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
      <div class="blog-pagination text-center"> <a href="#0"><i class="fas fa-angle-left"></i></a> <a href="#0">01</a> <a href="#0" class="active">02</a> <a href="#0">03</a> <a href="#0"><i class="fas fa-angle-right"></i></a> </div>
    </div>
  </div>
</div>
<!-- Inner Content End -->

@endsection