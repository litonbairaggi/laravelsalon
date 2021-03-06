@extends('frontend.master')
@section('content')
<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Blog Details</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Blog Start -->
<div class="blog-wrap blog_side blogWrp">
  <div class="container">
    <div class="row">
    @foreach($blogdetails as $blogdetail)
      <div class="col-lg-8">
        <div class="blogImg"><img alt="" src="{{URL::to('uploads',$blogdetail->blog_img)}}"></div>
        <div class="blog_sec">
          <h3>{{$blogdetail->name}}</h3>
          <div class="blog_date">May 05, 2020</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi velit, vestibulum eu auctor eget, dictum at lacus. Praesent quis volutpat mauris. Nam suscipit vestibulum sem quis varius. Curabitur vulputate, ante a convallis congue, nisi tortor malesuada ex, sit amet semper nisi nunc porttitor augue. Nam eu mattis ligula. Integer congue sodales odio, tempor laoreet eros accumsan ac. Integer sagittis lacinia nibh, sed pulvinar est. Vivamus augue nunc, ultrices quis orci ac, vestibulum pellentesque ligula. Nam imperdiet est justo, eget sollicitudin augue elementum eget. Aenean nec diam eu sapien semper egestas. Suspendisse eu vehicula neque, eget vestibulum enim. Proin accumsan mi eget purus dictum, a aliquet felis pulvinar. <br/>
            <br/>
            Ut viverra elit mauris, sit amet congue nisi lacinia nec. Curabitur semper, mauris a pellentesque scelerisque, nulla sapien condimentum leo, nec imperdiet ipsum lorem eu nibh. Nulla accumsan, ipsum ut consequat auctor, lacus ipsum rhoncus sem, non maximus nunc purus ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus facilisis molestie tortor sit amet consectetur. Ut auctor massa venenatis, vestibulum ex eu, ornare tortor. Fusce vitae nunc accumsan, sodales nibh ac, feugiat ligula. In bibendum in urna eu porta. Aliquam consectetur, leo sed tempor gravida, felis urna elementum dolor, et dictum urna nibh eu orci. Donec risus purus, tincidunt porta dui at, dignissim porta ex. Curabitur sed ipsum quam. Nam sollicitudin sapien eros, vitae accumsan odio elementum sed. Vivamus iaculis urna non massa sollicitudin pharetra. Integer nec porta massa, placerat semper est. Nunc urna lectus, porta vitae sagittis consectetur, fringilla ut urna. Praesent dictum arcu sem, et bibendum nunc maximus ac.</p>
        </div>
      </div>
    @endforeach
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