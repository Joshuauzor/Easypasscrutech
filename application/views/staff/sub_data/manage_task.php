<?php $this->load->view('staff/fragment/head') ?>

<?php $this->load->view('staff/fragment/logo') ?>

<?php $this->load->view('staff/fragment/header') ?>

<?php $this->load->view('staff/fragment/nav_menu') ?>
 
<?php $this->load->view('staff/fragment/header_logo') ?>

<?php $this->load->view('staff/fragment/search') ?>
<!-- main content begins -->
    <!-- begin::main-content -->
    <div class="main-content">

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
                            <a href="#">Information</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Upload</li>
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
                              
                            <h4>Upload Task</h4>
                            <form action="<?= base_url('staff/home/upload_task') ?>" method="POST">
                            
    
                                <div data-label="Note:" class="demo-code-preview">
                              <b>Task published will be seen by all student of the selected field</b>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Topic</label>
                                    <input type="text" name="topic" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter title" required>
                                            <small id="emailHelp" class="form-text text-muted">Task title
                                            
                                            </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Write Task</label>
                                    <textarea required class="form-control" name="task" id="exampleFormControlTextarea1" rows="10"></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="level" id="level" required>
                                            <option selected disabled>Select level</option>
                                            <?php foreach($level as $level): ?>
                                                <option value="<?=$level->level ?>"><?= $level->level?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="semester" id="semester" required>
                                            <option selected disabled>Select Semester</option>
                                            <?php foreach($semester as $semester): ?>
                                                <option value="<?=$semester->semester ?>"><?= $semester->semester?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Choose Course </label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name="course_code" id="course_code" class="form-control1" disabled="">
                                            <option selected disabled>Choose Course</option>
                                                <option value=""></option>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="row">

                                <div class="col-md-8">
                             
  
                                </div>
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
                              
                            <h4>Delete Task</h4>
                            <form action="<?= base_url('staff/home/delete_task')?>" method="POST">
                            
    
                                <div data-label="Note:" class="demo-code-preview">
                              <b>Task will be deleted generally </b>
                              </div>
                              <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Topic </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="topic" id="info" required>
                                            <option selected disabled>Select Task</option>
                                            <?php foreach ($email_task as $info): ?>
                                                <option value="<?= $info->id ?>"><?= $info->topic ?></option>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
            var level_id;

            $(document).ready(function(){


                $('#level').on('change', function(){
                     level_id = $(this).val();
                // alert(level_id);
                });

                
                $('#semester').on('change', function(){
                    var semester_id = $(this).val();
                    // alert(semester_id);
                    if(level_id == ''){
                        $('#course_code').prop('disabled', true);
                    }
                    else{
                        $('#course_code').prop('disabled', false);
                        $.ajax({
                            url: "<?= base_url() ?>ajax/get_courses_staff",
                            type: "POST",
                            data: {
                                'semester_id' : semester_id,
                                'level_id' : level_id
                            },
                            dataType: 'json',
                            success: function(data){
                                $('#course_code').html(data);
                                // alert('success');
                            }, 
                            error: function(){
                                alert('No Past Question attributed to selected Semester!!!');
                            }
                        });
                    }
                });
            });
        </script>

<?php $this->load->view('staff/fragment/footer') ?>
