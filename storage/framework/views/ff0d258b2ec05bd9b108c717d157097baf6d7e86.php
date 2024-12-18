<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="./assets/css/auth.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/b8ff1a64eb.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <style>
    #myAlert {
      position: fixed;
      top: 20px;
      right: 20px;
    }
  </style>
</head>

<body>
  <?php if(session()->has('message')): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="myAlert">
    <strong><?php echo e(session('message')); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif; ?>
  <?php if(session()->has('message1')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
    <strong><?php echo e(session('message1')); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php endif; ?>
  <div class="container">
    <div class="loginlogo text-center mb-4">
      <img src="./assets/images/logo.png" alt="images" width="90">
    </div>
    <div class="row px-3">
      <div class="col-lg-7 col-xl-5 card flex-row mx-auto px-0">
        <!-- <div class="login-img d-none d-md-flex"></div> -->

        <div class="card-body">
          <h2 class="title text-center mt-3">
            Login
          </h2>
          <form class="form-box px-3" method="post" action="<?php echo e(route('post.login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-input">
              <span><i class="fa-solid fa-envelope"></i></i></span>
              <input type="email" name="email" placeholder="Email Address" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa-solid fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="mb-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="cb1" name="">
                <label class="custom-control-label" for="cb1">Remember me</label>
              </div>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-block">
                Login
              </button>
            </div>

            <div class="text-right">
              <a href="/show-forget-password" class="forget-link">
                Forget Password?
              </a>
            </div>

            <hr class="my-4">

            <div class="text-center mb-2">
              Don't have an account?
              <a href="<?php echo e(route('register')); ?>" class="register-link">
                Register now
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script>
    $('#myAlert').alert(); // Show the alert

    setTimeout(function() {
      $('#myAlert').alert('close'); // Hide the alert
    }, 3000);
  </script>

</body>

</html><?php /**PATH C:\Users\prabe\OneDrive\Desktop\AutoMotive\resources\views/auth/login.blade.php ENDPATH**/ ?>