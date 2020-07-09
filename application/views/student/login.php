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
    <link rel="stylesheet" href="<?= base_url('assets/main/vendors/bundle.css')?>" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/main/assets/css/app.min.css')?>" type="text/css">
</head>
<body class="form-membership">



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

                  <?php if($this->session->flashdata('wrong')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('wrong') ?></div>
                  <?php endif ?>
    <h5>Sign in</h5>

    <!-- form -->
    <form action="<?= base_url('student/login')?>" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Username or email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="#" type="reset">Reset password</a>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
        <hr>
        <p class="text-muted">Login with your social media account.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
           
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="<?= base_url('student/register') ?>" class="btn btn-outline-light btn-sm">Register</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="<?= base_url('assets/main/vendors/bundle.js')?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/main/assets/js/app.min.js')?>"></script>
</body>

</html>