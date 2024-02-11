              </ul>
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
                                <img src="{{URL::asset('assets/img/Produit/val/gear/80W90g.jpeg')}}" alt="">
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
                              <li>Huile d'essieu pour voitures particulières, camions et autobus.
                                Huile de pont EP convenant pour les différentiels et les ensembles de boîte-pont 
                                lorsque le constructeur préconise une huile GL-5.</li>
                            </ul>
                          </div>
              
                          <br><br><br>
              
                          <div class="portfolio-info">
                            <h3>NIVEAUX DE PERFORMANCE :</h3>
                            <ul>
                              <li><strong> API </strong>: GL-5</li>
                              <li>ZF TE-ML 07A, 08</li>
                                            <!-- <li><strong></strong>: <a href="#">Fiche Technique</a></li>-->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section><!-- End Portfolio Details Section -->
                
                </main><!-- End #main -->
                
              
              @endsection