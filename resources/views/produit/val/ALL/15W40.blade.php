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
                  <img src="{{URL::asset('assets/img/Produit/val/ALL/15W40.jpeg')}}" alt="">
                </div>
  
                <!--<div class="swiper-slide">
                  <img src="{{URL::asset('assets/img/Produit/HT1.jpg')}}" alt="">
                </div>
  
                <div class="swiper-slide">
                  <img src="{{URL::asset('assets/img/Produit/HT1.jpg')}}" alt="">
                </div>-->
  
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
  
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3> DESCRIPTION :</h3>
              <ul>
                <li>Huile moteur classique de grande qualité. Formulée pour des performances tout au long 
                    de l'année.
                    Technologie digne de confiance et qui a fait ses preuves pour une vaste palette de 
                    moteurs diesel, essence et GPL. </li>
              </ul>
            </div>

            <br><br><br>

            <div class="portfolio-info">
              <h3>NIVEAUX DE PERFORMANCE :</h3>
              <ul>
                <li><strong> ACEA</strong>   A3/B3, A3/B4</li>
                <li><strong>API </strong>: SL/CF </li>
                <li>MB-229.1                </li>
                <li>Recommandée par Valvoline pour les moteurs 
                    préconisant la norme VW 50500 ou VW 50101</li>
                <li> Recommandée lorsque Fiat 9.55535.D2 et G2 
                    sont spécifiées (moteurs à essence Fiat 
                    uniquement).</li>
                              <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  
  </main><!-- End #main -->
  

@endsection