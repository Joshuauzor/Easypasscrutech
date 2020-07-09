   <!-- begin::navigation header -->
   <header class="navigation-header">
        <figure class="avatar avatar-state-success">
            <img src="<?= base_url('assets/main/assets/media/image/icon-avatar.png')?>" class="rounded-circle" alt="image">
        </figure>
            <div>
                <h5><?= $this->session->student->firstname.' '.$this->session->student->lastname ?></h5>
                <p class="text-muted">Student</p>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="<?= base_url('student/home/profile') ?>" class="btn nav-link bg-info-bright" title="Profile" data-toggle="tooltip">
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="btn nav-link bg-success-bright" title="Settings" data-toggle="tooltip">
                            <i data-feather="settings"></i>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="<?= base_url('student/login/logout') ?>" class="btn nav-link bg-danger-bright" title="Logout" data-toggle="tooltip">
                            <i data-feather="log-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <!-- end::navigation header -->