<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>BIJOUTERIE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap"
      rel="stylesheet"
    />

    <link href="{{ URL::asset('css/open-iconic-bootstrap.min.css')}}"  rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css')}}" type="text/css"/>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css')}}" />

    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" type="text/css"/>
    
  </head>
    <body>

    @extends('header_Footer.header')
<!-- DUB carousel -->
<section class="home-slider owl-carousel js-fullheight">
      <div
        class="slider-item js-fullheight"
        style="background-image: url(images/bg_1_BIJOUTERIE.jpeg);"
      >
        <div class="overlay"></div>
        <div class="container">
          <div
            class="row slider-text js-fullheight justify-content-center align-items-center"
            data-scrollax-parent="true"
          >
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">BIJOUTERIE</span>
              <h1 class="mb-4">Meilleure bague</h1>
            </div>
          </div>
        </div>
        <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="featured">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/breakfast-1.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Bague de Fiançailles Solitaire</h3>
                          <p><span>Diamants</span>, <span>Or 14-Karat</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/breakfast-2.jpeg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Bague Homme</h3>
                          <p>
                            <span>d'onyx noir</span>, <span>Argent massif</span>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/breakfast-3.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Bague Solitaire Femme</h3>
                          <p>Alliance Mariage</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/breakfast-4.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Bague alliance homme</h3>
                          <p>
                            <span>anneau mariage fin ciselé</span>,
                            <span>argent massif 925 rhodié</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div
        class="slider-item js-fullheight"
        style="background-image: url(images/bg_2_BIJOUTERIE.jpg);"
      >
        <div class="overlay"></div>
        <div class="container">
          <div
            class="row slider-text js-fullheight justify-content-center align-items-center"
            data-scrollax-parent="true"
          >
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">BIJOUTERIE</span>
              <h1 class="mb-4">Meilleure Collier doré</h1>
            </div>
          </div>
        </div>
        <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="featured">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/femme-dore.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Collier ethnique Royal Femmes</h3>
                          <p><span>chic</span>, <span>raffiné</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/collier-dore-femme.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Collier Anais Femmes</h3>
                          <p>
                            <span>Deux chaînes</span>,
                            <span>Métal doré à l’or fin</span>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/collier_homme.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Collier Or Homme</h3>
                          <p>Métal doré à l’or</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/collier-or.jpeg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Collier or homme</h3>
                          <p>
                            <span>Longueur 55 cm.</span>, <span> 9,50 g.</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div
        class="slider-item js-fullheight"
        style="background-image: url(images/bg_3_BIJOUTERIE.jpg);"
      >
        <div class="overlay"></div>
        <div class="container">
          <div
            class="row slider-text js-fullheight justify-content-center align-items-center"
            data-scrollax-parent="true"
          >
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">BIJOUTERIE</span>
              <h1 class="mb-4">Meilleure Montres</h1>
            </div>
          </div>
        </div>
        <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="featured">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/montre_h1.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>BAOGELA Montre Homme</h3>
                          <p><span>chic</span>, <span>Noir Or Montres</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/montre_h2.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Carnaval montre hommes</h3>
                          <p><span>Top marque de luxe</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/montre-femme1.jpg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Montre femmes EMPORIO</h3>
                          <p>Rose. Argent</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="featured-menus ftco-animate">
                        <div
                          class="menu-img img"
                          style="background-image: url(images/montre-femme2.jpeg);"
                        ></div>
                        <div class="text text-center">
                          <h3>Montre femmes</h3>
                          <p>
                            <span>dorée rose.</span>,
                            <span> bracelet cuir.</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- END carousel -->


    <!-- DUB A PROPOS -->
    <section class="ftco-section ftco-wrap-about">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex">
            <div
              class="img img-1 mr-md-4"
              style="background-image: url(images/about.jpg);"
            ></div>
          </div>
          <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
            <div class="heading-section mb-4 my-5 my-md-0">
              <span class="subheading">À propos</span>
              <h2 class="mb-4">Bijouterie tunisien</h2>
            </div>
            <p>Nous somme une boutique de Bijouterie et Montre en ligne.</p>
            <pc class="time">
              <span><a href="#">BijouterieTunis@email.com</a></span>
              <span><a href="#">+ 216 22 222 222</a></span>
            </pc>
          </div>
        </div>
      </div>
    </section>
    <!-- END A PROPOS -->

    <!-- DUB Nos Vendeur -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <span class="subheading">Nos</span>
            <h2 class="mb-4">Vendeur</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 ftco-animate">
            <div class="staff">
              <div
                class="img"
                style="background-image: url(images/chef-3.jpg);"
              ></div>
              <div class="text pt-4">
                <h3>Rayen Karoui</h3>
                <span class="position mb-2">vendeuse</span>
                <div class="faded">
                  <ul class="ftco-social d-flex">
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-twitter"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-facebook"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-google-plus"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-instagram"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 ftco-animate">
            <div class="staff">
              <div
                class="img"
                style="background-image: url(images/chef-1.jpg);"
              ></div>
              <div class="text pt-4">
                <h3>Wael Dghais</h3>
                <span class="position mb-2">Vendeur</span>
                <div class="faded">
                  <ul class="ftco-social d-flex">
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-twitter"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-facebook"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-google-plus"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="#"><span class="icon-instagram"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- END Nos Vendeur -->

 @extends('header_Footer.footer')

 @extends('js.js')

  
  
  </body>
</html>
