@extends('template2')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
     <!-- <div class="container">
  
        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
        </div>
  
      </div>-->
    </section> 
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
  
        <div class="row gy-4">
  
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
  
                <div class="swiper-slide">
                  <img src="{{URL::asset('assets/img/Produit/afri/20W50g.jpeg')}}" alt="">
                </div>
  
              <div class="swiper-slide">
                  <img src="{{URL::asset('assets/img/Produit/afri/20W505l.jpeg')}}" alt="">
                </div>
  
              
  
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
  
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3> DESCRIPTION :</h3>
              <ul>
                <li> Huile Multigrade SAE 20W 50 destinée à la lubrification des moteurs Essence et Diesel.</li>
              </ul>
            </div>

            <br><br><br>

            <div class="portfolio-info">
              <h3>NIVEAUX DE PERFORMANCE</h3>
              <ul>
                <li><strong>API</strong>:  SE/CD</li>
               
                              <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
              </ul>
            </div>
          </div> 
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  
  </main><!-- End #main -->
  

@endsection