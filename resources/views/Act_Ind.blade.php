@extends('template2')
@section('content')

 <!-- ======= Services Section ======= -->
 <section id="service" class="service">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <br><br><br>
       <h6>AFRILUB, représentant exclusif du groupe CASTROL-Industrie et CIMCOOL a
          permis à la société de s’introduire dans les divers marchés couvrant des partenaires
          industriels d’envergures.
          AFRILUB INDUSTRIE assure à ses clients l’assistance technique nécessaire afin
          d’optimiser la rentabilité de leurs opérations.
          Associé à cette assistance technique AFRILUB INDUSTRIE préconise des lubrifiants
          en adéquation avec les opérations et parvient ainsi à la rationalisation des produits
          utilisés chez ses clients</h6>
       
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"><a
            href="Act_ind">
            <div class="icon-box">
              <div class="icon"><i class="bx "><img src="{{URL::asset('assets\img\activite\avion.png')}}"></i></div>
              <h4>INDUSTRIE AÉRONAUTIQUE</h4>
              <p>AFRILUB offre une gamme de produits spécifiques répondant aux besoins du marché aéronautique
                 avec les homologations EADS (ASN 42302 / BOMBARDIER)nous citerons à titre d'exemple :  STELIA
                du groupe AIRBUS / PGS / FIGEAC AERO /EUROCAST  du groupe Paradigm Precision Holdings
              </p>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
          data-aos-delay="200">
          <a href="Act_aut">
            <div class="icon-box">
              <div class="icon"><i class="bx "><img src="{{URL::asset('assets\img\activite\entretien.png')}}"></i></div>
              <h4>INDUSTRIE AUTOMOBILE</h4>
              <p>AFRILUB offre une gamme de produits spécifiques répondant aux besoins du marché automobiles avec 
                les homologations FORD , PSA, BMW, RENAULT ;
                 nous citerons à titre d'exemple :  VALEO et BONTAZ Tunisie</p>
                 <br><br>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
          data-aos-delay="300">
          <a href="conseil">
            <div class="icon-box">
              <div class="icon"><i class="bx"><img src="{{URL::asset('assets\img\activite\prise-de-courant.png')}}"></i></div>
              <h4>INDUSTRIE ÉLECTRIQUE <br>( POWERGEN )</h4>
              <p>AFRILUB offre une gamme de produits spécifiques répondant aux besoins du marché des huiles 
                turbines pour la production d'électricité avec l'homologation ROLLS ROYCE ;
                 nous citerons à titre d'exemple : Groupe POLINA, SAH LILAS, Groupe HAMROUNI</p>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"data-aos-delay="300">
                <a href="conseil">
                  <div class="icon-box">
                    <div class="icon"><i class="bx"><img src="{{URL::asset('assets\img\activite\industrie.png')}}"></i>
                    </div>
                    <h4>INDUSTRIE GÉNÉRALE</h4>
                    <p>AFRILUB offre une large  gamme de produits spécifiques répondant aux différentes
                    spécialités
                    demandées ; nous citerons à titre d'exemple :
                    </p>
                    <ul>
                     <li><span dir="LTR"> </span>Les huiles frigorifiques</li>
                      <li><span dir="LTR"> </span>Les huiles compresseurs</li>
                      <li><span dir="LTR"> </span>Les huiles de protections</li>
                      <li><span dir="LTR"> </span>Les huiles de travail des métaux</li>
                      <li><span dir="LTR"> </span>Les huiles d&rsquo;engrenages</li>
                      <li><span dir="LTR"> </span>Les huiles calo porteuses</li>
                      <li><span dir="LTR"> </span>Les huiles de circulations</li>
                      <li><span dir="LTR"> </span>Les graisses</li>
                    </ul>
                  </div>
                </a>
        </div>
        
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"data-aos-delay="300">
         <a href="conseil">
          <div class="icon-box">
            <div class="icon"><i class="bx"><img src="{{URL::asset('assets\img\activite\chariot-de-mine.png')}}"></i></div>
            <h4>LES MINES</h4>
            <p>AFRILUB offre une gamme de produits spécifiques pour la lubrification des engrenages
                nus de la CPG</p>
                <br><br><br><br><br><br><br><br><br>
          </div>
         </a>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"data-aos-delay="300">
            <a href="conseil">
              <div class="icon-box">
                <div class="icon"><i class="bx"><img src="{{URL::asset('assets\img\activite\chimie.png')}}"></i>
                </div>
                <h4>LES INDUSTRIES CHIMIQUES ET PLASTIQUES</h4>
                <p>AFRILUB offre une gamme d'huiles hydrauliques pour l'injection plastique et toutes 
                autres applications hydrauliques;
                nous citerons à titre d'exemple : Sipco, Thomas Tunisie Plastique</p>
                <br><br><br><br><br><br><br>
              </div>
            </a>
        </div>

     
       

  </div>

  </div>
  </section><!-- End Services Section -->


@endsection