<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once '../_head.php'; ?>
<!-- End Head -->

<body>
    <!-- Open App -->
    <div id="app">

        <!-- Vrm Topbar -->
        <div id="vrm-topbar">
            <!-- TopBar -->
            <?php include_once '../_topbar.php'; ?>
            <!-- End TopBar -->
        </div>
        <!-- End Vrm Topbar -->

        <!-- Vrm App -->
        <div class="vrm-app">
            <!-- Vrm Sidebar -->
            <div id="vrm-sidebar">
                <!-- Nav -->
                <?php include_once '../_nav.php'; ?>
                <!-- End Nav -->
            </div>
            <!-- End Vrm Sidebar -->

            <!-- Vrm Content -->
            <div id="vrm-main">
                <!-- Main Page -->
                <div id="main">
                    <div class="vrm-mainsection">
                        <!-- Page Breadcrumb Section -->
                        <div class="page-heading">
                            <div class="page-title">
                                <div class="row">
                                    <div class="col-12 col-md-6 order-md-1 order-last">
                                        <h3>
                                            View : <span class="vrm-color-orange">John Doe</span>
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Breadcrumb Section -->

                        <!-- The Page -->
                        <div class="page-content">
                            <section class="row">
                                <div class="col-12 col-lg-12 col-md-12">

                                    <!-- Main -->
                                    <div class="row">
                                        <div class="col-md-9 col-9">
                                            <div class="card">
                                                <div class="card-body px-0">
                                                    <div class="row">
                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="avatar avatar-xl me-3">
                                                                        <img src="<?= $base_url; ?>/../assets/images/faces/3.jpg" alt="" srcset="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Username</label>
                                                                <input type="text" class="form-control" placeholder="admin">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Public Name</label>
                                                                <input type="text" class="form-control" placeholder="Nickname">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title">Bio Info</label>
                                                                <textarea class="form-control" rows="5"></textarea>
                                                                <small>Your Biography informantion.</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="divider divider-left">
                                                        <div class="divider-text vrm-color-orange">Contact Info</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Email Address</label>
                                                                <input type="text" class="form-control" placeholder="User Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Phone Number</label>
                                                                <input type="text" class="form-control" placeholder="Mobile Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Website</label>
                                                                <input type="text" class="form-control" placeholder="www.xyz.com">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!-- Extra -->
                                                        <div class="vrm-blog-extra" section-type="blog-extra"></div>
                                                    </div>
                                                </div>

                                                <!-- Action -->
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <a href="<?= $base_url; ?>/user/list.php" class="vrm-color-red">Close Profile</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Main -->
                                </div>
                        </div>
                        </section>
                    </div>
                    <!-- End The Page -->
                </div>

                <!-- Credit -->
                <?php include '../_credit.php'; ?>
                <!-- End Credit -->
            </div>
            <!-- End Main Page -->

        </div>
        <!-- End Vrm Content -->
    </div>
    <!-- End Vrm App -->

    </div>
    <!-- Close App -->

    <!-- Nav -->
    <?php include_once '../_footer.php'; ?>
    <!-- End Nav -->
</body>

</html>