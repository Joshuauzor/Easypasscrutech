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
    <link rel="stylesheet" href="<?=base_url('assets/main/vendors/bundle.css')?>" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="<?=base_url('assets/main/vendors/datepicker/daterangepicker.css')?>">

    <!-- Slick -->
    <link rel="stylesheet" href="<?=base_url('assets/main/vendors/slick/slick.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/main/vendors/slick/slick-theme.css')?>">

    <!-- Vmap -->
    <link rel="stylesheet" href="<?=base_url('assets/main/vendors/vmap/jqvmap.min.css')?>">

    <!-- App styles -->
    <link rel="stylesheet" href="<?=base_url('assets/main/assets/css/app.min.css')?>" type="text/css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- check for the past question rendering-->
    <link href="<?= base_url('css/style.css')?>" rel="stylesheet" type="text/css">
    <script src="<?= base_url('js/pdf.js')?>"></script>
    <script src="<?= base_url('js/pdf.worker.js')?>"></script>
    <script src='<?= base_url('js/main.js')?>'></script>
</head>

<?php $this->load->view('student/fragment/logo') ?>

<?php $this->load->view('student/fragment/nav_header') ?>

<?php $this->load->view('student/fragment/nav_menu') ?>

<?php $this->load->view('student/fragment/header') ?>
  
<div class="container">

<div class="page-header">
<h4>Past Question</h4>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Course </a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Past</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Question</li>
    </ol>
</nav>
</div>



        <!-- end::container -->
        <div class="card">
                
                <div class="card-body">
                   
                        <h6 class="card-title">Easy Pass</h6>
                            <div class="row">
                            <div id="app">
  <div id="pdfDiv">
  <div id="pdf">
    <canvas></canvas>
  </div>
  <div id="loader-div">
     <div id="loader"></div>
  </div>
   <div id="controls" style="width: 100%;">
     <button id="previous">PREVIOUS</button>
     <button id="next">NEXT</button>
     <button id="zoom">ZOOM</button>
     <button id="reset">RESET</button>
   </div>
  
  </div>
  </div>
                            
                        
                    </div>
        </div>
        <!-- end::main-content -->
  <?php require('js/main.php'); ?>

  <?php $this->load->view('student/fragment/footer') ?>
