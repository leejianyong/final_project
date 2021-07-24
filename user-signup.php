<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Cover Sign Up | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/icon-set/style.css">
    <link rel="stylesheet" href="./assets/vendor/select2/dist/css/select2.min.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
  </head>

  <body class="d-flex align-items-center min-h-100">

    <!-- ========== HEADER ========== -->
    <header class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
      <div class="d-flex d-lg-none justify-content-between">
        <a href="index.html">
          <img class="w-100" src="./assets/svg/logos/logo.svg" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
        </a>
      </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
      <!-- Content -->
      <div class="container-fluid px-3">
        <div class="row">
          <!-- Cover -->
          <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
            <!-- Logo & Language -->
            <div class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
              <div class="d-none d-lg-flex justify-content-between">
                <a href="index.php">
                  <img class="w-100" src="./assets/svg/logos/logo.svg" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
                </a>
              </div>
            </div>
            <!-- End Logo & Language -->

            <div style="max-width: 23rem;">
              <div class="text-center mb-5">
                <img class="img-fluid" src="./assets/svg/illustrations/chat.svg" alt="Image Description" style="width: 12rem;">
              </div>

              <div class="mb-5">
                <h2 class="display-4">Build digital products with:</h2>
              </div>

              <!-- List Checked -->
              <ul class="list-checked list-checked-lg list-checked-primary list-unstyled-py-4">
                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">All-in-one tool</span>
                  Build, run, and scale your apps - end to end
                </li>

                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">Easily add &amp; manage your services</span>
                  It brings together your tasks, projects, timelines, files and more
                </li>
              </ul>
              <!-- End List Checked -->

              <div class="row justify-content-between mt-5 gx-2">
                <div class="col">
                  <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Cover -->

          <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
            <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
              <!-- Form -->
              <form class="js-validate">
                <div class="text-center mb-5">
                  <h1 class="display-4">Create your account</h1>
                  <p>Already have an account? <a href="authentication-signin-cover.html">Sign in here</a></p>
                </div>


                <div class="text-center mb-4">
                  <span class="divider text-muted">Register</span>
                </div>

                

                <label class="input-label" for="fullNameSrEmail">Full name</label>

                <!-- Form Group -->
                <div class="form-row">
                  <div class="col-sm-6">
                    <div class="js-form-message form-group">
                      <input type="text" class="form-control form-control-lg" name="fullName" id="fullNameSrEmail" placeholder="Mark" aria-label="Mark" required data-msg="Please enter your first name.">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="js-form-message form-group">
                      <input type="text" class="form-control form-control-lg" placeholder="Williams" aria-label="Williams" required data-msg="Please enter your last name.">
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrEmail">Your email</label>

                  <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Markwilliams@example.com" aria-label="Markwilliams@example.com" required data-msg="Please enter a valid email address.">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrPassword">Password</label>

                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                           data-msg="Your password is invalid. Please try again."
                           data-hs-toggle-password-options='{
                             "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                             "defaultClass": "tio-hidden-outlined",
                             "showClass": "tio-visible-outlined",
                             "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                           }'>
                    <div class="js-toggle-password-target-1 input-group-append">
                      <a class="input-group-text" href="javascript:;">
                        <i class="js-toggle-passowrd-show-icon-1 tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrConfirmPassword">Confirm password</label>

                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                           data-msg="Password does not match the confirm password."
                           data-hs-toggle-password-options='{
                             "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                             "defaultClass": "tio-hidden-outlined",
                             "showClass": "tio-visible-outlined",
                             "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                           }'>
                    <div class="js-toggle-password-target-2 input-group-append">
                      <a class="input-group-text" href="javascript:;">
                        <i class="js-toggle-passowrd-show-icon-2 tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="js-form-message form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required data-msg="Please accept our Terms and Conditions.">
                    <label class="custom-control-label text-muted" for="termsCheckbox"> I accept the <a href="#">Terms and Conditions</a></label>
                  </div>
                </div>
                <!-- End Checkbox -->

                <div class="text-center mb-5">
                  <p>Want create an company? <a href="company-signup.php">Click here</a></p>
                </div>

                <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Create an account</button>
                
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Global Compulsory  -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
    <script src="./assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="./assets/vendor/select2/dist/js/select2.full.min.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });

        
        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function() {
          $.HSCore.components.HSValidation.init($(this), {
            rules: {
              confirmPassword: {
                equalTo: '#signupSrPassword'
              }
            }
          });
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>
</html>