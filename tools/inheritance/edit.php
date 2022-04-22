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
                                            Edit Inheritance :
                                            <a href="<?= $base_url; ?>/tools/inheritance/manage.php" class="btn btn-primary">
                                                <!-- list check icon -->
                                                Manage Inheritances <i class="bi bi-list-check"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Inheritance</li>
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
                                                        <div class="col-12">
                                                            <div class="vrm-sec-box">
                                                                <div id="typeTool" data-bs-toggle="collapse" data-bs-target="#collapseType" aria-expanded="false" aria-controls="collapseType" role="button">
                                                                    <div class="px-1 py-0 vrm-bg-color-dark">
                                                                        <div class="row">
                                                                            <div class="col-10">
                                                                                <h4 class="card-title vrm-color-white">Create Inheritance Type</h4>
                                                                            </div>
                                                                            <div class="col-2">
                                                                                <div class="collapse-icon">
                                                                                    <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="collapseType" class="collapse pt-1" aria-labelledby="typeTool" data-parent="#cardAccordion">
                                                                    <div class="row px-2 mt-2">
                                                                        <div class="col-md-9 col-9">
                                                                            <div class="form-group row align-items-center">
                                                                                <div class="col-lg-12 col-12">
                                                                                    <input type="text" class="form-control" name="" placeholder="Enter Name">
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
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title">Inheritance Type</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-select">
                                                                        <option>Continent</option>
                                                                    </select>
                                                                </fieldset>
                                                                <small>Select Inheritance Type</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input type="text" class="form-control" placeholder="Inheritance Name">
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
                                                                <label for="title">Parent</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-select">
                                                                        <option>-- Parent Self --</option>
                                                                    </select>
                                                                </fieldset>
                                                                <small>Select Parent Inheritance</small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title">Description</label>
                                                                <textarea class="form-control" rows="5"></textarea>
                                                                <small>More info about the inheritance.</small>
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
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a href="" class="vrm-color-red">Delete Inheritance</a>
                                                        </div>
                                                        <div class="col-8">
                                                            <button type="button" class="btn btn-sm btn-success vrm-width-40">
                                                                <i class="bi bi-cursor-fill"></i> Update Inheritance
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