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
                <h4>Faculty</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Faculty</li>
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
                            <h4>Add New Faculty</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="<?= base_url('admin/home/add_faculties') ?>" method="POST">
                                    <div data-label="Note:" class="demo-code-preview">
                              Please fill the information correctly as it enables students and lecturers to make a proper faculty selection
                              </div>
                    
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Faculty</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="faculty" class="form-control" id="inputEmail3" placeholder="Name of Faculty" required>
                                    </div>
                                </div>

                                <div class="row">
                              

                               
                            </div>
                            
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                    <button type="submit" class="btn btn-info">Add</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>

                                    </div>
                                    
                                </div>
                            </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- remove Faculty section -->

                    <div class="card">
                        <div class="card-body">
                            <h4>Remove Faculty</h4>
                            <div class="row">
                                <div class="col-md-8">
                            <form action="<?= base_url('admin/home/remove_faculties') ?>" method="POST">
                                <div data-label="Note:" class="demo-code-preview">
                              Please ensure to select as appropriate as information as it enables students and lecturers to make a proper faculty selection
                              </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Faculty </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="faculty" required>
                                            <option selected disabled>Select Faculty to remove</option>
                                            <?php foreach ($faculties as $faculty): ?>
                                                <option value="<?= $faculty->id ?>"><?= $faculty->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                         
                                <div class="row">
                             
                                </div>
                            
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>

                                    </div>
                                    
                                </div>
                            </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>






                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->

<!-- end::main-content -->

<?php $this->load->view('admin/fragment/footer') ?>
