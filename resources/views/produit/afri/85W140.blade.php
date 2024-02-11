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
                  <img src="{{URL::asset('assets/img/Produit/afri/85W140g.jpeg')}}" alt="">
                </div>
  
    
  
              
  
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
  
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3> DESCRIPTION :</h3>
              <ul>
                <li> Lubrifiants Extreme-Pression pour Transmissions Mecaniques Synchronisées</li>
              </ul>
            </div>

            <br><br><br>

            <div class="portfolio-info">
              <h3>NIVEAUX DE PERFORMANCE :</h3>
              <ul>
                <li><strong>API</strong>: GL-5 </li>
                <li> MIL _ L _2105 D </li>
                <li>GEAR OIL répond aux exigences des constructeurs: MAN 342 Type M-1 </li>

              
                              <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
              </ul>
            </div>
          </div> 
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  
  </main><!-- End #main -->
  

@endsection