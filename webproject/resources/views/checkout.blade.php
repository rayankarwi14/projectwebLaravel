<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('header_Footer.head')
        
        <!-- Core Style CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/core-style.css')}}" type="text/css" />
    
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
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
              <span>Mon pannier <i class="ion-ios-arrow-forward"></i></span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
      <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="search-content">
              <form action="#" method="get">
                <input
                  type="search"
                  name="search"
                  id="search"
                  placeholder="Type your keyword..."
                />
                <button type="submit">
                  <img src="img/core-img/search.png" alt="" />
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">
      <!-- Mobile Nav (max width 767px)-->
      <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
          <a href="index.html"><img src="img/core-img/logo.png" alt=""/></a>
        </div>
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
      </header>
      <!-- Header Area End -->

      <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="checkout_details_area mt-50 clearfix">
                <div class="cart-title">
                  <h2>Checkout</h2>
                </div>

                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="first_name"
                        value=""
                        placeholder="First Name"
                        required
                      />
                    </div>
                    <div class="col-md-6 mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="last_name"
                        value=""
                        placeholder="Last Name"
                        required
                      />
                    </div>
                    <div class="col-12 mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="company"
                        placeholder="Company Name"
                        value=""
                      />
                    </div>
                    <div class="col-12 mb-3">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Email"
                        value=""
                      />
                    </div>
                    <div class="col-12 mb-3">
                      <select class="w-100" id="country">
                        <option value="usa">United States</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ger">Germany</option>
                        <option value="fra">France</option>
                        <option value="ind">India</option>
                        <option value="aus">Australia</option>
                        <option value="bra">Brazil</option>
                        <option value="cana">Canada</option>
                      </select>
                    </div>
                    <div class="col-12 mb-3">
                      <input
                        type="text"
                        class="form-control mb-3"
                        id="street_address"
                        placeholder="Address"
                        value=""
                      />
                    </div>
                    <div class="col-12 mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="city"
                        placeholder="Town"
                        value=""
                      />
                    </div>
                    <div class="col-md-6 mb-3">
                      <input
                        type="text"
                        class="form-control"
                        id="zipCode"
                        placeholder="Zip Code"
                        value=""
                      />
                    </div>
                    <div class="col-md-6 mb-3">
                      <input
                        type="number"
                        class="form-control"
                        id="phone_number"
                        min="0"
                        placeholder="Phone No"
                        value=""
                      />
                    </div>
                    <div class="col-12 mb-3">
                      <textarea
                        name="comment"
                        class="form-control w-100"
                        id="comment"
                        cols="30"
                        rows="10"
                        placeholder="Leave a comment about your order"
                      ></textarea>
                    </div>

                    <div class="col-12">
                      <div class="custom-control custom-checkbox d-block mb-2">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck2"
                        />
                        <label class="custom-control-label" for="customCheck2"
                          >Create an accout</label
                        >
                      </div>
                      <div class="custom-control custom-checkbox d-block">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck3"
                        />
                        <label class="custom-control-label" for="customCheck3"
                          >Ship to a different address</label
                        >
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="cart-summary">
                <h5>Cart Total</h5>
                <ul class="summary-table">
                  <li><span>subtotal:</span> <span>$140.00</span></li>
                  <li><span>delivery:</span> <span>Free</span></li>
                  <li><span>total:</span> <span>$140.00</span></li>
                </ul>

                <div class="payment-method">
                  <!-- Cash on delivery -->
                  <div class="custom-control custom-checkbox mr-sm-2">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="cod"
                      checked
                    />
                    <label class="custom-control-label" for="cod"
                      >Cash on Delivery</label
                    >
                  </div>
                </div>

                <div class="cart-btn mt-100">
                  <a href="#" class="btn btn-primary">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
     <!-- ##### Main Content Wrapper End ##### -->

  

     <!-- ##### Footer Area Start ##### -->

        @extends('header_Footer.footer')

 <!-- ##### Footer Area End ##### -->
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
