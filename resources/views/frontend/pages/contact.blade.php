@extends('frontend.master')
@section('content')
<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Contact Start -->
<div class="contact-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="contact_form">
          <div class="title">
            <h1>Make an Appointment</h1>
          </div>
          <p>Donec scelerisque libero eget mauris fermentum, vitae maximus mauris egestas. Sed eleifend placerat nulla vehicula odio in rhoncus.</p>
          <form class="form" action="https://www.medialinkers.net/demo/envato/saloon/publish/mail/mail.php">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="name" type="text" class="form-control" placeholder="First Name">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="name" type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="phone" type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea name="message" class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="button">
                    <button type="submit" class="btn primary">Book Now</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="contact_info">
          <div class="title">
            <h1>Contact <span>Information</span></h1>
          </div>
          <ul class="contact-list unorderList">
            <li>
              <div class="contact_box">
                <div class="icon"> <img alt="" src="{{ asset('assets/images/adress.pn')}}g"> </div>
                <p>Main Office <span><a href="#">{{$settingProfile->address}}</a></span></p>
              </div>
            </li>
            <li>
              <div class="contact_box">
                <div class="icon"> <img alt="" src="{{ asset('assets/images/email.png')}}"> </div>
                <p>E-mail<span> <a href="mailto:info@example.com">{{$settingProfile->email}}</a></span></p>
              </div>
            </li>
            <li>
              <div class="contact_box">
                <div class="icon"> <img alt="" src="{{ asset('assets/images/phone.png')}}"> </div>
                <p>Phone<span> <a href="tel:7701234567">{{$settingProfile->phone}}</a></span></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact End -->
@endsection