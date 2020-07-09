   <!-- begin::navigation menu -->
   <div class="navigation-menu-body">
            <ul>
                <li class="navigation-divider">Menu</li>
                <li class="open">
                    <a href="<?= base_url('staff/home')?>">
                        <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('staff/home/student')?>">
                        <i class="nav-link-icon" data-feather="monitor"></i>
                        <span>Info</span>
                    </a>
                    <ul>
                
                        <li><a href="<?= base_url('staff/home/courses')?>">Courses</a></li>
                        <!-- <li><a href="<?= base_url('staff/home/department_info')?>">Faculties</a></li> -->
                        <li><a href="<?= base_url('staff/home/past_question')?>">Past Questions</a></li>
                        <li><a href="<?= base_url('staff/home/student')?>">Student</a></li>

                        <li><a href="<?= base_url('staff/home/staff')?>">Staff</a></li>
                      
                    </ul>
                </li>
               
                </li>
                <li class="navigation-divider">Manage</li>
                <!-- <li>
                    <a href="<?= base_url('staff/home/manage_pastquestions')?>">
                        <i class="nav-link-icon" data-feather="file"></i>
                        <span>Past Question</span>
                        <span class="badge badge-success">2</span>

                    </a>
                </li> -->
                <!-- <li>
                    <a href="<?= base_url('staff/home/manage_courses')?>">
                        <i class="nav-link-icon" data-feather="check-circle"></i>
                        <span>Courses</span>
                        <span class="badge badge-warning">2</span>
                    </a>
                </li> -->
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="calendar"></i>
                        <span>Class</span>
                    </a>
                    <ul>
                        <li> <a href="<?= base_url('staff/home/manage_class')?>">Upload Class</a></li>
                        <li> <a href="<?= base_url('staff/home/preview_class')?>">View</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="<?= base_url('staff/home/student')?>">
                        <i class="nav-link-icon" data-feather="map-pin"></i>
                        <span>Student</span>
                        <span class="badge badge-warning">2</span>

                    </a>
                </li> -->
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="calendar"></i>
                        <span>Task</span>
                    </a>
                    <ul>
                        <li> <a href="<?= base_url('staff/home/manage_task')?>">Modify Task</a></li>
                        <li> <a href="<?= base_url('staff/home/view_task')?>">View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="mail"></i>
                        <span>Information</span>
                    </a>
                    <ul>
                        <li> <a href="<?= base_url('staff/home/post_info')?>">Modify Post</a></li>
                        <li> <a href="<?= base_url('staff/home/view_info')?>">View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="map-pin"></i>
                        <span>Maps</span>
                        <span class="badge badge-warning">2</span>

                    </a>
                </li>
                <li class="navigation-divider">Extras</li>
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="user"></i>
                        <span>Staff Authentication</span>
                    </a>
                    <ul>
                        <li><a href="#">Change Email</a></li>
                        <li><a href="#">Change Password</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="user"></i>
                        <span>Lecturer Authentication</span>
                    </a>
                    <ul>
                        <li><a href="#">Register</a></li>
                        <li><a href="recover-password.html">Recovery Password</a></li>
                    </ul>
                </li> -->

            </ul>
        </div>
        <!-- end::navigation menu -->

    </div>
    <!-- end::navigation -->
