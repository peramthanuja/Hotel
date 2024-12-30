<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HAPPY STAY-home</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
      <?php require('inc/links.php'); ?>
      <style>
          .availability-form{
              margin-top: -50px;
              z-index:2;
              position:relative;
          }
          @media screen and (max-width:575px) {
              .availability-form{
              margin-top: 0px;
              padding:0 35px;
          }
          }
      </style>
  </head>
  <body class="bg-light">
    <?php require('inc/header.php'); ?>
    <!--carousel-->
    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/1.jpg" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/2.jpg" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/3.jpg" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/4.jpg" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/5.jpg" class="w-100 d-block">
            </div> 
          </div>
          
        </div>
      </div>
    </div>
    <!--check availability form-->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
              <h5 class="mb-4">check booking availability</h5>
              <form>
                <div class="row align-items-end">
                    <div class="col-lg-2 mb-3">
                    <label class="form-label" style="font-weight:500;">check-in</label>
                    <input type="date" class="form-control shadow-none">

                    </div>
                    <div class="col-lg-2 mb-3">
                    <label class="form-label" style="font-weight:500;">check-out</label>
                    <input type="date" class="form-control shadow-none">

                    </div>
                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500;">Adults</label>
                    <select class="form-select shadow none">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>

                    </div>
                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500;">children</label>
                    <select class="form-select shadow none">
                    <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>

                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custom-bg">SUBMIT</button>
                    </div>
                </div>
              </form>

            </div>
        </div>
    </div>
    <!--rooms-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
              <div class="card border-0 shadow" style="max-width: 350px; ">
                  <img src="images/rooms/5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5>Simple Room</h5>
                      <h6 class="mb-4">₹200 per night</h6>
                      <div class="features mb-4">
                          <h6 class="mb-1">Features</h6>                
                          <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bath Room</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                      </div>
                      <div class="facilities mb-4">
                      <h6 class="mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                      </div>
                      <div class="guests mb-4">
                      <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                      </div>
                      <div class="rating mb-4">
                      <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>  
                      </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
              <div class="card border-0 shadow" style="max-width: 350px; ">
                  <img src="images/rooms/2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5>Simple Room</h5>
                      <h6 class="mb-4">₹200 per night</h6>
                      <div class="features mb-4">
                          <h6 class="mb-1">Features</h6>                
                          <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bath Room</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                      </div>
                      <div class="facilities mb-4">
                      <h6 class="mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                      </div>
                      <div class="guests mb-4">
                      <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                      </div>
                      <div class="rating mb-4">
                      <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                      <a href="" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                      <a href="" class="btn btn-sm btn-outline-dark shadow-none">More details</a>  
                      </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
              <div class="card border-0 shadow" style="max-width: 350px; ">
                  <img src="images/rooms/3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5>Simple Room</h5>
                      <h6 class="mb-4">₹200 per night</h6>
                      <div class="features mb-4">
                          <h6 class="mb-1">Features</h6>                
                          <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bath Room</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                      </div>
                      <div class="facilities mb-4">
                      <h6 class="mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                      </div>
                      <div class="guests mb-4">
                      <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                      </div>
                      <div class="rating mb-4">
                      <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                      <a href="" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                      <a href="" class="btn btn-sm btn-outline-dark shadow-none">More details</a>  
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
            </div>
            
        </div>
    </div>

    <!--our facilities-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
      <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
              <img src="images/features/wifi.svg" width="50px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
              <img src="images/features/star.svg" width="50px">
                <h5 class="mt-3">Star</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
              <img src="images/features/snow.svg" width="50px">
                <h5 class="mt-3">Snow</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
              <img src="images/features/fan.svg" width="50px">
                <h5 class="mt-3">Fan</h5>
            </div>

            <div class="col-lg-12 text-center mt-5">
            <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
            </div>
        </div>
    </div>
    <!--Reach us-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
              <iframe class="w-100 rounded" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30628.676206384684!2d80.51351473599061!3d16.344159793107156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f5c460ab7d1d%3A0x8c86e4f36490336b!2sVasireddy%20Venkatadri%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1720935239518!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                  <h5>call us</h5>
                  <a href="tel: +919876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+919876543210
                  </a>
                  <br>
                  <a href="tel: +919123456780" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+919123456780
                  </a>
                  <br>
                  
                  <br>
                </div>
                <div class="bg-white p-4 rounded mb-4" >

                <h5 >Email</h5>
                  <i class="bi bi-envelope-at"></i> 
                  <a href="mailto: ask.happystay@gmail.com" class="d-inline-block text-decoration-none text-dark">
                  ask.happystay@gmail.com
                  </a> 

                </div>
                

                <div class="bg-white p-4 rounded mb-4">
                  <h5>Follow us</h5>
                  <a href="#" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter me-1"></i> Twitter
                  </span>
                  </a> 

                  <br>
                  <a href="#" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-facebook"></i> facebook
                  </span>
                </a>
                <br>
                <a href="#" class="d-inline-block">
                    <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram"></i> instagram
                    </span>
                </a>
                
                  
                </div>
              </div>
              
          </div>
      </div>

    <?php require('inc/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop:true,
          autoplay:{
            delay:3500,
            disableOnIntreaction:false,
          }
        
        });
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView:"3",
        loop:true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320:{
              slidesPerView:1,
          },
          640:{
              slidesPerView:1,
          },
          768:{
              slidesPerView:2,
          },
          1024:{
              slidesPerView:3,
          },

        }
        });
    </script>
  </body>
</html>