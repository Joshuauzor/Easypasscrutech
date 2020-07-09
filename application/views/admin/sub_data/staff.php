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
    <link rel="stylesheet" href="<?= base_url('assets/main/vendors/bundle.css')?>" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?= base_url('assets/main/vendors/dataTable/dataTables.min.css')?>" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="<?= base_url('assets/main/vendors/prism/prism.css')?>" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('assets/main/assets/css/app.min.css')?>" type="text/css">
</head>

<?php $this->load->view('admin/fragment/logo') ?>


<?php $this->load->view('admin/fragment/header') ?>


<?php $this->load->view('admin/fragment/nav_menu') ?>


<?php $this->load->view('admin/fragment/header_logo') ?>


<?php $this->load->view('admin/fragment/search') ?>


    <!-- begin::main-content -->
    <main class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Staff</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Staff</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

            <div class="row">
                <div class="col-md-12">

                 

                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Faculty</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <!-- body section -->
                                    <?php $i=0; 
                                        foreach($all_staff as $staff): $i++; ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $staff->firstname?></td>
                                    <td><?= $staff->lastname?></td>
                                    <td><?= $staff->email?></td>
                                    <td><?= $staff->department_name?></td>
                                    <td><?= $staff->faculty_name?></td>
                                </tr>
                                <?php endforeach ?>
                            <!-- foot section -->
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Faculty</th>
                                </tr>
                                </tfoot>
                            </table>
                          
                        </div>
                    </div>

                    <div class="card">
                        <!--  -->
                    </div>

                </div>
            </div>

        </div>

    </main>
    <!-- end::main-content -->

    <!-- begin::footer -->
    <footer>
            <div class="container">
                <div>© <script> document.write(new Date().getFullYear())</script> Easy Pass v1.0.0 Powered by <a href="#">Barefooted</a></div>
            </div>
        </footer>
        <!-- end::footer -->

    </div>
    <!-- end::main -->

<!-- Plugin scripts -->
<script src="<?= base_url('assets/main/vendors/bundle.js')?>"></script>

<!-- DataTable -->
<script src="<?= base_url('assets/main/vendors/dataTable/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/main/vendors/dataTable/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/main/vendors/dataTable/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/main/assets/js/examples/datatable.js')?>"></script>

<!-- Prism -->
<script src="<?= base_url('assets/main/vendors/prism/prism.js')?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/main/assets/js/app.min.js')?>"></script>
</body>

</html>
