<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact - SoftLand</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
</head>

<body>
    
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

      <main id="main">
      <div class="hero-section inner-page">
        <div class="wave">
          
          <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                      <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                  </g>
              </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <h1 data-aos="fade-up" data-aos-delay="">Get in touch</h1>
                  <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
          
            <h2>Contact Form</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis explicabo inventore.</p>
          </div>
          
        </div>
        
            <div class="row">
              <div class="col-md-4 ml-auto order-2"  data-aos="fade-up">
                <ul class="list-unstyled">
                  <li class="mb-3">
                    <strong class="d-block mb-1">Address</strong>
                    <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
                  </li>
                  <li class="mb-3">
                    <strong class="d-block mb-1">Phone</strong>
                    <span>+1 232 3235 324</span>
                  </li>
                  <li class="mb-3">
                    <strong class="d-block mb-1">Email</strong>
                    <span>youremail@domain.com</span>
                  </li>
                </ul>
              </div>

              
                <div class="col-md-6 mb-5 mb-md-0"  data-aos="fade-up">
                <div class="content-frm">
                  <!--Display status message -->
                  <?php if(!empty($status)){?>
                    <div class="status<?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
                  <?php } ?>
                <form action="" method="post" role="form" class="php-email-form">
              
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <?php echo form_error('name','<p class="field-error">','</p>'); ?>
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="name">Email</label>
                      <input type="email" class="form-control" name="email"  value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"data-rule="email" data-msg="Please enter a valid email" />
                      <?php echo form_error('email','<p class="field-error">','</p>'); ?>
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="name">Subject</label>
                      <input type="text" class="form-control" name="subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <?php echo form_error('subject','<p class="field-error">','</p>'); ?>
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="name">Message</label>
                      <textarea class="form-control" name="message" value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>" cols="30" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                      <?php echo form_error('message','<p class="field-error">','</p>'); ?>
                      <div class="validate"></div>
                    </div>
    
    
                    <div class="col-md-12 mb-3">
                        <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
    
                    <div class="col-md-6 form-group">
                      <input type="submit" name="contactSubmit" class="btn btn-primary d-block w-100" class="frm-submit" value="Submit">
                    </div>
                  </div>
    
                </form>
                </div>
              </div>
          
            </div>
      </div>
    </div>


      <div class="site-section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
              <h2 class="section-heading">Review From Our Users</h2>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              <div class="owl-carousel testimonial-carousel">
                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Excellent App!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Jean Doe</span>, &mdash; App User
                    </span>
                  </p>

                </div>

                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>This App is easy to use!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Johan Smith</span>, &mdash; App User
                    </span>
                  </p>

                </div>


                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Awesome functionality!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi, provident voluptates consectetur maiores quos.</p>
                  </blockquote>

                  

                  <p class="review-user">
                    <img src="assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Jean Thunberg</span>, &mdash; App User
                    </span>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Starts Publishing Your Apps</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


    </main>
    
  </div> <!-- .site-wrap -->
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/easing/easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/sticky/sticky.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  </body>
</html>
