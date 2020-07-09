   <!-- begin::navigation menu -->
   <div class="navigation-menu-body">
            <ul>
                <li class="navigation-divider">Menu</li>
                <li class="open">
                    <a href="<?= base_url('admin/home')?>">
                        <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="monitor"></i>
                        <span>Info</span>
                    </a>
                    <ul>
                       
                        <li><a href="<?= base_url('admin/home/faculty_info')?>">Faculties</a></li>
                        <li><a href="<?= base_url('admin/home/department_info')?>">Departments</a></li>
                        <li><a href="<?= base_url('admin/home/courses')?>">Courses</a></li>
                        <li><a href="<?= base_url('admin/home/pastquestions')?>">Past Question</a></li>
                        <li><a href="<?= base_url('admin/home/staff')?>">Staff</a></li>
                        <li><a href="<?= base_url('admin/home/admin')?>">Admin</a></li>
                    </ul>
                </li>
               
                </li>
                <li class="navigation-divider">Manage</li>
                <li>
                    <a href="<?= base_url('admin/home/manage_pastquestions')?>">
                        <i class="nav-link-icon" data-feather="file"></i>
                        <span>Past Question</span>
                        <span class="badge badge-success">2</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/home/manage_courses')?>">
                        <i class="nav-link-icon" data-feather="check-circle"></i>
                        <span>Courses</span>
                        <span class="badge badge-success">2</span>
                    </a>
                </li>
               
                <li>
                    <a href="<?= base_url('admin/home/manage_faculties')?>">
                        <i class="nav-link-icon" data-feather="calendar"></i>
                        <span>Faculties</span>
                        <span class="badge badge-success">2</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/home/manage_departments')?>">
                        <i class="nav-link-icon" data-feather="calendar"></i>
                        <span>Departments</span>
                        <span class="badge badge-success">2</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="mail"></i>
                        <span>Information</span>
                    </a>
                    <ul>
                        <li> <a href="<?= base_url('admin/home/modify_info')?>">Modify Post</a></li>
                        <li> <a href="<?= base_url('admin/home/view_info')?>">View</a></li>
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
                        <span>Admin Authentication</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('admin/register') ?>">Register</a></li>
                        <li><a href="#">Change Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="nav-link-icon" data-feather="user"></i>
                        <span>Lecturer Authentication</span>
                    </a>
                    <ul>
                        <li><a href="<?= base_url('staff/register') ?>">Register</a></li>
                        <li><a href="<?= base_url('admin/home/delete_staff_account')?>">Delete Account</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- end::navigation menu -->

    </div>
    <!-- end::navigation -->
