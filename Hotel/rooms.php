
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPYSTAY-CONTACT</title>
    <?php require('inc/links.php'); ?>
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform:scale(1.03);
        transition:all 0.3s;
      }
    </style>
    
</head>
<body class="bg-light">

<?php
  require('inc/header.php'); 
?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
  <div class="h-line bg-dark"></div>
</div>
 <div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow ">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="navbar-brand" href="#">FILTER</h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
            <!--Check availability-->
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="d-flex align-items-center justify-content-between mb-3" style="font-size: 18px;">
               <span>CHECK AVAILABILITY</span>
               <button id="chk_avail_btn" class="btn shadow-none btn-sm text-secondary ">RESET</button>
              </h5>
              <label class="form-label" >check-in</label>
              <input type="date" class="form-control shadow-none mb-3" id="checkin">
              <label class="form-label" >check-out</label>
              <input type="date" class="form-control shadow-none" id="checkout">
            </div>
            <!--facilities-->
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="d-flex align-items-center justify-content-between mb-3" style="font-size: 18px;">
                <span>FACILITIES</span>
                <button id="facilities_btn" class="btn shadow-none btn-sm text-secondary ">RESET</button>
              </h5>
              <div class="mb-2">
                <input type="checkbox" class="form-check-input shadow-none me-1" id="f1">
                <label class="form-label" for="f1" >Wifi</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" class="form-check-input shadow-none me-1" id="f2">
                <label class="form-label" for="f2" >Star</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" class="form-check-input shadow-none me-1" id="f3">
                <label class="form-label" for="f3" >Fan</label>
              </div>
            </div>
            <!--GUESTS-->
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="d-flex align-items-center justify-content-between mb-3" style="font-size: 18px;">
               <span>GUESTS</span>
               <button id="guests_btn" class="btn shadow-none btn-sm text-secondary ">RESET</button>
              </h5>
              <div class="d-flex">
                <div class="me-3">
                <label class="form-label" >Adults</label>
                <input type="number" min="1" id="adults" class="form-control shadow-none">
              </div>
              <div>
                <label class="form-label" >Children</label>
                <input type="number" min="1" id="children" class="form-control shadow-none">
              </div>
            </div>

          
        </div>
      </div>
    </nav>
    </div>

    <div class="col-lg-9 col-md-12 px-4" id="rooms-data">
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-0">
            <img src="images/rooms/1.png" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <div class="mb-3">Simple Room</div>
            <div class="features mb-3">
                <h6 class="mb-1">Features</h6>                
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bath Room</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
          </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a> 
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-0">
            <img src="images/rooms/2.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <div class="mb-3">Simple Room</div>
            <div class="features mb-3">
                <h6 class="mb-1">Features</h6>                
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bath Room</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
            </div>
            <div class="guests">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
          </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a> 
          </div>
        </div>
      </div>      
    </div>
    
  </div>
</div>


<?php require('inc/footer.php'); ?>

</body>
</html>
