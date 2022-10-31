<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="index.php"><img src="assets/img/logo.jpg" width="80" alt="logo" class="img-fluid"></a>
            <br><br>
            <p class="text-white">
              3561 Lincoln Hwy E
              Kinzers, PENNSYLVANIA, 17535, United States<br><br>
              <strong>Phone:</strong>&nbsp;<a href="tel: 717-442-8383" style="font-size: 14px; color: #c59617;">717-442-8383</a><br>
              <strong>Email:</strong>&nbsp;&nbsp;<a href="mailto: lancasterstones@gmail.com" style="font-size: 14px; color: #c59617;">lancasterstones@gmail.com</a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy_policy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="granite_gallery.php">Granite</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="marble_gallery.php">Marble</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="quartz_gallery.php">Quartz</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="quartzite_gallery.php">Quartzite</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Sign up to our newsletter and stay up to date<br>Don't worry, we won't send you too much content.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <p class="mb-0">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            , designed & developed by <a style="color: #c59617 !important;" href="http://amoriotech.com/" target="_blank" class="text-muted">Amorio Technologies</a>
          </p>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/Lancastercountertops" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script type="assets/script.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22681795.js"></script>
  <!-- End of HubSpot Embed Code -->

   <style type="text/css">

    .form_design{
    width: 100%;
    box-shadow: 0 0 24px 0 rgb(0 0 0 / 12%);
    padding: 30px;
    background: #fff;
    }

    .btn-secondary{
      background-color: #f03c02!important;
      border-color: #f03c02;
    }
  </style>

  <script>
    
  //   $('#design_1').click(function(){
  //     $.ajax({url: "image.php?design_1", success: function(result){
  //       $('div#change_image > img').remove();
  //       $("#change_image").append(result);
  //   }});
  // });

  function display(id) {
    $.ajax({url: "granite_image.php?id="+ id, success: function(result){
        $('div#change_image > img').remove();
        $("#change_image").append(result);
    }});
  }
    
  </script>

  <script>
    
  //   $('#design_1').click(function(){
  //     $.ajax({url: "image.php?design_1", success: function(result){
  //       $('div#change_image > img').remove();
  //       $("#change_image").append(result);
  //   }});
  // });

  function display(id) {
    $.ajax({url: "kitchen_image.php?id="+ id, success: function(result){
        $('div#change_image > img').remove();
        $("#change_image").append(result);
    }});
  }
    
  </script>

  <script>
    
  //   $('#design_1').click(function(){
  //     $.ajax({url: "image.php?design_1", success: function(result){
  //       $('div#change_image > img').remove();
  //       $("#change_image").append(result);
  //   }});
  // });

  function display(id) {
    $.ajax({url: "quartz_image.php?id="+ id, success: function(result){
        $('div#change_image > img').remove();
        $("#change_image").append(result);
    }});
  }
    
  </script>

  <script>
    
  //   $('#design_1').click(function(){
  //     $.ajax({url: "image.php?design_1", success: function(result){
  //       $('div#change_image > img').remove();
  //       $("#change_image").append(result);
  //   }});
  // });

  function display(id) {
    $.ajax({url: "quartzite_image.php?id="+ id, success: function(result){
        $('div#change_image > img').remove();
        $("#change_image").append(result);
    }});
  }
    
  </script>

  <style>
    .heading_effect{
      color:"#4d4643";
    }
    .heading_effect .active{
      color:"#f03c02";
    }

    .text_slide{
      margin: 0px !important;
      padding-bottom: 10px;
    }
  </style>


</body>

</html>