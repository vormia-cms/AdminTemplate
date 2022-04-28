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
                                            Edit Category :
                                            <a href="<?= $base_url; ?>/category/manage.php" class="btn btn-primary">
                                                <!-- list check icon -->
                                                Manage Categories <i class="bi bi-list-check"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-6 d-none d-md-block">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control" placeholder="Unique Category Name">
                                                            <small>The title is how public will see.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="title">Slug</label>
                                                            <input type="text" class="form-control" placeholder="URL friendly name">
                                                            <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="title">Parent Category</label>
                                                            <fieldset class="form-group">
                                                                <select class="form-select">
                                                                    <option>-- Parent Self --</option>
                                                                    <option>Uncategorized</option>
                                                                </select>
                                                            </fieldset>
                                                            <small>Select Parent category</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="title">Description</label>
                                                            <textarea class="form-control" rows="5"></textarea>
                                                            <small>Description usually help you to understand the tage purpose.</small>
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
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-4 col-6">
                                                        <a href="" class="vrm-color-red">Delete Category</a>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <button type="button" class="btn btn-sm btn-success w-100">
                                                            <i class="bi bi-cursor-fill"></i> Update
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