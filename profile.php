<!DOCTYPE html>
<html lang="en">
    <?php 
        include 'header.php';
    ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body text-white">
                        </div>
                    </div>
                    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Your Profile</h1>
                    </div>
                    
                    <!-- Content Row -->
                     <div class="row">

                        <div class="col-lg-12">

                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Dropdown Card Example -->
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Your Profile</h6>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <img src="img/undraw_profile.svg" alt="" class="img-fluid">
                                            <p class="text-center h2 mt-3">Solomon Zion</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <!-- Collapsable Card Example -->
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Accordion -->
                                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Other Details</h6>
                                        </a>
                                        <!-- Card Content - Collapse -->
                                        <div class="collapse show" id="collapseCardExample">
                                            <div class="card-body">
                                                This is a collapsable card example using Bootstrap's built in collapse
                                                functionality. <strong>Click on the card header</strong> to see the card body
                                                collapse and expand!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                     </div>

                        
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    <?php include_once "footer.php"?>            

</body>

</html>