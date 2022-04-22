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
                                            Categories :
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Tags</li>
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
                                <div class="col-4 col-lg-4 col-md-4">
                                    <div class="card">
                                        <div class="card-title mb-1">
                                            <h5><span>Add New Category</span></h5>
                                        </div>

                                        <div class="card-body px-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" placeholder="Unique Category Name">
                                                        <small>The title is how public will see.</small>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="title">Slug</label>
                                                        <input type="text" class="form-control" placeholder="URL friendly name">
                                                        <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                                    </div>
                                                </div>

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

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="title">Description</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                        <small>Description usually help you to understand the tage purpose.</small>
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
                                                        <i class="bi bi-cursor-fill"></i> Add Category
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 col-md-8">
                                    <div class="card">
                                        <div class="card-body px-0">
                                            <!-- Table control -->
                                            <div class="vrm-controls px-1" section-type="controls">
                                                <div class="row">
                                                    <div class="col-md-2 mb-1">
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

                                                    <div class="col-md-10">
                                                        <form action="" class="float-end vrm-width-60">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Search Categories">
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
                                                            <th>Title</th>
                                                            <th>Slug</th>
                                                            <th>Parent</th>
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
                                                            <td class="text-bold-500">31</td>
                                                            <td>
                                                                <a href="">
                                                                    Uncategorized
                                                                </a>
                                                                <div class="row my-2">
                                                                    <div class="action">
                                                                        <span>
                                                                            <a href="<?= $base_url; ?>/category/edit.php">
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
                                                            <td>
                                                                <span>uncategorized</span>
                                                            </td>
                                                            <td>
                                                                <span>-</span>
                                                            </td>
                                                            <td class="published">
                                                                <p>Visibility: Public</p>
                                                                <p>Count: 5</p>
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
                                                            <td class="text-bold-500">33</td>
                                                            <td>
                                                                <a href="">
                                                                    Leaving Core Cms
                                                                </a>
                                                                <div class="row my-2">
                                                                    <div class="action">
                                                                        <span>
                                                                            <a href="<?= $base_url; ?>/category/edit.php">
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
                                                            <td>
                                                                <span>who-code</span>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a href="<?= $base_url; ?>/category/edit.php">
                                                                        Uncategorized
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="published">
                                                                <p>Visibility: Hidden</p>
                                                                <p>Count: 2</p>
                                                                <p>Status: Deactivated</p>
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
                                                            <td class="text-bold-500">35</td>
                                                            <td>
                                                                <a href="">
                                                                    Laravel
                                                                </a>
                                                                <div class="row my-2">
                                                                    <div class="action">
                                                                        <span>
                                                                            <a href="<?= $base_url; ?>/category/edit.php">
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
                                                            <td>
                                                                <span>larevel</span>
                                                            </td>
                                                            <td>
                                                                <span>
                                                                    <a href="<?= $base_url; ?>/category/edit.php">
                                                                        Uncategorized
                                                                    </a>
                                                                </span>
                                                            </td>
                                                            <td class="published">
                                                                <p>Visibility: Private</p>
                                                                <p>Count: 0</p>
                                                                <p>Status: Active</p>
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
                                                            <th>Title</th>
                                                            <th>Slug</th>
                                                            <th>Parent</th>
                                                            <th>Published</th>
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