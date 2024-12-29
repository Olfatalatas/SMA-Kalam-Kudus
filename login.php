<?php
session_start();
$error_message = isset($_SESSION['error']) ? $_SESSION['error'] : null;
unset($_SESSION['error']); // Hapus pesan error setelah dibaca
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo_sma_kalam_kudus.png" type="image/png">
    <title>LOGIN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!--============================= Login =============================-->
<div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
               <div id="login-overlay" class="modal-dialog">
                <h1 class="text-center">LOGIN</h1>
                  <div class="modal-content">
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="well">
                                    <?php if ($error_message): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $error_message ?>
                                        </div>
                                    <?php endif; ?>
                                      <form id="loginForm" method="POST" action="php/login/login.php">
                                          <div class="form-group">
                                              <label for="email" class="control-label">Email</label>
                                              <input type="email" class="form-control" id="email" name="email" value="" required="" title="Please enter you email" placeholder="example@gmail.com">
                                              <span class="help-block"></span>
                                          </div>
                                          <div class="form-group">
                                              <label for="password" class="control-label">Password</label>
                                              <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                              <span class="help-block"></span>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="remember" id="remember"> Remember login
                                              </label>
                                          </div>
                                          <button type="submit" class="btn btn-warning" id="js-subscribe-btn">LOG IN</button>
                                        </form>
                                        <div class="text-center mt-3">
                                            <p>Don't have an account? <a href="sign-up.html">Sign up here</a></p>
                                        </div>
                                        <div class="text-center mt-3">
                                            <p><a href="sign-up.html">Forget Password</a></p>
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
  </div>
  <!--//End Login -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugins -->
        <script src="js/slick.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/counterup.min.js"></script>
        <script src="js/instafeed.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/tweetie.min.js"></script>
        <!-- Subscribe -->
        <script src="js/subscribe.js"></script>
        <!-- Script JS -->
        <script src="js/script.js"></script>
    </body>

    </html>
