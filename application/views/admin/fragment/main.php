

        <!-- begin::main-content -->
        <div class="main-content">

            <!-- begin::container -->
            <div class="container">

                <div class="page-header">
                    <h4>Admin Dashboard</h4>
                    <small class="">Welcome, <span class="text-primary"><?= $this->session->admin->firstname.' '.$this->session->admin->lastname ?></span></small>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                            <span>Total Admin</span>
                                            <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-check-circle"></i>
                                            </span>
                                            </span>
                                        </h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                            <h3 class="mb-0 mr-2"><?= count($admin)?></h3>
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
                                            <span>Total Staff</span>
                                            <span class="avatar">
                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                <i class="fa fa-tasks"></i>
                                            </span>
                                            </span>
                                        </h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                            <h3 class="mb-0 mr-2"><?= count($staff)?></h3>
                                            <p class="small text-muted mb-0 line-height-20">
                                                <span class="text-success">all</span>
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
                                            <span>Total Student</span>
                                            <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            </span>
                                        </h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                            <h3 class="mb-0 mr-2"><?= count($student) ?></h3>
                                            <p class="small text-muted mb-0 line-height-20">
                                                <span class="text-success">new</span>
                                            </p>
                                        </div>
                                        <canvas id="widget-chart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Total Customers</h6>
                                        <div class="text-center">
                                            <div class="mb-2">
                                                <span class="bar-1">2,5,9,6,5,2,4,3,7,5</span>
                                            </div>
                                            <div class="font-size-30 mb-1 font-weight-bold text-primary">1.241</div>
                                            <p class="mb-0 text-muted">
                                                <i class="fa fa-caret-up text-primary m-r-5"></i> 23% increase in Last week
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Average Order Value</h6>
                                        <div class="text-center">
                                            <div class="mb-2">
                                                <span class="bar-3">2,5,9,6,5,2,4,3,7,5</span>
                                            </div>
                                            <div class="font-size-30 mb-1 font-weight-bold text-success">$732.52</div>
                                            <p class="mb-0 text-muted">
                                                <i class="fa fa-caret-down text-danger m-r-5"></i> 4 lead less than last week
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Faculties & Departments</h6>
                                        <p class="text-muted">Total</p>
                                        <h2 class="number-font">Data</h2>
                                        <div class="progress" style="height: 10px">
                                            <!-- <div class="progress-bar w-25 bg-primary" role="progressbar"></div> -->
                                            <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                            <div class="progress-bar w-50 bg-warning" role="progressbar"></div>
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
                                                    <span class="fa fa-circle text-info mr-1"></span> Faculties
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($faculties)?></h5>
                                            </div>
                                            <div class="col">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-warning mr-1"></span> Departments
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($department)?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                               
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Courses & Information</h6>
                                        <p class="text-muted">Total</p>
                                        <h2 class="number-font">Data</h2>
                                        <div class="progress" style="height: 10px">
                                            <div class="progress-bar w-50 bg-primary" role="progressbar"></div>
                                            <div class="progress-bar w-25 bg-success" role="progressbar"></div>
                                            <div class="progress-bar w-25 bg-danger" role="progressbar"></div>
                                        </div>
                                        <div class="row mt-3 pt-3">
                                            <div class="col border-right">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-primary mr-1"></span> Courses
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($courses)?></h5>
                                            </div>
                                            <div class="col border-right">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-danger mr-1"></span> Information
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($information)?></h5>
                                            </div>
                                            <div class="col">
                                                <p class="mb-0">
                                                    <span class="fa fa-circle text-warning mr-1"></span> Past Question
                                                </p>
                                                <h5 class="mt-2 mb-0"><?= count($past_question)?></h5>
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

    