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
                  <img src="{{URL::asset('assets/img/Produit/val/DCTg.jpeg')}}" alt="">
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
                <li>Liquide de transmission synthétique de première qualité pour véhicules particuliers 
                    et camionnettes Audi, Seat, Škoda, VW et beaucoup d'autres possédant une boîte 
                    de vitesses DCT (Dual Clutch Transmission, transmission à double embrayage).
                    </li>
              </ul>
            </div>

            <br><br><br>

            <div class="portfolio-info">
              <h3>NIVEAUX DE PERFORMANCE :</h3>
              <ul>
                <li>VW G 052 182, G 052 529, G 055 529</li>
                <li>BMW 83 222 148 578, 579 </li>
                <li>BMW 83 222 147 477</li>
                <li>BMW 83 220 440 214</li>
                <li>PSA 9734.S2</li>
                <li>Ford M2C936A</li>
                <li>MB-236.21/ 24/ 25</li>
                <li>MB-239.21</li>
                <li>Mitsubishi Dia-Queen SSTF-1</li>
                <li>Nissan 999MP-GTRT00P</li>
                <li>Porsche huile n° 999.917.080.00/  999.917.080.01</li>
                <li>Volvo 1161838, 1161839</li>
                
                              <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  
  </main><!-- End #main -->
  

@endsection