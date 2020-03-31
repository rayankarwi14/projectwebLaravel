<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('header_footer.head')
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
            <h1 class="mb-2 bread">CONTACTEZ-NOUS</h1>
            <p class="breadcrumbs">
              <span class="mr-2"
                ><a href="index.html"
                  >Accueille <i class="ion-ios-arrow-forward"></i></a
              ></span>
              <span>contactez-nous <i class="ion-ios-arrow-forward"></i></span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
          <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
            <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
            <form action="#">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Name"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Email"
                />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Sujet" />
              </div>
              <div class="form-group">
                <textarea
                  name=""
                  id=""
                  cols="30"
                  rows="7"
                  class="form-control"
                  placeholder="Message"
                ></textarea>
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Send Message"
                  class="btn btn-primary py-3 px-5"
                />
              </div>
            </form>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d819589.8199399527!2d10.109857987603858!3d36.63787324929945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130298944f265299%3A0x76745f3f48af076e!2sBijouterie%20Chichkhane%202!5e0!3m2!1sfr!2stn!4v1584643354979!5m2!1sfr!2stn"
                width="600"
                height="450"
                frameborder="0"
                style="border:0;"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
              <p>
                <span>Address:</span> <a>Rue Ali Belhouane, Nabeul‎</a
                ><a>شارع علي بلهوان، نابل</a>
              </p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
              <p>
                <span>Phone:</span>
                <a href="tel://1234567920">+216 22 222 222</a>
              </p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
              <p>
                <span>Email:</span>
                <a href="BijouterieTunis@email.com"
                  >BijouterieTunis@email.com</a
                >
              </p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
              <p><span>Website : </span> <a href="#">BijouterieTunis.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

 
    @extends('header_Footer.footer')
   

    @extends('js.js')
    
  </body>
</html>
