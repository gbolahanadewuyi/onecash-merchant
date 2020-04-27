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
    <link rel="stylesheet" href="<?=base_url()?>pubic/vendor/font-awesome/css/font-awesome.min.css">
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
                                </div><br />
                                <p id="sub-heading">Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form class="form-validate" method="post" action="javascript:register();">
                                    <input id="baseUrl" type="text" name="" value="<? echo base_url();?>"
                                        style="display:none;">


                                    <div class="form-group" id="field-container" style="display:none">
                                        <select name="field" id="field" class="form-control mb-3"
                                            onchange=showInput(this)>
                                            <option value="No field selected" selected>Select Field</option>
                                            <option value="Business">Business</option>
                                            <option value="City Authority">City Authority</option>
                                            <option value="School">School</option>
                                            <option value="Organization/Group">Organization/Group</option>

                                        </select>
                                    </div>

                                    <div class="form-group" id="institution" style="display:none">
                                        <input id="institution_name" type="text" name="" class="input-material" required
                                            data-msg="Enter name of Institution">
                                        <label for="" class="label-material" id="label"> Name of institution </label>
                                    </div>

                                    <div class="form-group">
                                        <input id="fullname" type="text" name="name" required
                                            data-msg="Please enter your full name" class="input-material">
                                        <label for="fullname" class="label-material">Full name of account
                                            handler</label>
                                    </div>


                                    <div class="form-group">
                                        <input id="phone" type="text" name="name" required
                                            data-msg="Please enter your phone number" class="input-material">
                                        <label for="phone" class="label-material">Phone
                                            number</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="register-email" type="email" name="registerEmail" required
                                            data-msg="Please enter a valid email address" class="input-material">
                                        <label for="register-email" class="label-material">Email Address </label>
                                    </div>
                                    <div class="form-group">
                                        <input id="register-password" type="password" name="registerPassword" required
                                            data-msg="Please enter your password" class="input-material">
                                        <label for="register-password" class="label-material">Password </label>
                                    </div>
                                    <!-- <div class="form-group terms-conditions">
                    <input id="register-agree" name="registerAgree" type="checkbox" required value="1"
                      data-msg="Your agreement is required" class="checkbox-template">
                    <label for="register-agree">Agree the terms and policy</label>
                  </div> -->
                                    <div class="form-group">
                                        <button id="register" type="submit" name="registerSubmit"
                                            class="btn btn-primary">Register</button>
                                    </div>
                                </form><small>Already have an account? </small><a href="<?=base_url()?>user"
                                    class="signup">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="copyrights text-center">
      <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a>

      </p>
    </div> -->
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
    <!-- Requests -->
    <script src="<?=base_url()?>public/requests/registration.js"> </script>
</body>

</html>