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
        <h4>Tasks</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Staff</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Tasks</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
    </div>
    <!-- end::page-header -->
    <?php foreach($email_task as $info): ?>

    <div class="card">
        <div class="card-body">
            <h6 class="card-title"><?= $info->firstname.' '.$info->lastname ?></h6>
            <div class="media">
                <img src="<?=base_url('assets/main/assets/media/image/portfolio-one.jpg')?>" class="mr-3" alt="image">

                <div class="media-body">
                    <h5 class="mt-0"><?= $info->topic ?></h5>
                   <?= $info->task ?>
                </div>
            </div>
            
        </div>
        <div class="form-group" style="width:50%; margin-left:2%;">
            <label for="exampleInputPassword1">Answer Question</label>
                 <textarea required class="form-control" name="task" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>
    <?php endforeach ?>

       



</div>

</main>
<!-- end::main content -->

<?php $this->load->view('staff/fragment/footer') ?>
