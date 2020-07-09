<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link href="<?=base_url('assets/images/barefooted.png')?>" rel="shortcut icon"/>
    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?= base_url('assets/main/vendors/bundle.css" type="text/css')?>">

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/main/assets/css/app.min.css')?>" type="text/css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class="form-membership">

<!-- begin::preloader-->
<!-- <div class="preloader">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128"
         xml:space="preserve">
        <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF"/>
        <g>
            <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z"
                  fill="#000000" fill-opacity="1"/>
            <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64"
                              dur="500ms" repeatCount="indefinite">
            </animateTransform>
        </g>
    </svg>
</div> -->
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" style="width: 60%;" src="<?= base_url('assets/main/assets/media/image/easypass-normalsvg.svg')?>" alt="image">
        <img class="logo-dark" style="width: 60%;" src="<?= base_url('assets/main/assets/media/image/easypass-normalsvg.svg')?>" alt="image">
    </div>
    <!-- ./ logo -->
                  <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('email')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('email') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('incorrect')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('incorrect') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('account')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('account') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('search')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('search') ?></div>
                  <?php endif ?>

    <h5>Create account</h5>

    <!-- form -->
    <form action="<?= base_url("admin/register") ?>" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="firstname"  placeholder="Firstname" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="lastname"  placeholder="Lastname" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="phone" placeholder="Phone" required>
        </div>
       
        <div class="form-group">
            <input type="password" class="form-control" name="password"  placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_pass" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Need an account?</p>
        <a href="<?= base_url('student/login')?>" class="btn btn-outline-light btn-sm">Contact Admin!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="<?= base_url('assets/main/vendors/bundle.js')?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/main/assets/js/app.min.js')?>"></script>


</body>

</html>