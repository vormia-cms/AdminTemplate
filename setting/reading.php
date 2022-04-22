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
                                            Reading :
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
                        <div class="page-content vrm-sett-reading" id="sett-reading">
                            <section class="row">
                                <div class="col-8 col-lg-8 col-md-8">
                                    <div class="card">

                                        <div class="card-body px-0">
                                            <div class="divider divider-left">
                                                <div class="divider-text">Blog &amp; Post</div>
                                            </div>

                                            <div class="vrm-sett-default">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                For blog use
                                                            </label>
                                                            <select class="form-select-sm">
                                                                <option>pagination</option>
                                                                <option>load more</option>
                                                                <option>auto load</option>
                                                            </select>
                                                            to view more post
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                For post use
                                                            </label>
                                                            <select class="form-select-sm">
                                                                <option>pagination</option>
                                                                <option>load more</option>
                                                                <option>auto load</option>
                                                            </select>
                                                            to view more post
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                For others use
                                                            </label>
                                                            <select class="form-select-sm">
                                                                <option>pagination</option>
                                                                <option>load more</option>
                                                                <option>auto load</option>
                                                            </select>
                                                            to view more post
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                User must login to read
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="">
                                                            <label class="form-check-label" for="">
                                                                User must login to read blog/pages
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="divider divider-left">
                                                <div class="divider-text">Home Page</div>
                                            </div>

                                            <div class="vrm-sett-homepage">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="homepage" homepage="static">
                                                                <label class="form-check-label" for="">
                                                                    Static Blog/Page
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="homepage" homepage="blog" checked>
                                                                <label class="form-check-label" for="">
                                                                    Latest Blog
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="mb-2">Homepage: </label>
                                                                <select class="form-select form-select-sm homepage-static" disabled>
                                                                    <option>Sample Vormia Page</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="" class="mb-2">Blog Post: </label>
                                                                <select class="form-select form-select-sm homepage-static" disabled>
                                                                    <option>Sample Vormia Post</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="divider divider-left">
                                                <div class="divider-text">Show</div>
                                            </div>

                                            <div class="vrm-sett-show">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-check-label" for="">
                                                                Show Max Of
                                                            </label>
                                                            <input type="text" class="vrm-width-20" placeholder="10">
                                                            <label class="form-check-label" for="">
                                                                posts per page
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-check-label" for="">
                                                                Separate pagination into
                                                            </label>
                                                            <input type="text" class="vrm-width-20" placeholder="4">
                                                            <label class="form-check-label" for="">
                                                                syndication
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-1">
                                                    <div class="col-md-12">
                                                        <label for="" class="mb-2">For each post in a feed, include</label>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="summary" summary="full" checked>
                                                                    <label class="form-check-label" for="">
                                                                        Full Text
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="summary" summary="default">
                                                                    <label class="form-check-label" for="">
                                                                        Default Excerpt
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="summary" summary="limit">
                                                                    <label class="form-check-label" for="">
                                                                        Limit Excerpt
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="number" disabled class="form-control form-control-sm excerpt-limit" placeholder="300">
                                                                </div>
                                                            </div>
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