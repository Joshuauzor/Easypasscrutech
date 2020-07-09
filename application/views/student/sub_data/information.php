<?php $this->load->view('student/fragment/head') ?>

<?php $this->load->view('student/fragment/logo') ?>

<?php $this->load->view('student/fragment/nav_header') ?>

<?php $this->load->view('student/fragment/nav_menu') ?>

<?php $this->load->view('student/fragment/header') ?>
  <!-- begin::main content -->
  <main class="main-content">

<div class="container">

    <!-- begin::page-header -->
    <div class="page-header">
        <h4>Information</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Student</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Information</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
    </div>

    <!-- end::page-header -->
    <?php foreach($admin_info as $info): ?>

    <div class="card">
        <div class="card-body">
            <h6 class="card-title"><?= $info->firstname.' '.$info->lastname ?></h6>
            <div class="media">
                <img src="<?=base_url('assets/main/assets/media/image/portfolio-one.jpg')?>" class="mr-3" alt="image">

                <div class="media-body">
                    <h5 class="mt-0"><?= $info->title ?></h5>
                   <?= $info->information ?>
                </div>
            </div>
            
        </div>
    </div>
    <?php endforeach ?>

        <!-- second second for department -->
        <?php foreach($lecturer_info as $info): ?>

    <div class="card">
        <div class="card-body">
        <h6 class="card-title"><?= $info->firstname.' '.$info->lastname ?></h6>
        <div class="media">
            <img src="<?=base_url('assets/main/assets/media/image/portfolio-one.jpg')?>" class="mr-3" alt="image">

            <div class="media-body">
                <h5 class="mt-0"><?= $info->title ?></h5>
               <?= $info->information ?>
            </div>
        </div>
        
    </div>
    </div>
    <?php endforeach ?>



        <!-- ends -->
    <?php foreach($gss_info as $info): ?>

  <div class="card">
    <div class="card-body">
        <h6 class="card-title"><?= $info->firstname.' '.$info->lastname ?></h6>
        <div class="media">
            <img src="<?=base_url('assets/main/assets/media/image/portfolio-one.jpg')?>" class="mr-3" alt="image">

            <div class="media-body">
                <h5 class="mt-0"><?= $info->title ?></h5>
               <?= $info->information ?>
            </div>
        </div>
        
    </div>
</div>
<?php endforeach ?>



</div>

</main>
<!-- end::main content -->

<?php $this->load->view('student/fragment/footer') ?>