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
                                            System :
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
                        <div class="page-content vrm-sett-system" id="sett-system">
                            <section class="vrm-content-zone">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card">

                                            <div class="card-body px-0">
                                                <div class="divider divider-left">
                                                    <div class="divider-text">General Setting</div>
                                                </div>

                                                <div class="vrm-sett-general">
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Site Title</label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="title">Append Title</label>
                                                            <div class="row">
                                                                <div class="col-md-4 col-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="append">
                                                                        <label class="form-check-label" for="">
                                                                            Don't
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4 col-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="append">
                                                                        <label class="form-check-label" for="">
                                                                            After
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="append">
                                                                        <label class="form-check-label" for="">
                                                                            Before
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Site Slogan</label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Site URL</label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                                <small class="text-muted text-center">the site url for your inner-links</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Home Page URL</label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                                <small class="text-muted text-center">first page visitor will see</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Base URL</label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                                <small class="text-muted text-center">the base url for your assets</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="divider divider-left">
                                                    <div class="divider-text">Encryption</div>
                                                </div>

                                                <div class="vrm-sett-encryption ">
                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Global Encryption Key <small>256-bit key</small></label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                                <small class="text-muted text-center">Will be shared with installed add-ons</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Encryption Key <small>256-bit key</small></label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                                <small class="text-muted text-center">Private key be used while securing password</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="title">Token Key <small>64-bit WEP Keys</small></label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                                                <small class="text-muted text-center">Private used for securing tokens,cookies, and session</small>
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