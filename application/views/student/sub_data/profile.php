<?php $this->load->view('student/fragment/head') ?>

<?php $this->load->view('student/fragment/logo') ?>

<?php $this->load->view('student/fragment/nav_header') ?>

<?php $this->load->view('student/fragment/nav_menu') ?>

<?php $this->load->view('student/fragment/header') ?>


<!-- begin::main-content -->
<main class="main-content">

<div class="container">

    <div class="row">
        <div class="col-md-4">

        <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between align-items-center">
                        Profile
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i data-feather="edit-2" class="mr-2"></i> Edit
                        </a>
                    </h6>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">First Name:</div>
                        <div class="col-6"><?= $this->session->student->firstname?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Last Name:</div>
                        <div class="col-6"><?= $this->session->student->lastname?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Email:</div>
                        <div class="col-6"><?= $this->session->student->email?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Reg No:</div>
                        <div class="col-6"><?= $this->session->student->reg_no?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Level:</div>
                        <div class="col-6"><?= $this->session->student->level?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Semester:</div>
                        <div class="col-6"><?= $this->session->student->semester?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Faculty:</div>
                        <div class="col-6"><?= $faculty_name?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Department:</div>
                        <div class="col-6"><?= $department_name?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Mobile:</div>
                        <div class="col-6"><?= $this->session->student->phone?></div>
                    </div>
                  
                </div>
            </div>


            

        </div>
        <div class="col-md-8">

            <div class="card">
                <div class="card-body">
                <form action="<?= base_url('student/home/edit_profile') ?>"  method="POST">
                    <?php if($this->session->flashdata('email')): ?>
                                    <div class="alert alert-danger"><?= $this->session->flashdata('email') ?></div>
                                <?php endif ?>
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                                <?php endif ?>
                                <?php if($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                <?php endif ?>
                        <div class="text-right">
                            <ul class="list-inline">
                               
                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="firstname" class="form-control" id="inputEmail3" value="<?= $this->session->student->firstname?>" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lastname" class="form-control" id="inputEmail3" value="<?= $this->session->student->lastname?>" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="inputEmail3" value="<?= $this->session->student->email?>" required> 
                                    </div>
                                </div
                                ><div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Reg No</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="reg_no" class="form-control" id="inputEmail3" value="<?= $this->session->student->reg_no?>" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                    <select name="level" id="level" class="form-control" required>
                                        <option value="" selected disabled><?= $this->session->student->level?></option>
                                        <?php foreach ($level as $level): ?>
                                        <option value="<?= $level->level ?>"><?= $level->level ?></option>
                                        <?php endforeach ?>
                                    </select>      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester</label>
                                    <div class="col-sm-10">
                                    <select name="semester" id="semester" class="form-control" required>
                                        <option value="" selected disabled><?= $this->session->student->semester?></option>
                                        <?php foreach ($semester as $semester): ?>
                                        <option value="<?= $semester->semester ?>"><?= $semester->semester ?></option>
                                        <?php endforeach ?>
                                    </select>      
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Faculty</label>
                                    <div class="col-sm-10">
                                    <select name="faculty" id="faculty" class="form-control" required>
                                        <option value="" selected disabled><?= $faculty_name?></option>
                                        <?php foreach ($faculties as $faculty): ?>
                                        <option value="<?= $faculty->id ?>"><?= $faculty->name ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                    <select name="department" id="department" class="form-control" disabled="" required>
                                        <option value="" selected disabled><?= $department_name?></option>
                                            <?php foreach($department as $dept): ?>
                                        <option value="<?= $dept->id ?>"><?= $dept->name ?></option>
                                            <?php endforeach ?>
                                    </select>                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="phone" class="form-control" id="inputEmail3" value="<?= $this->session->student->phone?>" required> 
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                    <input class="form-control" type="text" placeholder="Input of wrong password will automatically log you out" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Current Password" required> 
                                    </div>
                                </div>
                                <li class="list-inline-item">
                                    <button class="btn btn-primary">Submit</button>
                                </li>
                                <li class="list-inline-item">
                                    <input type="reset" class="btn btn-secondary">
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>

</main>
<!-- end::main-content -->
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

<?php $this->load->view('student/fragment/footer') ?>



