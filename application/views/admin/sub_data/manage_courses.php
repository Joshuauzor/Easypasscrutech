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
                <h4>Courses</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
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
                            
                            <h4>Add New Course</h4>
                            <form action="<?= base_url('admin/home/add_course') ?>" method="POST">
                                <div data-label="Note:" class="demo-code-preview">
                              Please fill the information correctly as it enables students and lecturers to make a proper course selection
                              </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Faculty </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="faculty" required>
                                            <option selected disabled>Select course faculty</option>
                                            <?php foreach($faculties as $faculty) : ?>
                                            <option value="<?= $faculty->id ?>"><?= $faculty->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="department" required>
                                            <option selected disabled>Select course department</option>
                                            <?php foreach($departments as $department): ?>
                                            <option value="<?= $department->id ?>"><?= $department->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="level" required>
                                            <option selected disabled>Select level offering course</option>
                                            <?php foreach($level as $level): ?>
                                                <option value="<?=$level->level ?>"><?= $level->level?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="semester" required>
                                            <option selected disabled>Select semester in which course is being offered</option>
                                            <?php foreach($semester as $semester): ?>
                                            <option value="<?= $semester->id ?>"><?= $semester->semester ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Code</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="course_code" class="form-control" id="inputEmail3" placeholder="Course Code" required> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="course_title" class="form-control" id="inputEmail3" placeholder="Course Title" required>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Credit Unit</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="credit_unit" class="form-control" id="inputEmail3" placeholder="Course Credit Unit" required>
                                    </div>
                                </div>
                               
                                <div class="row">
                                <div class="col-form-label col-sm-2 pt-0">GSS / Shared</div>

                                <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gss" id="inlineRadio1" value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gss" id="inlineRadio2" value="yes">
                                        <label class="form-check-label" for="inlineRadio2">Yes</label>
                                    </div>
                                  
                                </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info">Add</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>

                                    </div>
                                    
                                </div>
                            </form>
                          
                        </div>
                    </div>


                    <!-- remove course section -->

                    <div class="card">
                        <div class="card-body">
                            <h4>Remove Course</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="<?= base_url('admin/home/remove_course') ?>" method="POST">
                                <div data-label="Note:" class="demo-code-preview">
                              Please ensure to select as appropriate as information as it enables students and lecturers to make a proper course selection
                              </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Faculty </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="faculty" required>
                                            <option selected disabled>Select course faculty</option>
                                            <?php foreach ($faculties as $faculty): ?>
                                                <option value="<?= $faculty->id ?>"><?= $faculty->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="department" required >
                                            <option selected disabled>Select course department</option>
                                            <?php foreach ($departments as $department): ?>
                                                <option value="<?= $department->id ?>"><?= $department->name ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Course </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="courses" name="course_code"  disabled="">
                                            <option selected disabled>Select Course to remove</option>
                                            <?php foreach($course_option as $course): ?>
                                                <option value="<?= $course->course_code?>"><?= $course->course_code ?></option>
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


  <script>
            var faculty;

            $(document).ready(function(){


                $('#faculty').on('change', function(){
                    faculty = $(this).val();
                });

                
                $('#department').on('change', function(){
                    var department = $(this).val();
                    if(department == ''){
                        $('#courses').prop('disabled', true);
                    }
                    else{
                        $('#courses').prop('disabled', false);
                        $.ajax({
                            url: "<?= base_url() ?>ajax/get_courses_for_admin",
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
        </script>

<!-- end::main-content -->

<?php $this->load->view('admin/fragment/footer') ?>
