@extends('frontend.master')
@section('content')
<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>About Us</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- About Start -->
<div class="about-wrap" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="about_box">
          <div class="title">
            <h1>Our Salon is Most Popular, <span>Clean and Recommended</span> Hair Salon</h1>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum pellentesque convallis. Ut mollis libero eu massa imperdiet faucibus vitae non diam. Sed egestas felis libero, ut suscipit nisl varius non. Proin eget suscipit nulla. Nulla facilisi. In hac habitasse platea dictumst. </p>
          <p>Proin sollicitudin dui id pretium euismod. Donec dui lectus, tincidunt euismod leo feugiat, vehicula bibendum nunc. Nullam ut aliquam lorem. Pellentesque consequat a augue nec congue. Aenean dapibus diam id purus fermentum, ac imperdiet quam pellentesque. Sed eu tristique lacus. Sed lacinia imperdiet mauris a suscipit. Donec non lorem nibh. Vivamus viverra dui vitae metus dapibus eleifend. Pellentesque in felis a dui rhoncus mattis vitae sit amet ligula. Phasellus scelerisque orci et nisl egestas, ut ultrices elit ornare. Integer sodales, leo a volutpat euismod, velit neque blandit magna, a hendrerit dui ex ac turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum pellentesque convallis. Ut mollis libero eu massa imperdiet faucibus vitae non diam. Sed egestas felis libero, ut suscipit nisl varius non. Proin eget suscipit nulla. Nulla facilisi. In hac habitasse platea dictumst. </p>
          <ul class="tick">
            <li>Fusce pretium ipsum quis enim suscipit</li>
            <li>Morbi euismod at nisl quis tincidunt</li>
            <li>Donec at dolor nec enim varius elementum</li>
            <li>Praesent augue ipsum rutrum at massa</li>
            <li>Suspendisse feugiat metus eget leo tincidunt</li>
            <li>Nunc tincidunt faucibus porttitor</li>
            <li>Nullam molestie tempor quam quis tincidunt</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="aboutImg"><img alt="" src="{{ asset('assets/images/aboutImg.png')}}"></div>
      </div>
    </div>
  </div>
</div>

<!-- About End --> 

<!-- Expert Start -->
<div class="expert-wrap innerExpert">
  <div class="container">
    <div class="title title_center">
      <h1>Our Experts</h1>
    </div>
    <div class="row">
    @foreach($teams as $team)
      <div class="col-lg-3 col-md-6">
        <div class="experts">
          <div class="teamImg"><img src="{{URL::to('uploads', $team->team_img)}}">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="team_content">
            <h5><a href="#">{{$team->name}}</a></h5>
            <p class="category">{{$team->desigation}}</p>
            <!-- category --> 
          </div>
        </div>
      </div>

    @endforeach
    </div>
  </div>
</div>
<!-- Expert End --> 

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