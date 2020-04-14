<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('header_Footer.head')
  </head>
  <body>
	
		@extends('header_Footer.header')
	 
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url(images/bg_1_BIJOUTERIE.jpeg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Nos Produits</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Nos Produits <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


		<section class="ftco-section">
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Ceinture Cuire</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Ceinture Acier</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Ceinture Céramique</a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Ceinture Gomme </a>

	              <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Ceinture Plastique</a>

	              <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Ceinture Tissu</a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	             <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab" >
	              	<div class="row no-gutters d-flex align-items-stretch">
						        
									
								@foreach ($products as $product)
								

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
								 <!-- <div class="menu-img img" style="background-image: {{  URL::asset($product->image1)}};"></div>-->
								  <img class="menu-img img" src="{{  URL::asset($product->image1)}}" alt="img">
								  
					              <div class="text d-flex align-items-center">
								    	<div>
						                	<div class="d-flex">
							                  <div class="one-half">
												<a
                
												href="{{route('product_detail',['product_id'=>$product->id])}}">
					
												<h3>{{ $product->nameproduct }}</h3></a>
												
							                  </div>
							                  <div class="one-forth">
							                  <span class="price">{{ $product->prix }}</span>
							                </div>
							              </div>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
								</div>


								@endforeach
								
							
					        	<!--<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montreCuire2.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre Cuire Marron</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-3.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre Cuire Bleu</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-4.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre Cuire Marron</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre Cuire Marron</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-6.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre Cuire Marron</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-7.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre Cuire noir </h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre Cuire Marron</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccckkkk</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>-->
							
						</div>

				  
						<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	 <div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-3.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-4.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-6.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-3.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-4.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-6.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-3.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-4.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-3.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-4.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-6.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-7.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-3.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-4.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-5.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/montre-cuir-6.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-7.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img order-md-last" style="background-image: url(images/montre-cuir-8.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Montre cuire</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$29</span>
							                </div>
							              </div>
							              <p><span>xxxx</span>, <span>oooo</span>, <span>cccc</span>, <span>dddd</span></p>
							              <p><a href="#" class="btn btn-primary">Ajouter au panier</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>
		
  @extends('header_Footer.footer')

  @extends('js.js')
    
  </body>
</html>
