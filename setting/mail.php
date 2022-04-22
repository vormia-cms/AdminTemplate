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
                                            Mail :
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
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
                        <div class="page-content vrm-sett-mail" id="sett-mail">
                            <section class="row">
                                <div class="col-8 col-lg-8 col-md-8">
                                    <div class="card">

                                        <div class="card-body px-0">
                                            <div class="divider divider-left">
                                                <div class="divider-text">Protocol Setting</div>
                                            </div>

                                            <div class="vrm-sett-protocol">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="protocol" protocol="php">
                                                            <label class="form-check-label" for="">
                                                                PHP Mail
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="protocol" protocol="smtp">
                                                            <label class="form-check-label" for="">
                                                                SMTP Mail
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="protocol" protocol="extension">
                                                            <label class="form-check-label" for="">
                                                                Use Extension
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divider divider-left">
                                                <div class="divider-text">Default</div>
                                            </div>

                                            <div class="vrm-sett-default">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="default">
                                                            <label class="form-check-label" for="">
                                                                Don't use defaults
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Default Sender</label>
                                                            <input type="email" class="form-control form-control-sm default" placeholder="no-reply@xyz.com">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Default Reply</label>
                                                            <input type="email" class="form-control form-control-sm default" placeholder="info@xyz.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divider divider-left">
                                                <div class="divider-text">SMTP</div>
                                            </div>

                                            <div class="vrm-sett-smtp">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Smtp Host</label>
                                                            <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Smtp User</label>
                                                            <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Smtp Password</label>
                                                            <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Smtp Port</label>
                                                            <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Smtp Timeout</label>
                                                            <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Mailtype</label>
                                                            <select class="form-select form-select-sm smtp" disabled>
                                                                <option>Text</option>
                                                                <option>Html</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Action -->
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-sm btn-success vrm-width-50 float-end">
                                                        <i class="bi bi-cursor-fill"></i> Save Settings
                                                    </button>
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