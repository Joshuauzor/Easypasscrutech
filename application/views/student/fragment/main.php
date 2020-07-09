
        <!-- begin::main-content -->
        <div class="main-content">

            <!-- begin::container -->
            <div class="container">

                <div class="page-header">
                    <h4>Student Dashboard</h4>
                    <small class="">Welcome, <span class="text-primary"><?= $this->session->student->firstname.' '.$this->session->student->lastname ?></span></small>
                </div>

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
                            
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Faculty</h6>
                                        <p class="text-muted"></p>
                                        <h2 class="number-font"><?=$faculties->name?></h2>
                                        <div class="progress" style="height: 10px">
                                            <div class="progress-bar w-100 bg-primary" role="progressbar"></div>
                                            <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                            <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                                        </div>
                                        <div class="row mt-3 pt-3">
                                            <div class="col border-right">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-info mr-1"></span>Level
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= $this->session->student->level ?></h5>
                                            </div>
                                            <div class="col border-right">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-success mr-1"></span>Department Info
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($lecturer_info) ?></h5>
                                            </div>
                                            <div class="col">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-warning mr-1"></span> GSS / Shared 
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($gss_info) ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                               
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Institution</h6>
                                        <p class="text-muted"></p>
                                        <h2 class="number-font">Cross River University of Technology</h2>
                                        <div class="progress" style="height: 10px">
                                            <!-- <div class="progress-bar w-25 bg-primary" role="progressbar"></div> -->
                                            <div class="progress-bar w-100 bg-info" role="progressbar"></div>
                                            <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                                        </div>
                                        <div class="row mt-3 pt-3">
                                            <!-- <div class="col border-right">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-primary mr-1"></span> Sales
                                                </p>
                                                <h5 class="mt-2 mb-0">25%</h5>
                                            </div> -->
                                            <div class="col border-right">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-info mr-1"></span> CRUTECH
                                                </p>
                                                <h5 class="mt-2 mb-0">P.O.B 1123</h5>
                                            </div>
                                            <div class="col">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-warning mr-1"></span> Management Info
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($admin_info)?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                        </div>


                       

                    </div>
                </div>

            </div>
            <!-- end::container -->

        </div>
        <!-- end::main-content -->
