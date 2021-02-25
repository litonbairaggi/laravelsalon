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
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery01.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery01.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery02.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery02.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery03.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery03.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery04.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery04.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery05.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery05.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery06.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery06.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery07.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery07.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery08.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery08.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery01.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery01.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery02.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery02.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery03.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery03.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="galleryImg"><img src="{{ asset('assets/images/gallery04.jpg')}}" alt="">
            <div class="portfolio-overley">
              <div class="content"> <a href="{{ asset('assets/images/gallery04.jpg')}}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-pagination text-center"> <a href="#0"><i class="fas fa-angle-left"></i></a> <a href="#0">01</a> <a href="#0" class="active">02</a> <a href="#0">03</a> <a href="#0"><i class="fas fa-angle-right"></i></a> </div>
    </div>
  </div>
</div>
<!-- Inner Content End --> 

@endsection