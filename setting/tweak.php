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
                                            Tweaks :
                                        </h3>
                                    </div>
                                    <div class="col-6 d-none d-md-block">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Breadcrumb Section -->

                        <!-- The Page -->
                        <div class="page-content vrm-sett-tweak" id="sett-tweak">
                            <section class="vrm-content-zone">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card">

                                            <div class="card-body px-0">
                                                <div class="divider divider-left">
                                                    <div class="divider-text">Control</div>
                                                </div>

                                                <div class="vrm-sett-control">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Cookie Name</label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="">
                                                                <label class="form-check-label" for="">
                                                                    Upload to parent directory
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Action -->
                                            <div class="card-footer">
                                                <div class="row justify-content-end">
                                                    <div class="col-5">
                                                        <button type="button" class="btn btn-sm btn-success w-100 float-end">
                                                            <i class="bi bi-cursor-fill"></i> Save Settings
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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