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
                                            Blogs :
                                            <a href="<?= $base_url; ?>/blog/add.php" class="btn btn-primary">
                                                <!-- plus icon -->
                                                New <i class="bi bi-plus"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-6 d-none d-md-block">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
                                <div class="card">
                                    <div class="card-body px-0">
                                        <!-- Table control -->
                                        <div class="vrm-controls px-1" section-type="controls">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 mb-1 col-6">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Bulk Action</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Activate</a></li>
                                                            <li><a class="dropdown-item" href="#">Deactivate</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-lg-8 col-md-6 d-none d-md-block">
                                                    <div class="row">
                                                        <!-- Sort -->
                                                        <div class="col-lg-2 col-md-4 d-none d-md-block">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select custom-select">
                                                                    <option selected value="1">All</option>
                                                                    <option value="2">Active</option>
                                                                    <option value="3">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 col-md-4 d-none d-md-block">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select custom-select">
                                                                    <option selected>Dates</option>
                                                                    <option value="1">Dec 2021</option>
                                                                    <option value="2">Oct 2021</option>
                                                                    <option value="3">Nov 2021</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 d-none d-lg-block">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select custom-select">
                                                                    <option selected>Category</option>
                                                                    <option value="1">Uncategorized</option>
                                                                    <option value="2">Vormia</option>
                                                                    <option value="3">Core Cms</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 col-md-4">
                                                            <div class="input-group mb-3">
                                                                <button class="btn btn-outline-info w-100">Apply</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-2 col-md-4 col-12">
                                                    <form action="">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Search Blogs">
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
                                                        <td class="vrm-column vrm-check-column">
                                                            <div class="form-check">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <th class="vrm-column vrm-th-primary">ID</th>
                                                        <th class="vrm-column vrm-th-primary">Title</th>
                                                        <th class="vrm-column">Author</th>
                                                        <th class="vrm-column">Category</th>
                                                        <th class="vrm-column">Tags</th>
                                                        <th class="vrm-column">Comments</th>
                                                        <th class="vrm-column">Published</th>
                                                    </tr>
                                                </thead>
                                                <!-- Body -->
                                                <tbody>
                                                    <tr>
                                                        <th class="vrm-column vrm-check-column">
                                                            <div class="form-check">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">20</td>
                                                        <td class="vrm-column vrm-th-primary vrm-td-title" vrm-colname="Title">
                                                            <div class="vrm-td-div">
                                                                <a href="<?= $base_url; ?>/blog/edit.php">
                                                                    Hello welcome to the new vormia blog welcome to the new vormiawelcome to the new vormia
                                                                </a>

                                                                <button class="vrm-tr-more-btn">
                                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                                </button>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="action">
                                                                    <span>
                                                                        <a href="<?= $base_url; ?>/blog/edit.php">
                                                                            <i class="bi bi-pencil"></i> Edit
                                                                        </a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="">
                                                                            <i class="bi bi-eye-fill"></i> View
                                                                        </a>
                                                                    </span>
                                                                    <span class="status">
                                                                        <a href="" class="deactivate">
                                                                            <i class="bi bi-x-circle-fill"></i> Deactivate
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
                                                        <td class="vrm-column" vrm-colname="Author">
                                                            <span>
                                                                <a href="">
                                                                    admin
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Category">
                                                            <span>
                                                                <a href="">
                                                                    Uncategorized
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Tags">
                                                            <span>
                                                                <a href="">vormia</a>
                                                                <a href="">laravel</a>
                                                                <a href="">vormia</a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Comments">
                                                            <span>
                                                                <a href="<?= $base_url; ?>/comment/list.php">
                                                                    <i class="bi bi-chat-right-dots"> 1 </i>
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column published" vrm-colname="Published">
                                                            <p>2022/03/21 at 8:59 am</p>
                                                            <p>Visibility: Public</p>
                                                            <p>Status: Active</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="vrm-column vrm-check-column">
                                                            <div class="form-check">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">32</td>
                                                        <td class="vrm-column vrm-th-primary vrm-td-title" vrm-colname="Title">
                                                            <div class="vrm-td-div">
                                                                <a href="<?= $base_url; ?>/blog/edit.php" class="vrm-td-title-link">
                                                                    We close the core cms chapter and...
                                                                </a>

                                                                <button class="vrm-tr-more-btn">
                                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                                </button>
                                                            </div>

                                                            <div class="row my-2">
                                                                <div class="action">
                                                                    <span>
                                                                        <a href="<?= $base_url; ?>/blog/edit.php">
                                                                            <i class="bi bi-pencil"></i> Edit
                                                                        </a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="">
                                                                            <i class="bi bi-eye-fill"></i> View
                                                                        </a>
                                                                    </span>
                                                                    <span class="status">
                                                                        <a href="" class="activate">
                                                                            <i class="bi bi-check-circle-fill"></i> Activate
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
                                                        <td class="vrm-column" vrm-colname="Author">
                                                            <span>
                                                                <a href="">
                                                                    admin
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Category">
                                                            <span>
                                                                <a href="">
                                                                    Core CMS
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Tags">
                                                            <span>-</span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Comments">
                                                            <span>
                                                                <a href="<?= $base_url; ?>/comment/list.php">
                                                                    <i class="bi bi-chat-right-dots"> 2 </i>
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column published" vrm-colname="Published">
                                                            <p>2022/03/21 at 8:59 am</p>
                                                            <p>Visibility: Hidden</p>
                                                            <p>Status: Deactivated</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="vrm-column vrm-check-column">
                                                            <div class="form-check">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td class="vrm-column text-bold-500 vrm-th-primary" vrm-colname="ID">337777</td>
                                                        <td class="vrm-column vrm-th-primary vrm-td-title" vrm-colname="Title">
                                                            <div class="vrm-td-div">
                                                                <a href="<?= $base_url; ?>/blog/edit.php">
                                                                    It bootcamp ready to go
                                                                </a>

                                                                <button class="vrm-tr-more-btn">
                                                                    <i class="bi bi-arrow-down-circle-fill"></i>
                                                                </button>
                                                            </div>
                                                            <div class="row my-2">
                                                                <div class="action">
                                                                    <span>
                                                                        <a href="<?= $base_url; ?>/blog/edit.php">
                                                                            <i class="bi bi-pencil"></i> Edit
                                                                        </a>
                                                                    </span>
                                                                    <span>
                                                                        <a href="">
                                                                            <i class="bi bi-eye-fill"></i> View
                                                                        </a>
                                                                    </span>
                                                                    <span class="status">
                                                                        <a href="" class="deactivate">
                                                                            <i class="bi bi-x-circle-fill"></i> Deactivate
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
                                                        <td class="vrm-column" vrm-colname="Author">
                                                            <span>
                                                                <a href="">
                                                                    admin
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Category">
                                                            <span>
                                                                <a href="">
                                                                    Bootcamp
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Tags">
                                                            <span>
                                                                <a href="">bootcamp</a>
                                                                <a href="">vormia</a>
                                                                <a href="">it</a>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column" vrm-colname="Comments">
                                                            <span>
                                                                <i class="bi bi-chat-right-dots"> 0</i>
                                                            </span>
                                                        </td>
                                                        <td class="vrm-column published" vrm-colname="Published">
                                                            <p>2022/03/21 at 8:59 am</p>
                                                            <p>Visibility: Private</p>
                                                            <p>Status: Active</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!-- Footer -->
                                                <tfoot>
                                                    <tr>
                                                        <td class="vrm-column vrm-check-column">
                                                            <div class="form-check">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" class="form-check-input vrm-td-check" name="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <th class="vrm-column vrm-th-primary">ID</th>
                                                        <th class="vrm-column vrm-th-primary">Title</th>
                                                        <th class="vrm-column">Author</th>
                                                        <th class="vrm-column">Category</th>
                                                        <th class="vrm-column">Tags</th>
                                                        <th class="vrm-column">Comments</th>
                                                        <th class="vrm-column">Published</th>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                            <div class="vrm-admin-pagination mt-2">
                                                <span class="vrm-color-dark-red align-self-start">Found Items: 300 </span>

                                                <nav aria-label="navigation">
                                                    <ul class="pagination pagination-primary">
                                                        <li class="page-item disabled d-none d-md-block"><a class="page-link" href="#">First</a></li>
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
                                                        <li class="page-item active d-none d-md-block"><a class="page-link" href="#">Last</a></li>
                                                    </ul>
                                                </nav>
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