@extends('frontend.master')
@section('content')
<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Blog List</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Blog Start -->
<div class="blog-wrap blog_side blogWrp">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <ul class="blog_list">
        @foreach($bloglists as $bloglist)
          <li>
            <div class="row">
              <div class="col-lg-5 col-md-5">
                <div class="blogImg"><img alt="" src="{{URL::to('uploads',$bloglist->blog_img)}}"></div>
              </div>
              <div class="col-lg-7 col-md-7">
                <div class="blog_sec">
                  <h3><a href="blog_details.html">{{$bloglist->name}}</a></h3>
                  <div class="blog_date">Feb 27, 2021</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi velit, vestibulum eu auctor eget, dictum at lacus. Praesent quis volutpat mauris. Nam suscipit vestibulum sem quis varius.</p>
                </div>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
        <div class="blog-pagination text-center"> <a href="#0"><i class="fas fa-angle-left"></i></a> <a href="#0">01</a> <a href="#0" class="active">02</a> <a href="#0">03</a> <a href="#0"><i class="fas fa-angle-right"></i></a> </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="sidebar-item">
            <form>
              <input type="text" name="text" placeholder="Search">
              <button><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </div>
          <!-- sidebar item -->
          
          <div class="sidebar-item">
            <h3 class="sidebar-title">Categories</h3>
            <ul class="categories">
              <li><a href="#">colorist</a></li>
              <li><a href="#">fashion</a></li>
              <li><a href="#">men haircut</a></li>
              <li><a href="#">nail</a></li>
              <li><a href="#">Health</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Uncategorized </a></li>
            </ul>
          </div>
          <div class="sidebar-item">
            <h3 class="sidebar-title">Archives</h3>
            <ul class="categories">
              <li><a href="#">May 2020 </a></li>
              <li><a href="#">February 2019 </a></li>
              <li><a href="#">August 2018 </a></li>
            </ul>
          </div>
          
          <!-- sidebar item -->
          
          <div class="widget sidebar-item">
            <h3 class="sidebar-title">Tags</h3>
            <ul class="tags">
              <li><a href="#">Brunettes</a></li>
              <li><a href="#">curly hair</a></li>
              <li><a href="#">elegant</a></li>
              <li><a href="#">escada</a></li>
              <li><a href="#">fancy</a></li>
              <li><a href="#">fashion</a></li>
              <li><a href="#">fearless</a></li>
              <li><a href="#">girls</a></li>
              <li><a href="#">hair</a></li>
              <li><a href="#">hair</a></li>
              <li><a href="#">colorist</a></li>
              <li><a href="#">men haircut</a></li>
              <li><a href="#">nail</a></li>
              <li><a href="#">oil</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
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