@extends('layouts.default')

@section('title','Contact')

@section('content')

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
    <div class="jumbotron jumbotron-fluid bg-transparent">
        <h1 class="display-4 sectionheading text-center">Contact Us</h1>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    </div>

    <div class="row">

      <div class="col-md-9 mb-md-0 mb-5">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeeZcvXjWEwUiAsJx_uhRolSiokUOeYnuFdGEgHE6-ITpnUlA/viewform?embedded=true" width="640" height="1000" frameborder="0" marginheight="0" marginwidth="0"></iframe>
      </div>    

      <div class="col-md-3">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Kuala Lumpur</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+ 0123456789</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>chris@englishcom.uk</p>
                  </li>
              </ul>
          </div>
      </div>
    
    </div>
 </section>
@endsection
