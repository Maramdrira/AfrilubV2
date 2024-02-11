@extends('template2')
@section('content')

<main id="main">


  <!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">
      <br><br><br>
     
      <h4>De par son caractère commercial AFRILUB assure pour ses clients l’assistance technique nécessaire afin d’optimiser 
        la rentabilité des opérations des installations de ses clients.</h4>

    <div class="row">
      <div class="image col-lg-6" style='background-image: url("assets/img/ser2.jpg");' data-aos="fade-right">
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <br>
        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
          <i class="bi"><img src="{{URL::asset('assets/img/loupe.png')}}"></i>
          <br>
          <h4>&nbsp; &nbsp;Identification des besoins et rationalisation des produits</h4>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bi"><img src="{{URL::asset('assets/img/stethoscope.png')}}"></i>
          <br>
          <h4> &nbsp; &nbsp;Diagnostic des installations et conseils</h4>
          <p></p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bi"><img src="{{URL::asset('assets/img/chimie.png')}}"></i>
          <br>
          <h4> &nbsp; &nbsp; Analyses des huiles en service et commentaires</h4>
          <p></p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bi"><img src="{{URL::asset('assets/img/idee.png')}}"></i>
          <br>
          <h4>&nbsp; &nbsp; Préconisation des produits </h4>
          <p></p>
        </div>
        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="bi"><img src="{{URL::asset('assets/img/gra.png')}}"></i>
          <br>
          <h4>&nbsp; &nbsp; Formation et familiarisation du personnel aux produits utilisés</h4>
          <p> </p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

  

  </main><!-- End #main -->


@endsection