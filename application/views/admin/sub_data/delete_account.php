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
                <h4>Delete Account</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Staff</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Delete</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Account</li>
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

                       <!-- remove course section -->

                       <div class="card">
                        <div class="card-body">
                            <h4>Delete Staff Account</h4>
                            <div class="row">
                              
                                <div class="col-md-8">
                                    <form action="<?= base_url('admin/home/delete_staff_account') ?>" method="POST">
                                <div data-label="Note:" class="demo-code-preview">
                              <b>Account deleted cannot be reversed</b>
                              </div>
                                <!-- <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Faculty </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="faculty" id="faculty" required>
                                            <option selected disabled>Select course faculty</option>
                                            <?php foreach ($faculties as $faculty): ?>
                                                <option value="<?= $faculty->id ?>"><?= $faculty->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="department" id="department" required >
                                            <option selected disabled>Select course department</option>
                                            <?php foreach ($departments as $department): ?>
                                                <option value="<?= $department->id ?>"><?= $department->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Staff </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="staff" name="staff"  disabled="">
                                            <option selected disabled>Select Staff to delete</option>
                                            <?php foreach($staff as $staff): ?>
                                                <option value="<?= $staff->id?>"><?= $staff->firstname.' '.$staff->lastname ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div> -->

                              
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Staff Email Address" required> 
                                    </div>
                                </div>
                               
                                <div class="row">
                              

                               
                            </div>
                            
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>

                                    </div>
                                    
                                </div>
                            </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- remove ends here -->

                 
                    


                





                </div>
            </div>

        </div>

    </div>
    <!-- end::main-content -->
    <!-- <script>
            var faculty;

            $(document).ready(function(){


                $('#faculty').on('change', function(){
                    faculty = $(this).val();
                });

                
                $('#department').on('change', function(){
                    var department = $(this).val();
                    if(department == ''){
                        $('#staff').prop('disabled', true);
                    }
                    else{
                        $('#staff').prop('disabled', false);
                        $.ajax({
                            url: "<?= base_url() ?>ajax/get_past_question_for_admin",
                            type: "POST",
                            data: {
                                'faculty' : faculty,
                                'department' : department
                            },
                            dataType: 'json',
                            success: function(data){
                                $('#courses').html(data);
                            }, 
                            error: function(){
                                alert('An Error Occured, please refresh this page');
                            }
                        });
                    }
                });
            });
        </script> -->

<!-- end::main-content -->

<?php $this->load->view('admin/fragment/footer') ?>
