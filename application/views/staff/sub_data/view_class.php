<?php $this->load->view('staff/fragment/head') ?>

<?php $this->load->view('staff/fragment/logo') ?>

<?php $this->load->view('staff/fragment/header') ?>

<?php $this->load->view('staff/fragment/nav_menu') ?>
 
<?php $this->load->view('staff/fragment/header_logo') ?>

<?php $this->load->view('staff/fragment/search') ?>


  <!-- begin::main content -->
  <main class="main-content">

<div class="container">

    <!-- begin::page-header -->
    <div class="page-header">
        <h4>Class</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Staff</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Class</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Preview</li>
            </ol>
        </nav>
    </div>

    <!-- <a href="https://youtu.be/UB1O30fR-EE"></a> -->
   
    <!-- end::page-header -->
    <?php foreach($class as $class): ?>

    <div class="card">
        <div class="card-body">
            <h6 class="card-title"><?= $class->firstname.' '.$class->lastname ?></h6>
            <div class="media">
                <img src="<?=base_url('assets/main/assets/media/image/portfolio-one.jpg')?>" class="mr-3" alt="image">

                <div class="media-body">
                    <h5 class="mt-0"><?= $class->title ?></h5>
                   <?= $class->description ?>
                </div>  
        </div>
        <iframe width="70%" height="375" src="<?= $class->link ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <?php endforeach ?>

  




</div>

</main>
<!-- end::main content -->

<?php $this->load->view('staff/fragment/footer') ?>
