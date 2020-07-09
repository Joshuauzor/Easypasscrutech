<?php $this->load->view('student/fragment/head') ?>

<?php $this->load->view('student/fragment/logo') ?>

<?php $this->load->view('student/fragment/nav_header') ?>

<?php $this->load->view('student/fragment/nav_menu') ?>

<?php $this->load->view('student/fragment/header') ?>
  

        <!-- begin::main-content -->
        <div class="main-content">

            <!-- begin::container -->
            <div class="container">

                <!-- <div class="page-header">
                    <h4>Student Dashboard</h4>
                    <small class="">Student, <span class="text-primary"><?= $this->session->student->firstname.' '.$this->session->student->lastname ?></span></small>
                </div> -->
                <!-- begin::page-header -->
                <div class="page-header">
                <h4>Search Course</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Student</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                            <span>Class</span>
                                            <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-tasks"></i>
                                            </span>
                                            </span>
                                        </h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                            <h3 class="mb-0 mr-2"><?= count($class)?></h3>
                                            <p class="small text-muted mb-0 line-height-20">
                                                <span class="text-success">new</span>
                                            </p>
                                        </div>
                                        <canvas id="widget-chart1"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                            <span>Tasks</span>
                                            <span class="avatar">
                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                <i class="fa fa-copy"></i>
                                            </span>
                                            </span>
                                        </h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                            <h3 class="mb-0 mr-2"><?= count($task)?></h3>
                                            <p class="small text-muted mb-0 line-height-20">
                                                <span class="text-success">new</span>
                                            </p>
                                        </div>
                                        <canvas id="widget-chart2"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                            <span>Department</span>
                                            <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-cube"></i>
                                            </span>
                                            </span>
                                        </h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                            <h3 class="mb-0 mr-2"><?=$departments->name?></h3>
                                            <p class="small text-muted mb-0 line-height-20">
                                                <span class="text-success"></span>
                                            </p>
                                        </div>
                                        <canvas id="widget-chart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- below section -->
                        <div class="row">


                       

                    </div>
                </div>

            </div>

            
            <!-- end::container -->
            <div class="card">
                
                <div class="card-body">
                   
                        <h6 class="card-title">Search Course</h6>
                            <div class="row">

                            <div class="col-md-8">
                                    <form action="<?=base_url('student/home/past_question')?>" method="POST">
                                    <div class="form-group">
                                        <select class="form-control form-control-lg" name="level" id="level">
                                            <option selected disabled>Select Level</option>
                                            <?php foreach($displaylevel as $level): ?>
                                                <option value="<?= $level->level ?>"><?= $level->level ?></option>
                                            <?php endforeach ?>                                        
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control form-control-lg" name="semester" id="semester">
                                        <option selected disabled>Select Semester</option>
                                        <?php foreach($displaysemester as $semester): ?>
                                                <option value="<?= $semester->semester?>"><?= $semester->semester?></option>
                                        <?php endforeach ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <select class="form-control form-control-lg" name="course_code" id="course_code" class="form-control1" disabled="">
                                            <option selected disabled>Choose Course</option>
                                                <option value=""></option>
                                        </select>
                                    </div>
                                        <button type="submit" class="btn btn-primary">View</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>

                                    </form>
                                </div>
                        
                    </div>
        </div>
        <!-- end::main-content -->
    <!-- jquery -->
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
                            url: "<?= base_url() ?>ajax/get_courses",
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


       <!-- ajax -->


<?php $this->load->view('student/fragment/footer') ?>
