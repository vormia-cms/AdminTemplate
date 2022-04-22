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
                                            Inheritance List :
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">List</li>
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
                                <div class="col-lg-5 col-md-5">
                                    <div class="card">
                                        <div class="card-title mb-1">
                                            <h5><span>Manage </span></h5>
                                        </div>

                                        <div class="card-body px-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5">category,gender,location</textarea>
                                                        <small>Your inheritance list.</small>
                                                    </div>
                                                </div>

                                                <!-- Extra -->
                                                <div class="vrm-blog-extra" section-type="blog-extra"></div>
                                            </div>
                                        </div>

                                        <!-- Action -->
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-sm btn-success vrm-width-50 float-end">
                                                        <i class="bi bi-cursor-fill"></i> Update List
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="card">
                                        <div class="card-body px-0">
                                            <!-- Table control -->
                                            <div class="vrm-controls px-1" section-type="controls">
                                                <div class="row">
                                                    <div class="col align-self-end">
                                                        <div class="col-md-8">
                                                            <form action="" class="float-end vrm-width-100">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" placeholder="Search Module List">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-success" type="button">
                                                                            <i class="bi bi-search"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- table hover -->
                                            <div class="table-responsive px-1">
                                                <table class="table vrm-table mb-0">
                                                    <!-- Head -->
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Title</th>
                                                            <th>Usage</th>
                                                        </tr>
                                                    </thead>
                                                    <!-- Body -->
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-bold-500">1</td>
                                                            <td>
                                                                <p class="vrm-font-15 vrm-color-orange">
                                                                    Category
                                                                </p>
                                                            </td>
                                                            <td class="published">
                                                                <p>Count: 5</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">3</td>
                                                            <td>
                                                                <p class="vrm-font-15 vrm-color-orange">
                                                                    Gender
                                                                </p>
                                                            </td>
                                                            <td class="published">
                                                                <p>Count: 2</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-500">2</td>
                                                            <td>
                                                                <p class="vrm-font-15 vrm-color-orange">
                                                                    Location
                                                                </p>
                                                            </td>
                                                            <td class="published">
                                                                <p>Count: 0</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- Footer -->
                                                    <tfoot>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Title</th>
                                                            <th>Usage</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                                <div class="vrm-admin-pagination mt-2">

                                                    <span class="px-2 pt-2 vrm-color-dark-red">Found Items: 400 </span>

                                                    <nav aria-label="navigation">
                                                        <ul class="pagination pagination-primary">
                                                            <li class="page-item disabled"><a class="page-link" href="#">First</a></li>
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#">
                                                                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item px-2 pt-1 vrm-color-dark-red"> <span>1 to 20</span></li>
                                                            <li class="page-item active">
                                                                <a class="page-link" href="#">
                                                                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active"><a class="page-link" href="#">Last</a></li>
                                                        </ul>
                                                    </nav>
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