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

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>

    <p class="text-center mt-3">
      
    </p>
</div>




<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shawdow p-4 ">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30628.676206384684!2d80.51351473599061!3d16.344159793107156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f5c460ab7d1d%3A0x8c86e4f36490336b!2sVasireddy%20Venkatadri%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1720935239518!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Adress</h5>
        <a href="https://www.google.co.in/maps" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> VVIT,Guntur
        </a>   
        <h5 class=" mb-4 mt-4">call us</h5>
        <a href="tel:+919876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +919876543210
        </a>
        <br>
        <a href="tel:+91912345670" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +919123456780
        </a>

        
        <h5 class="mt-4 ">Email</h5>
            <i class="bi bi-envelope-at"></i> 
            <a href="mailto: ask.happystay@gmail.com" class="d-inline-block text-decoration-none text-dark">
            ask.happystay@gmail.com
        </a> 
       
        <h5 class="mt-4">Follow us</h5>
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
     <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shawdow p-4 ">
        <form method="POST">
            <h5>Send a message</h5>
            <div class="mb-3">
                <label class="form-label" style="font-weight: 500;">Name</label>
                <input name="name" required type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email" required type="email" class="form-control shadow-none">
                    
            </div>
            <div class="mb-3">
                 <label class="form-label">Subject</label>
                <input name="subject" required type="text" class="form-control shadow-none">        
            </div>
            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea name="message" required class="form-control shadow-none" rows="5" style="resize:none";></textarea>
            </div>
            <button name="send" type="submit" class="btn btn-dark shadow-none">SEND</button>


        </form>

    </div>
  </div>
</div>
<?php require('inc/footer.php'); ?>

</body>
</html>