<?php $this->load->view('admin/fragment/head') ?>

<?php $this->load->view('admin/fragment/logo') ?>

<?php $this->load->view('admin/fragment/header') ?>

<?php $this->load->view('admin/fragment/nav_menu') ?>
 
<?php $this->load->view('admin/fragment/header_logo') ?>

<?php $this->load->view('admin/fragment/search') ?>
<!-- main content begins -->
    <!-- begin::main-content -->
    <div class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Information</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Information</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Post</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->
                <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?></div>
                <?php endif ?>

                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success"> <?= $this->session->flashdata('success') ?></div>
                <?php endif ?>
            <div class="row">
                <div class="col-md-12">

                <div class="card">
                        <div class="card-body">
                              
                            <h4>Upload Information</h4>
                            <form action="<?= base_url('admin/home/post_info') ?>" method="POST" enctype="multipart/form-data">
                            
    
                                <div data-label="Note:" class="demo-code-preview">
                              <b>Information published will be seen by all student</b>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter title">
                                            <small id="emailHelp" class="form-text text-muted">Information title
                                            
                                            </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Write Information</label>
                                    <textarea required class="form-control" name="information" id="exampleFormControlTextarea1" rows="10"></textarea>
                                </div>
                                <div class="row">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info">Post</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>

                                    </div>
                                </div>
                            </form>
                          
                        </div>
                    </div>
        

                 
                    <div class="card">
                        <div class="card-body">
                              
                            <h4>Delete Information</h4>
                            <form action="<?= base_url('admin/home/delete_info')?>" method="POST">
                            
    
                                <div data-label="Note:" class="demo-code-preview">
                              <b>Information will be deleted generally </b>
                              </div>
                              <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Information </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="info" id="info" required >
                                            <option selected disabled>Select Information</option>
                                            <?php foreach ($email_information as $info): ?>
                                                <option value="<?= $info->id ?>"><?= $info->title ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">

                            
                                </div>
    
                             
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit"  class="btn btn-danger">Delete</button>

                                    </div>
                                </div>
                            </form>
                          
                        </div>
                    </div>


                





                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->


<!-- end::main-content -->

<?php $this->load->view('admin/fragment/footer') ?>
