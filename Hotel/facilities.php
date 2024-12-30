<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelBooking-facilities</title>
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

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
  <div class="h-line bg-dark"></div>
</div>
<p class="text-center mt-3">
  <br> 
</p>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shawdow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/features/wifi.svg" width="50px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Sapiente quam facere voluptatum ipsam fuga adipisci. 
          Laboriosam expedita sed distinctio quaerat.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shawdow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/features/star.svg" width="50px">
            <h5 class="mt-3">Star</h5>
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Sapiente quam facere voluptatum ipsam fuga adipisci. 
          Laboriosam expedita sed distinctio quaerat.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shawdow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/features/snow.svg" width="50px">
            <h5 class="mt-3">Snow</h5>
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Sapiente quam facere voluptatum ipsam fuga adipisci. 
          Laboriosam expedita sed distinctio quaerat.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shawdow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/features/fan.svg" width="50px">
            <h5 class="mt-3">Fan</h5>
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Sapiente quam facere voluptatum ipsam fuga adipisci. 
          Laboriosam expedita sed distinctio quaerat.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shawdow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/features/car-front-fill.svg" width="40px">
        <h5 class="m-0 ms-3">Free Parking </h5>
        </div>
        <p>At HappyStay, we understand the convenience of hassle-free travel, which is why we offer complimentary parking spaces for our guests. Our secure and spacious parking facilities ensure that you can park your vehicle conveniently during your stay with us. Whether you're arriving by car or renting one during your visit, our complimentary parking eliminates the stress of finding a spot and provides peace of mind knowing your vehicle is safely accommodated on our premises. Enjoy your stay with the added benefit of complimentary parking at HappyStay.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shawdow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/features/hospital.svg" width="40px">
        <h5 class="m-0 ms-3">Medical Aid</h5>
        </div>
        <p>HappyStay prioritizes the well-being of our guests.While we don’t provide on-site medical facilities,we do have established protocols in case of emergencies.Our staff is trained to assist in accessing medical aid promptly should the need arise. We maintain a network of nearby medical facilities, hospitals, and healthcare professionals to ensure swift and appropriate assistance in case of any medical emergencies during your stay. Your safety and health are paramount to us, and we're committed to offering support and guidance to address any unforeseen medical needs that may arise during your time at HappyStay.</p>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

</body>
</html>