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
                                            Edit Helper :
                                            <a href="<?= $base_url; ?>/tools/helper/list.php" class="btn btn-primary">
                                                <!-- list check icon -->
                                                Manage Helpers <i class="bi bi-list-check"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Helper</li>
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
                                                    <div class="row">
                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input type="text" class="form-control" placeholder="Helper Title">
                                                                <small>The title will help you identify helper</small>
                                                            </div>
                                                        </div>

                                                        <div class="col-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="title">Parent Helper</label>
                                                                <select class="form-select">
                                                                    <option>-- Parent Self --</option>
                                                                    <option>Default Contact List</option>
                                                                    <option>Social Media Links</option>
                                                                    <option>Developer Contacts</option>
                                                                </select>
                                                                <small>Select Parent Helper</small>
                                                            </div>
                                                        </div>

                                                        <div class="col-4 col-md-4">
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
                                                                <label for="title">Description</label>
                                                                <textarea class="form-control vrm-noresize" rows="3"></textarea>
                                                                <small>Description usually help you to understand the helper purpose.</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="divider divider-left">
                                                        <div class="divider-text">Add</div>
                                                    </div>

                                                    <!-- start helpers input -->
                                                    <div class="vrm-helpers-list">
                                                        <div class="vrm-helper-box">
                                                            <div class="row vrm-helper-keys" num="1">
                                                                <div class="col-3 col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="title">Key Name</label>
                                                                        <input type="text" class="form-control" placeholder="Helper Key" required>
                                                                        <small>The key will be escaped on save</small>
                                                                    </div>
                                                                </div>

                                                                <div class="col-9 col-md-9">
                                                                    <div class="form-group">
                                                                        <label for="title">Value</label>
                                                                        <textarea class="form-control vrm-noresize" placeholder="Value of the Key"></textarea>
                                                                        <small>Can be any string,float, int or Json</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end helpers input -->

                                                    <!-- start helpers action -->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group float-end vrm-helper-action">
                                                                <a class="badge bg-info" id="add-helper">
                                                                    Add Helper <i class="bi bi-plus"></i>
                                                                </a>
                                                                <a class="badge bg-danger" id="remove-helper">
                                                                    Remove Helper <i class="bi bi-dash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- end helpers action -->

                                                    <div class="row">
                                                        <!-- Extra -->
                                                        <div class="vrm-helper-extra" section-type="helper-extra"></div>
                                                    </div>
                                                </div>

                                                <!-- Action -->
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a href="" class="vrm-color-red">Delete Helper</a>
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