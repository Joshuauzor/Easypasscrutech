<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link href="<?=base_url('assets/images/barefooted.png')?>" rel="shortcut icon"/>
    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?= base_url('assets/main/vendors/bundle.css" type="text/css')?>">

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/main/assets/css/app.min.css')?>" type="text/css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class="form-membership">



<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" style="width: 60%;" src="<?= base_url('assets/main/assets/media/image/easypass-normalsvg.svg')?>" alt="image">
        <img class="logo-dark" style="width: 60%;" src="<?= base_url('assets/main/assets/media/image/easypass-normalsvg.svg')?>" alt="image">
    </div>
    <!-- ./ logo -->
                  <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('email')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('email') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('incorrect')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('incorrect') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('account')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('account') ?></div>
                  <?php endif ?> 

                  <?php if($this->session->flashdata('search')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('search') ?></div>
                  <?php endif ?>

    <h5>Create account</h5>

    <!-- form -->
    <form action="<?= base_url("student/register") ?>" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="firstname"  placeholder="Firstname" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="lastname"  placeholder="Lastname" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="phone" placeholder="Phone" required>
        </div>
       
        <div class="form-group">
            <select name="faculty_id" id="faculty" class="form-control">
                      <option value="" selected disabled>Select Faculty</option>
                      <?php foreach ($faculties as $faculty): ?>
                      <option value="<?= $faculty->id ?>"><?= $faculty->name ?></option>
                      <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <select name="department_id" id="department" class="form-control" disabled="">
                    <option value="" selected disabled>Select Department</option>
                <?php foreach($department as $dept): ?>
                    <option value="<?= $dept->id ?>"><?= $dept->name ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password"  placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="confirm_pass" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="<?= base_url('student/login')?>" class="btn btn-outline-light btn-sm">Sign in!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="<?= base_url('assets/main/vendors/bundle.js')?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/main/assets/js/app.min.js')?>"></script>


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
</body>

</html>