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
                                    <div class="col-md-6 col-sm-12">
                                        <h3>
                                            Add User :
                                            <a href="<?= $base_url; ?>/user/list.php" class="btn btn-primary">
                                                <!-- list check icon -->
                                                Manage Users <i class="bi bi-list-check"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-6 d-none d-md-block">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">User</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Breadcrumb Section -->

                        <!-- The Page -->
                        <div class="page-content">
                            <section class="vrm-content-zone">
                                <!-- Main -->
                                <div class="row">
                                    <div class="col-lg-9 col-md-12">
                                        <div class="card">
                                            <div class="card-body px-0">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">First Name</label>
                                                            <input type="text" class="form-control" placeholder="User First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="User Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Username</label>
                                                            <input type="text" class="form-control" placeholder="Unique Username">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Email Address</label>
                                                            <input type="text" class="form-control" placeholder="User Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Phone Number</label>
                                                            <input type="text" class="form-control" placeholder="Mobile Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Slug</label>
                                                            <input type="text" class="form-control" placeholder="URL friendly name">
                                                            <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Access Level</label>
                                                            <select class="form-select">
                                                                <option>author</option>
                                                                <option>user</option>
                                                                <optgroup label="Protected">
                                                                    <option>Admin</option>
                                                                    <option>Superadmin</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Passsword</label>
                                                            <input type="password" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="title">Confirm Passsword</label>
                                                            <input type="password" class="form-control" placeholder="">
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
                                                <div class="row justify-content-end">
                                                    <div class="col-lg-4 col-6">
                                                        <button type="button" class="btn btn-sm btn-success w-100 float-end">
                                                            <i class="bi bi-cursor-fill"></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Main -->
                            </section>
                        </div>
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