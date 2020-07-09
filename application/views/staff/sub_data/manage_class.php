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
                <h4>Class</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Staff</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Class</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage</li>
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
                              
                            <h4>Upload Class</h4>
                            <form action="<?= base_url('staff/home/upload_class') ?>" method="POST">
                            
    
                                <div data-label="Note:" class="demo-code-preview">
                              <b>Lecture published will be seen by all student of the selected field</b>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Topic</label>
                                    <input type="text" name="topic" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter topic">
                                            <small id="emailHelp" class="form-text text-muted">Lecture Topic
                                            
                                            </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea required class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Link</label>
                                    <textarea required class="form-control" name="link" id="exampleFormControlTextarea1" rows="10"></textarea>
                                </div>
                                <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Faculty </label>
                                <div class="col-sm-10">
                                <select name="faculty_id" id="faculty" class="form-control">
                                    <option value="" selected disabled>Select Faculty</option>
                                    <?php foreach ($faculties as $faculty): ?>
                                    <option value="<?= $faculty->id ?>"><?= $faculty->name ?></option>
                                    <?php endforeach ?>
                                </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Department </label>
                                <div class="col-sm-10">

                                    <select name="department_id" id="department" class="form-control" disabled="">
                                        <option value="" selected disabled>Select Department</option>
                                        <?php foreach($department as $dept): ?>
                                            <option value="<?= $dept->id ?>"><?= $dept->name ?></option>
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
                                            <option selected disabled>Select Semester offering Course</option>
                                            <?php foreach($semester as $semester): ?>
                                                <option value="<?=$semester->semester ?>"><?= $semester->semester?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
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
                              
                            <h4>Delete Class</h4>
                            <form action="<?= base_url('staff/home/delete_class')?>" method="POST">
                            
    
                                <div data-label="Note:" class="demo-code-preview">
                              <b>Class will be deleted generally </b>
                              </div>
                              <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Class </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="class" id="info" required >
                                            <option selected disabled>Select Class</option>
                                            <?php foreach ($email_class as $class): ?>
                                                <option value="<?= $class->id ?>"><?= $class->title ?></option>
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
		$(document).ready(function(){
			$('#faculty').on('change', function(){
			var id = $(this).val();
			if(id == '')
			{
				$('#department').prop('disabled', true)
			} 
			else
			{
				$('#department').prop('disabled', false)
				$.ajax({
					url:"<?= base_url() ?>ajax/get_department",
					type: "POST",
					data: {'id' : id},
					dataType: 'json',
					success: function(data){
						$('#department').html(data);  
					},
					error: function(){
						alert('An Error Occured, please refresh page!');
					}
				});
			}
		});
		});
  </script>

<?php $this->load->view('staff/fragment/footer') ?>
