<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once '../../_head.php'; ?>
<!-- End Head -->

<body>
    <!-- Open App -->
    <div id="app">

        <!-- Vrm Topbar -->
        <div id="vrm-topbar">
            <!-- TopBar -->
            <?php include_once '../../_topbar.php'; ?>
            <!-- End TopBar -->
        </div>
        <!-- End Vrm Topbar -->

        <!-- Vrm App -->
        <div class="vrm-app">
            <!-- Vrm Sidebar -->
            <div id="vrm-sidebar">
                <!-- Nav -->
                <?php include_once '../../_nav.php'; ?>
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
                                            Helpers :
                                            <a href="<?= $base_url; ?>/tools/helper/add.php" class="btn btn-primary">
                                                <!-- plus icon -->
                                                New <i class="bi bi-plus"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Helpers</li>
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
                                    <div class="card">
                                        <div class="card-body px-0">
                                            <!-- Table control -->
                                            <div class="vrm-controls px-1" section-type="controls">
                                                <div class="row">
                                                    <div class="col-md-2 mb-1">
                                                        <div class="input-group mb-3">
                                                            <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Bulk Action</button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Active</a></li>
                                                                <li><a class="dropdown-item" href="#">Deactivate</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <!-- Sort -->
                                                            <div class="col-md-5">
                                                                <div class="input-group mb-3">
                                                                    <select class="form-select custom-select">
                                                                        <option selected value="1">All</option>
                                                                        <option value="2">Active</option>
                                                                        <option value="3">Inactive</option>
                                                                        <option value="6">Deleted</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-5">
                                                                <div class="input-group mb-3">
                                                                    <select class="form-select custom-select">
                                                                        <option selected>All</option>
                                                                        <option value="1">Parent</option>
                                                                        <option value="2">Child</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <div class="input-group mb-3">
                                                                    <button class="btn btn-outline-info w-100">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <form action="" class="">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Search Helpers">
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

                                            <!-- table hover -->
                                            <div class="table-responsive px-1">
                                                <table class="table vrm-table mb-0">
                                                    <!-- Head -->
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="form-check">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th>ID</th>
                                                            <th>Creator</th>
                                                            <th>Description</th>
                                                            <th>Title</th>
                                                            <th>Slug</th>
                                                            <th>Published</th>
                                                        </tr>
                                                    </thead>
                                                    <!-- Body -->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold-500">20</td>
                                                            <td>
                                                                <span>
                                                                    <a href="">
                                                                        admin
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="vrm-td-action vrm-width-40">
                                                                <p class="vrm-font-13">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                                <div class="row my-2">
                                                                    <div class="action">
                                                                        <span class="status">
                                                                            <a href="" class="deactivate">
                                                                                <i class="bi bi-x-circle-fill"></i> Deactivate
                                                                            </a>
                                                                        </span>
                                                                        <span>
                                                                            <a href="<?= $base_url; ?>/tools/helper/edit.php">
                                                                                <i class="bi bi-pencil"></i> Edit
                                                                            </a>
                                                                        </span>
                                                                        <span class="delete">
                                                                            <a href="">
                                                                                <i class="bi bi-trash2-fill"></i> Delete
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a href="<?= $base_url; ?>/tools/helper/edit.php">
                                                                        Default Contact List
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>default-contact-list</span>
                                                            </td>
                                                            <td class="published">
                                                                <p>2022/03/15 at 8:59 am</p>
                                                                <p>Status: Active</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold-500">22</td>
                                                            <td>
                                                                <span>
                                                                    <a href="">
                                                                        superadmin
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="vrm-td-action vrm-width-40">
                                                                <p class="vrm-font-13">Social Media Links</p>
                                                                <div class="row my-2">
                                                                    <div class="action">
                                                                        <span class="status">
                                                                            <a href="" class="deactivate">
                                                                                <i class="bi bi-x-circle-fill"></i> Deactivate
                                                                            </a>
                                                                        </span>
                                                                        <span>
                                                                            <a href="<?= $base_url; ?>/tools/helper/edit.php">
                                                                                <i class="bi bi-pencil"></i> Edit
                                                                            </a>
                                                                        </span>
                                                                        <span class="delete">
                                                                            <a href="">
                                                                                <i class="bi bi-trash2-fill"></i> Delete
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a href="<?= $base_url; ?>/tools/helper/edit.php">
                                                                        Social Media Links
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>social-media</span>
                                                            </td>
                                                            <td class="published">
                                                                <p>2022/03/11 at 9:15 pm</p>
                                                                <p>Status: Active</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold-500">23</td>
                                                            <td>
                                                                <span>
                                                                    <a href="">
                                                                        admin
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="vrm-td-action vrm-width-40">
                                                                <p class="vrm-font-13">
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Facilis porro possimus aliquid, reiciendis labore magni velit harum.
                                                                </p>
                                                                <div class="row my-2">
                                                                    <div class="action">
                                                                        <span class="status">
                                                                            <a href="" class="activate">
                                                                                <i class="bi bi-check-circle-fill"></i> Activate
                                                                            </a>
                                                                        </span>
                                                                        <span>
                                                                            <a href="<?= $base_url; ?>/tools/helper/edit.php">
                                                                                <i class="bi bi-pencil"></i> Edit
                                                                            </a>
                                                                        </span>
                                                                        <span class="delete">
                                                                            <a href="">
                                                                                <i class="bi bi-trash2-fill"></i> Delete
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a href="<?= $base_url; ?>/tools/helper/edit.php">
                                                                        Developer Contacts
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span>contact-developer</span>
                                                            </td>
                                                            <td class="published">
                                                                <p>2022/03/08 at 10:59 am</p>
                                                                <p>Status: Inactive</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!-- Footer -->
                                                    <tfoot>
                                                        <tr>
                                                            <th>
                                                                <div class="form-check">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th>ID</th>
                                                            <th>Creator</th>
                                                            <th>Description</th>
                                                            <th>Title</th>
                                                            <th>Slug</th>
                                                            <th>Published</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                                <div class="vrm-admin-pagination mt-2">

                                                    <span class="px-2 pt-2 vrm-color-dark-red">Found Items: 10 </span>

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
                    <?php include '../../_credit.php'; ?>
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
    <?php include_once '../../_footer.php'; ?>
    <!-- End Nav -->
</body>

</html>