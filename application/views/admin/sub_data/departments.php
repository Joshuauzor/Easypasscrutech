<?php $this->load->view('admin/fragment/head') ?>

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
        <h4>Departments</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Info</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Departments</li>
            </ol>
        </nav>
    </div>
    <!-- end::page-header -->

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Departments</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Department</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                        <?php $i=0; 
                            foreach($department as $depart): $i++; ?>
                        <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $depart->name ?></td>
                        </tr>
                        <?php endforeach ?>
                        </tbody>
                           
                            </tfoot>
                        </table>
                    </div>
           

</div>

</main>
<!-- end::main-content -->

<?php $this->load->view('admin/fragment/footer') ?>



