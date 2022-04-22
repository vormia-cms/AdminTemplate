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
                                            Writting :
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
                        <div class="page-content vrm-sett-reading" id="sett-blog">
                            <section class="row">
                                <div class="col-8 col-lg-8 col-md-8">
                                    <div class="card">

                                        <div class="card-body px-0">
                                            <div class="divider divider-left">
                                                <div class="divider-text">Blog &amp; Post</div>
                                            </div>

                                            <div class="vrm-sett-blogpost">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                All blog post should wait aproval from editor before publish
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                All page post should wait aproval from editor before publish
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                Default Blog Category
                                                            </label>
                                                            <select class="form-select-sm">
                                                                <option>Uncategorised</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                Default Blog Format
                                                            </label>
                                                            <select class="form-select-sm">
                                                                <option>Standard</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                Default Page Template
                                                            </label>
                                                            <select class="form-select-sm">
                                                                <option>Default</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divider divider-left">
                                                <div class="divider-text">Date Time</div>
                                            </div>

                                            <div class="vrm-sett-datetime">
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                Default Date Time Format
                                                            </label>
                                                            <input type="text" class="vrm-width-20" placeholder="F d Y H:i:S">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                Default Timezone
                                                            </label>
                                                            <select class="form-select-sm vrm-width-30">
                                                                <option>Nairobi</option>
                                                                <option>Pacific</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-check-label" for="">
                                                                First day of the week
                                                            </label>
                                                            <select class="form-select-sm vrm-width-20">
                                                                <option>Monday</option>
                                                                <option>Tuesday</option>
                                                                <option>Wednesday</option>
                                                                <option>Thursday</option>
                                                                <option>Friday</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divider divider-left">
                                                <div class="divider-text">Link</div>
                                            </div>

                                            <div class="vrm-sett-link">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="link">
                                                            <label class="form-check-label" for="">
                                                                Plain Format
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <code>http://localhost:8888/Vormia/?post=11</code>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="link">
                                                            <label class="form-check-label" for="">
                                                                Plain Title
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <code>http://localhost:8888/Vormia/sample-blog-title</code>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="link">
                                                            <label class="form-check-label" for="">
                                                                Day and Title
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <code>http://localhost:8888/Vormia/2022/04/12/sample-blog-title</code>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="link">
                                                            <label class="form-check-label" for="">
                                                                Month and Title
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <code>http://localhost:8888/Vormia/2022/04/sample-blog-title</code>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="link">
                                                            <label class="form-check-label" for="">
                                                                Blog / Page ID
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <code>http://localhost:8888/Vormia/archives/189</code>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="link">
                                                            <label class="form-check-label" for="">
                                                                Category Based
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <code>http://localhost:8888/Vormia/category-slag/page-title</code>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="link">
                                                            <label class="form-check-label" for="">
                                                                Custom Format
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <code>http://localhost:8888/Vormia/</code>
                                                        <input type="text" class="vrm-width-50" placeholder="">
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