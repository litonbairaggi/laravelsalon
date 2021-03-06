@extends('frontend.master')
@section('content')

<!-- Inner Heading Start -->
<div class="inner_heading">
  <div class="container">
    <h1>Service Details</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="page_content">
  <div class="container">
    <div class="service_details">
      <div class="row">
        <div class="col-lg-3">
          <div class="sidebar-item">
            <h3 class="sidebar-title">Categories</h3>
            <ul class="categories">
              <li><a href="services.html">colorist</a></li>
              <li><a href="services.html">fashion</a></li>
              <li><a href="services.html">men haircut</a></li>
              <li><a href="services.html">nail</a></li>
              <li><a href="services.html">Health</a></li>
              <li><a href="services.html">Lifestyle</a></li>
              <li><a href="services.html">Uncategorized </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="serImg"><img alt="" src="{{ asset('assets/images/service_delImg.jpg')}}"></div>
          <h3>HairCut Styles</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi velit, vestibulum eu auctor eget, dictum at lacus. Praesent quis volutpat mauris. Nam suscipit vestibulum sem quis varius. Curabitur vulputate, ante a convallis congue, nisi tortor malesuada ex, sit amet semper nisi nunc porttitor augue. Nam eu mattis ligula. Integer congue sodales odio, tempor laoreet eros accumsan ac. Integer sagittis lacinia nibh, sed pulvinar est. Vivamus augue nunc, ultrices quis orci ac, vestibulum pellentesque ligula. Nam imperdiet est justo, eget sollicitudin augue elementum eget. Aenean nec diam eu sapien semper egestas. Suspendisse eu vehicula neque, eget vestibulum enim. Proin accumsan mi eget purus dictum, a aliquet felis pulvinar. <br>
            <br>
            Ut viverra elit mauris, sit amet congue nisi lacinia nec. Curabitur semper, mauris a pellentesque scelerisque, nulla sapien condimentum leo, nec imperdiet ipsum lorem eu nibh. Nulla accumsan, ipsum ut consequat auctor, lacus ipsum rhoncus sem, non maximus nunc purus ut lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus facilisis molestie tortor sit amet consectetur. Ut auctor massa venenatis, vestibulum ex eu, ornare tortor. Fusce vitae nunc accumsan, sodales nibh ac, feugiat ligula. In bibendum in urna eu porta. Aliquam consectetur, leo sed tempor gravida, felis urna elementum dolor, et dictum urna nibh eu orci. Donec risus purus, tincidunt porta dui at, dignissim porta ex. Curabitur sed ipsum quam. Nam sollicitudin sapien eros, vitae accumsan odio elementum sed. Vivamus iaculis urna non massa sollicitudin pharetra. Integer nec porta massa, placerat semper est. Nunc urna lectus, porta vitae sagittis consectetur, fringilla ut urna. Praesent dictum arcu sem, et bibendum nunc maximus ac.</p>
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
    </div>
  </div>
</div>
<!-- Inner Content End --> 

@endsection