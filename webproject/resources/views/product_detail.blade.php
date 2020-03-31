<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BIJOUTERIE | PRODUCT DETAIL</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Core Style CSS -->

    <link rel="stylesheet" href="css/core-style.css" />
  </head>
  <body>
    @extends('header_Footer.header')
    <section
      class="hero-wrap hero-wrap-2"
      style="background-image: url(images/bg_1_BIJOUTERIE.jpeg);"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text align-items-end justify-content-center"
        >
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Nos Produits</h1>
            <p class="breadcrumbs">
              <span class="mr-2"
                ><a href="index.html"
                  >Acueille <i class="ion-ios-arrow-forward"></i></a
              ></span>
              <span>Nos Produits <i class="ion-ios-arrow-forward"></i></span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="ftco-search">
          <div class="row">
            <div class="col-md-12 nav-link-wrap"></div>
            <div class="col-md-12 tab-wrap">
              <!-- Search Wrapper Area Start -->
              <div class="search-wrapper section-padding-100">
                <div class="search-close">
                  <i class="fa fa-close" aria-hidden="true"></i>
                </div>
              </div>
              <!-- Search Wrapper Area End -->

              <!-- ##### Main Content Wrapper Start ##### -->
              <div class="main-content-wrapper d-flex clearfix">
                <!-- Mobile Nav (max width 767px)-->
                <div class="mobile-nav">
                  <!-- Navbar Toggler -->
                  <div class="amado-navbar-toggler">
                    <span></span><span></span><span></span>
                  </div>
                </div>

                <!-- Header Area Start -->
                <header class="header-area clearfix">
                  <!-- Close Icon -->
                  <div class="nav-close">
                    <i class="fa fa-close" aria-hidden="true"></i>
                  </div>
                  <!-- Logo -->

                  <!-- Amado Nav -->
                  <nav class="amado-nav">
                    <ul>
                      <li></li>
                      <li></li>

                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                  </nav>
                  <!-- Button Group -->

                  
               
                </header>
                <!-- Header Area End -->

                <!-- Product Details Area Start -->
                <div class="single-product-area section-padding-100 clearfix">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                          <div
                            id="product_details_slider"
                            class="carousel slide"
                            data-ride="carousel"
                          >
                            <ol class="carousel-indicators">
                              <li
                                class="active"
                                data-target="#product_details_slider"
                                data-slide-to="0"
                                style="background-image: url(images/montre-cuir-5.jpg);"
                              ></li>
                              <li
                                data-target="#product_details_slider"
                                data-slide-to="1"
                                style="background-image: url(images/montre-cuir-6.jpg);"
                              ></li>
                              <li
                                data-target="#product_details_slider"
                                data-slide-to="2"
                                style="background-image: url(images/montre-cuir-7.jpg);"
                              ></li>
                              <li
                                data-target="#product_details_slider"
                                data-slide-to="3"
                                style="background-image: url(images/montre-cuir-8.jpg);"
                              ></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <a
                                  class="gallery_img"
                                  href="images/montre-cuir-5.jpg"
                                >
                                  <img
                                    class="d-block w-100"
                                    src="images/montre-cuir-6.jpg"
                                    alt="First slide"
                                  />
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a
                                  class="gallery_img"
                                  href="images/montre-cuir-7.jpg"
                                >
                                  <img
                                    class="d-block w-100"
                                    src="images/montre-cuir-8.jpg"
                                    alt="Second slide"
                                  />
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a
                                  class="gallery_img"
                                  href="images/montre-cuir-5.jpg"
                                >
                                  <img
                                    class="d-block w-100"
                                    src="images/montre-cuir-6.jpg"
                                    alt="Third slide"
                                  />
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a
                                  class="gallery_img"
                                  href="images/montre-cuir-7.jpg"
                                >
                                  <img
                                    class="d-block w-100"
                                    src="images/montre-cuir-8.jpg"
                                    alt="Fourth slide"
                                  />
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                          <!-- Product Meta Data -->
                          <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">$180</p>
                            <a href="product_detail.html">
                              <h6>White Modern Chair</h6>
                            </a>
                            <!-- Ratings & Review -->
                            <div
                              class="ratings-review mb-15 d-flex align-items-center justify-content-between"
                            >
                              <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </div>
                              <div class="review">
                                <a href="#">Write A Review</a>
                              </div>
                            </div>
                            <!-- Avaiable -->
                            <p class="avaibility">
                              <i class="fa fa-circle"></i> In Stock
                            </p>
                          </div>

                          <div class="short_overview my-5">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Aliquid quae eveniet culpa
                              officia quidem mollitia impedit iste asperiores
                              nisi reprehenderit consequatur, autem, nostrum
                              pariatur enim?
                            </p>
                          </div>

                          <!-- Add to Cart Form -->
                          <form class="cart clearfix" method="post">
                            <div class="cart-btn d-flex mb-50">
                              <p>Qty</p>
                              <div class="quantity">
                                <span
                                  class="qty-minus"
                                  onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"
                                  ><i
                                    class="fa fa-caret-down"
                                    aria-hidden="true"
                                  ></i
                                ></span>
                                <input
                                  type="number"
                                  class="qty-text"
                                  id="qty"
                                  step="1"
                                  min="1"
                                  max="300"
                                  name="quantity"
                                  value="1"
                                />
                                <span
                                  class="qty-plus"
                                  onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"
                                  ><i
                                    class="fa fa-caret-up"
                                    aria-hidden="true"
                                  ></i
                                ></span>
                              </div>
                            </div>
                            <button
                              type="submit"
                              name="addtocart"
                              value="5"
                              class="btn btn-primary"
                            >
                              Add to cart
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Product Details Area End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @extends('header_Footer.footer')

    @extends('js.js')

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
  </body>
</html>
