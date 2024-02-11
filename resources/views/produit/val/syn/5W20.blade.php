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
                  <img src="{{URL::asset('assets/img/Produit/val/syn/5W20.jpeg')}}" alt="">
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
                <li><strong>ACEA</strong>   C5                </li>
                <li><strong>ACEA</strong>  A1/B1         </li>
                <li><strong>API</strong> :  SN Plus RC</li>
                <li>ILSAC GF-5</li>
                <li>Recommandée pour un remplissage sous 
                    garantie lorsque Ford WSS-M2C948-A & B 
                    (moteurs à essence) est requise.
                    </li>
                <li>Rétrocompatible avec Ford WSS-M2C913-B, 
                    C et WSS-M2C925-B.</li>

                              <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  
  </main><!-- End #main -->
  

@endsection