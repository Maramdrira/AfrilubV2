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
                  <img src="{{URL::asset('assets/img/Produit/val/syn/0W30.jpeg')}}" alt="">
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
                <li>Huile moteur entièrement synthétique de première qualité. Formulée pour des 
                    performances et une protection de pointe dans toutes les conditions de fonctionnement. 
                    Conçue pour répondre aux normes les plus récentes des principaux constructeurs de 
                    moteurs.</li>
              </ul>
            </div>

            <br><br><br>

            <div class="portfolio-info">
              <h3>NIVEAUX DE PERFORMANCE :</h3>
              <ul>
                <li><strong>ACEA</strong>  C2</li>
                <li>Recommandée pour un remplissage sous garantie 
                    lorsque Ford WSS-M2C950-A est requise</li>
                <li>Fiat 9.55535 GS1/ DS1 </li>
                <li>Jaguar/ Landrover STJLR 03.5007</li>
                <li>Convient pour certains modèles de marque*: Honda, Jeep, Mitsubishi, Subaru,Suzuki, Toyota</li>
                
                <li>Recommandé par Valvoline pour une utilisation 
                    où Iveco 1811 SC1 LV-16 est requis</li>
                              <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  
  </main><!-- End #main -->
  

@endsection