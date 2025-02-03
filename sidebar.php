<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Task <sup>Manager</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Account
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile"
                    aria-expanded="true" aria-controls="collapseProfile">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Profile</span>
                </a>
                <div id="collapseProfile" class="collapse" aria-labelledby="headingProfile" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile Components:</h6>
                        <a class="collapse-item" href="profile.php">View Profile</a>
                        <a class="collapse-item" href="#">Edit Profile</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTask"
                    aria-expanded="true" aria-controls="collapseTask">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Tasks</span>
                </a>
                <div id="collapseTask" class="collapse" aria-labelledby="headingTask"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Task Components:</h6>
                        <a class="collapse-item" href="./task_list.php?page=task_list">View Tasks</a>
                        <a class="collapse-item" href="#">Completed Tasks</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProject"
                    aria-expanded="true" aria-controls="collapseProject">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Projects</span>
                </a>
                <div id="collapseProject" class="collapse" aria-labelledby="headingProject" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Projects Available:</h6>
                        <a class="collapse-item" href="./project_list.php?page=project_list">View Project</a>
                        <?php if($_SESSION['login_type'] != 3): ?>
                        <a class="collapse-item" href="./new_project.php?page=new_project">Add Project</a>
                        <?php endif; ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - User -->
            <?php if($_SESSION['login_type'] == 1): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Users</span></a>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">All Users:</h6>
                        <a class="collapse-item" href="./new_user.php?page=new_user">Add a User</a>
                        <a class="collapse-item" href="./user_list.php?page=user_list">View all Users</a>
                    </div>
                </div>
            </li>
            <?php endif; ?>

            <!-- Nav Item - Report -->
            <?php if($_SESSION['login_type'] != 3): ?>
            <li class="nav-item">
                <a class="nav-link" href="./reports.php?page=reports">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Report</span></a>
            </li>
            <?php endif; ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <a class="btn btn-success btn-sm" href="ajax.php?action=logout">Logout</a>
            </div>

        </ul>