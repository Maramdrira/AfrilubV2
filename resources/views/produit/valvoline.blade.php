@extends('template2')
@section('content')

<main id="main">


    <section >
        <div class="container" data-aos="fade-up" >
            <div class="section-title">
                <br><br>
                <p>NOS PRODUITS VALVOLINE</p>
            </div> 
            <div class="row portfolio-container " data-aos="fade-up" data-aos-delay="200" >

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/2Tmin.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/2T">Super Outboard 2T</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/2T.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/2T">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/CVTmin.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/CVT">CVT</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/CVT.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/CVT">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/DCTmin.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/DCT">DCT</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/DCT.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/DCT">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/DEXmin.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/DEX">DEX</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/DEX.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/DEX">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/ALL/5W30.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/ALL/5W30">5W30</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/ALL/5W30.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/ALL/5W30">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/ALL/5W40.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/ALL/5W40">5W40</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/ALL/5W40.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/ALL/5W40">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/ALL/10W40.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/ALL/10W40">10W40</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/ALL/10W40.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/ALL/10W40">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/ALL/15W40.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/ALL/15W40">15W40</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/ALL/15W40.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/ALL/15W40">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/ALL/ALL2Tmin.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/ALL/ALL2T"> Scooter 2T</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/ALL/ALL2T.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/ALL/ALL2T">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/gear/75W80min.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/gear/75W80">75W80</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/gear/75W80.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/gear/75W80">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/gear/75W90min.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/gear/75W90">75W90</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/gear/75W90.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/gear/75W90">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/gear/80W90min.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/gear/80W90">80W90</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/gear/80W90.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/gear/80W90">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/syn/0W20.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/syn/0W20">0W20</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/syn/0W20.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/syn/0W20">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/syn/0W30.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/syn/0W30">0W30</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/syn/0W30.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/syn/0W30">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/syn/5W20.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/syn/5W20">5W20</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/syn/5W20.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/syn/5W20">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/syn/5W30.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/syn/5W30">5W30</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/syn/5W30.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/syn/5W30">s'avoir plus</a></div>
                </div>

                <div  class="col-lg-2 col-md-6  portfolio-item">
                    <div class="portfolio-wrap">
                        <div class="product_image">
                            <img src={{URL::asset('assets/img/Produit/val/syn/5W40.jpeg')}}  alt="">
                        </div>
                        <div class="product_info">
                            <h6 class="product_name"><a href="../produit/val/syn/5W40">5W40</a></h6>
                            <div class="product_price">Valvoline</div>
                            <P><a target="_blank" href="{{URL::asset('assets/img/Produit/val/syn/5W40.pdf')}}">Fiche Technique</a></P>
                        </div>
                    </div>
                    <div class="button add_to_cart_button"><a href="../produit/val/syn/5W40">s'avoir plus</a></div>
                </div>

               


              


               

               
             

               

               
            </div>
        </div>
    </section>

  



</main><!-- End #main -->


@endsection