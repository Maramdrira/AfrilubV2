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
                  <img src="{{URL::asset('assets/img/Produit/val/syn/5W40.jpeg')}}" alt="">
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
                <li>Huile moteur synthétique de première qualité homologuée par le fabricant de l'équipement 
                    d'origine. Formulée pour des performances et une protection de pointe dans toutes les 
                    conditions de fonctionnement. Conçue pour répondre aux normes les plus récentes des 
                    principaux constructeurs de moteurs.</li>
              </ul>
            </div>

            <br><br><br>

            <div class="portfolio-info">
              <h3>NIVEAUX DE PERFORMANCE :</h3>
              <ul>
                <li><strong>ACEA</strong>   C3                </li>
                <li><strong>API</strong> :  SM, SN/CF</li>
                <li>BMW LL-04 2019</li>
                <li>Ford WSS-M2C917-A</li>
                <li>MB-226.5, MB-229.31                </li>
                <li>Porsche A40                </li>
                <li>VW 50500/50501                </li>
                <li>Recommandé pour une utilisation où Fiat 
                    9.55535.S2 est requis</li>
                              <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  
  </main><!-- End #main -->
  

@endsection