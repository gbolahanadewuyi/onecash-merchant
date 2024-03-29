<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OneCash Merchant</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?=base_url()?>public/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?=base_url()?>public/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="<?=base_url()?>public/css/fontastic.css">
  <!-- Google fonts - Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?=base_url()?>public/css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?=base_url()?>public/css/custom.css">
  <link rel="stylesheet" href="<?=base_url()?>public/notifications/sweetalert.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?=base_url()?>public/img/favicon.ico">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <div class="page login-page">
    <div class="container d-flex align-items-center">
      <div class="form-holder has-shadow">
        <div class="row">
          <!-- Logo & Information Panel-->
          <div class="col-lg-6">
            <div class="info d-flex align-items-center">
              <div class="content">
                <div class="logo">
                  <h1>OneCash</h1>
                </div>
              <!-- <p> write sub-heading</p> --> 
              </div>
            </div>
          </div>
          <!-- Form Panel    -->
          <div class="col-lg-6 bg-white">
            <div class="form d-flex align-items-center">
              <div class="content">
                <form method="post" class="form-validate" action="javascript:login()">
                <input type = "text" id="baseUrl" value="<?echo base_url(); ?>"  style="display:none">
                  <div class="form-group">
                    <input id="login-email" type="text" name="loginUsername" required
                      data-msg="Please enter your username" class="input-material">
                    <label for="login-email" class="label-material">Email</label>
                  </div>
                  <div class="form-group">
                    <input id="login-password" type="password" name="loginPassword" required
                      data-msg="Please enter your password" class="input-material">
                    <label for="login-password" class="label-material">Password</label>
                  </div><button type="submit" id="login" href="" class="btn btn-primary">Login</button>
                  <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a
                  href="<?base_url()?>user/register" class="signup">Signup</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- <div class="copyrights text-center">
      <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a>
         Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :
    </p>
  </div>  -->
  </div>
  <!-- JavaScript files-->
  <script src="<?=base_url()?>public/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>public/vendor/popper.js/umd/popper.min.js"> </script>
  <script src="<?=base_url()?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>public/vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="<?=base_url()?>public/vendor/chart.js/Chart.min.js"></script>
  <script src="<?=base_url()?>public/vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?=base_url()?>public/notifications/sweetalert.min.js"></script>
  <!-- Main File-->
  <script src="<?=base_url()?>public/js/front.js"></script>
  <!-- Request Script -->
  <script src="<?=base_url()?>public/requests/login.js"></script>
</body>

</html>
