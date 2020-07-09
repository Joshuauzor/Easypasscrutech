<?php $this->load->view('student/fragment/head') ?>

<?php $this->load->view('student/fragment/logo') ?>

<?php $this->load->view('student/fragment/nav_header') ?>

<?php $this->load->view('student/fragment/nav_menu') ?>

<?php $this->load->view('student/fragment/header') ?>


 <!-- begin::main-content -->
 <main class="main-content">

<div class="container">

    <!-- begin::page-header -->
    <div class="page-header">
        <h4>Register Courses</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Student</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Register</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Courses</li>
            </ol>
        </nav>
    </div>
    <!-- end::page-header -->

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                    <h6 class="card-title">Courses</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th> 
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="check" value="option1">
                                    </div>
                                </th>
                                <th>Course Code</th>
                                <th>Course Title</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php 
                            foreach($dept_courses as $courses):  ?>
                        <tr>
                        <th scope="row">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" class="allcheck" type="checkbox" id="allcheck" value="<?= $courses->course_code ?>">
                            </div>
                        </th>
                        <td><?= $courses->course_code ?></td>
                        <td><?= $courses->course_title ?></td>
                        </tr>
                        <?php endforeach ?>
                        </tbody>
                           
                            </tfoot>
                        </table>
                    </div>
                    <div class="form-group row">
                                    <div class="col-sm-10">
                                    <button type="submit" class="btn btn-info">Register</button>

                    </div>
                                    
                    </div>
                    </form>

                    <form action="">
                    <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Add Carry Courses</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="course" class="form-control" id="inputEmail3" placeholder="Insert Course Code e.g GSS1103" required>
                                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-info">Add</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>

                        </div>
                                    
                    </div>
                    </form>
                

</div>

</main>
<!-- end::main-content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#check').on('click', function(){
        // $('.allcheck').prop('checked', this.checked);
        if ($(this).is(':checked')){
            $('#allcheck').attr('checked', true);
        }
        else{
            $('#allcheck').attr('checked', false);
        }
    });
</script>

<?php $this->load->view('student/fragment/footer') ?>



