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
                                            Edit Access :
                                            <a href="<?= $base_url; ?>/access/manage.php" class="btn btn-primary">
                                                <!-- list check icon -->
                                                Manage Access <i class="bi bi-list-check"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Access</li>
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

                                    <!-- Main -->
                                    <div class="row">
                                        <div class="col-md-9 col-9">
                                            <div class="card">
                                                <div class="card-body px-0">

                                                    <div class="row mb-3">
                                                        <div class="col-5">
                                                            <div class="vrm-sec-box">
                                                                <div id="typeModule" data-bs-toggle="collapse" data-bs-target="#collapseModule" aria-expanded="false" aria-controls="collapseModule" role="button">
                                                                    <div class="px-1 py-0 vrm-bg-color-dark">
                                                                        <div class="row">
                                                                            <div class="col-10">
                                                                                <h4 class="card-title vrm-color-white">Create Module</h4>
                                                                            </div>
                                                                            <div class="col-2">
                                                                                <div class="collapse-icon">
                                                                                    <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="collapseModule" class="collapse pt-1" aria-labelledby="typeModule" data-parent="#cardAccordion">
                                                                    <div class="row px-2 mt-2">
                                                                        <div class="col-md-9 col-9">
                                                                            <div class="form-group row align-items-center">
                                                                                <div class="col-lg-12 col-12">
                                                                                    <input type="text" class="form-control" name="" placeholder="Enter Module Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-3">
                                                                            <button class="btn btn-sm btn-info vrm-plug-btn vrm-plug-save">Create</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-7">
                                                            <div class="vrm-sec-box">
                                                                <div id="typePermission" data-bs-toggle="collapse" data-bs-target="#collapsePermission" aria-expanded="false" aria-controls="collapsePermission" role="button">
                                                                    <div class="px-1 py-0 vrm-bg-color-dark">
                                                                        <div class="row">
                                                                            <div class="col-10">
                                                                                <h4 class="card-title vrm-color-white">Permission List</h4>
                                                                            </div>
                                                                            <div class="col-2">
                                                                                <div class="collapse-icon">
                                                                                    <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="collapsePermission" class="collapse pt-1" aria-labelledby="typePermission" data-parent="#cardAccordion">
                                                                    <div class="row px-2 mt-2 vrm-permission-list">
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="form-check-input form-check-primary form-check-glow access-all" checked name="">
                                                                                    <label class="form-check-label" for="">All/CRUD</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                                                    <label class="form-check-label" for="">View/Read</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                                                    <label class="form-check-label" for="">Add/Create</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                                                    <label class="form-check-label" for="">Edit/Update</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                                                    <label class="form-check-label" for="">Remove/Delete</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row px-1 mt-2">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title">Visibility</label>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="radio" name="visibility" checked>
                                                                                            <label class="form-check-label" for="">
                                                                                                Global
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="radio" name="visibility">
                                                                                            <label class="form-check-label" for="">
                                                                                                Private
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="radio" name="visibility">
                                                                                            <label class="form-check-label" for="">
                                                                                                Protected
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="radio" name="visibility">
                                                                                            <label class="form-check-label" for="">
                                                                                                Public
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <small>When you call access level Private won't be visible unless requested.</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Access Type</label>

                                                                <div class="row vrm-access-type">
                                                                    <div class="col-md-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input per-module" type="radio" name="type" checked>
                                                                            <label class="form-check-label" for="">
                                                                                Per Module
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input per-user" type="radio" name="type">
                                                                            <label class="form-check-label" for="">
                                                                                Per User
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-8">
                                                            <div class="row vrm-access">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="title">Modules Allowed</label>
                                                                        <select class="form-select vrm-per-module">
                                                                            <optgroup label="Post">
                                                                                <option>All</option>
                                                                                <option>Post</option>
                                                                                <option>Tags</option>
                                                                                <option>Category</option>
                                                                                <option>Comments</option>
                                                                            </optgroup>
                                                                            <option>Pages</option>
                                                                            <optgroup label="Tools">
                                                                                <option>All</option>
                                                                                <option>Inheritance</option>
                                                                                <option>Shortcode</option>
                                                                                <option>Widgets</option>
                                                                                <option>Helpers</option>
                                                                                <option>Fields</option>
                                                                            </optgroup>
                                                                            <option>Users</option>
                                                                        </select>
                                                                        <small>Permission will be assign to these Modules</small>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 vrm-per-user">
                                                                    <div class="form-group">
                                                                        <label for="title">Select User</label>
                                                                        <select class="choices form-select multiple-remove" multiple="multiple">
                                                                            <option>John Doe (Doe of John) 22</option>
                                                                            <option>Jane Doe () 20</option>
                                                                        </select>
                                                                        <small>Permission will be assign to a user</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="title">Access Name</label>
                                                                <input type="text" class="form-control" placeholder="Blog Author">
                                                                <small>This name will be show as user access.</small>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="title">Access Slug</label>
                                                                <input type="text" class="form-control" placeholder="URL friendly name (author)">
                                                                <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title">Description</label>
                                                                <textarea class="form-control" rows="5"></textarea>
                                                                <small>More info about the access level.</small>
                                                            </div>
                                                        </div>

                                                        <!-- Extra -->
                                                        <div class="vrm-blog-extra" section-type="blog-extra"></div>
                                                    </div>

                                                    <div class="row">
                                                        <!-- Extra -->
                                                        <div class="vrm-blog-extra" section-type="blog-extra"></div>
                                                    </div>
                                                </div>

                                                <!-- Action -->
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a href="" class="vrm-color-red">Delete Access</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-sm btn-success vrm-width-40">
                                                                <i class="bi bi-cursor-fill"></i> Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Main -->
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