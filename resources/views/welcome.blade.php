@extends('layouts.default')

@section('title','Home')

@section('content')
  <div class="py-5 bg-image-full" style="background-image: url('../images/image1.jpg');">
    <div style="height: 400px;"></div>
  </div>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <div class="section-title">
          <h2>About</h2>
          <p>Who we are</p>
      </div>

      <h3>Immersive classes to boost your English </h3>
      <p>Whether you want to accelerate your career, improve your social interactions, or to practise your conversational skills, we can help you to achieve your goals.</p>
      <p>Our experienced and qualified teachers offer  interactive  online English classes and courses. Lessons in person may restart when the covid situation improves. We aim to give you the confidence to use the English language in situations that matter to you.</p>

     <!-- <h3>Special Classes: Learn Japanese </h3>
      <p>Japanese lessons for adults and children by a Japanese teacher <br>
      From basic to advanced levels and writing <br>
      Reasonable rates</p>-->


    </div>
    </div>
    <!--<div class="jumbotron jumbotron-fluid bg-info">
        <p class="text-center banner">Children &bull; Adults &bull; Grammar &bull; Vocabulary &bull; Conversation</p>
    </div>
    <div class="jumbotron jumbotron-fluid bg-transparent">
        <h1 class="display-4 sectionheading text-center">One-to-one Online Class</h1>
    </div>

  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{asset('images/japanese.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Primary 6-11 years</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('images/japanese.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Secondary  12-18 years</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('images/japanese.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Business English </h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('images/japanese.jpg')}}">
      <h5 class="card-title">English Conversation</h5>
    </div>
  </div>
</div>-->
 </section>
     <!-- ======= Services Section ======= -->
     <section id="services" class="py-5 services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>What we do offer</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">Primary 6-11 years</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">Secondary 12-18 years</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">Business English</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">English Conversation</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">Advanced English</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">Creative writing</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">English for Japanese & Koreans</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">TOEIC and Aiken preparation</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">Academic writing for college students</a></h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box">
              <h4 class="title"><a href="{{ url('/classes') }}">Motivational class for young adults</a></h4>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

@endsection
