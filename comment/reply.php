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
                                            Reply Comment :
                                        </h3>
                                    </div>
                                    <div class="col-6 d-none d-md-block">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Comment</li>
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
                                <div class="vrm-content">
                                    <div class="row">
                                        <div class="vrm-main-zone col-lg-9 col-md-12">
                                            <div class="card">
                                                <div class="card-body px-0">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="vrm-font-13">
                                                                Replying to
                                                                <a href="<?= $base_url; ?>/comment/list.php" class="vrm-link">
                                                                    Jone Doe (superadmin) comment,
                                                                </a> on post
                                                                <a href="<?= $base_url; ?>/blog/edit.php" class="vrm-link">
                                                                    We close the core cms chapter and...
                                                                </a>
                                                            </p>
                                                            <blockquote>
                                                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur met consectetur adipisicing elit. Aspernatur</p>
                                                            </blockquote>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <div class="vrm-reply-box">
                                                                <div id="userInfo" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser" role="button">
                                                                    <div class="px-1 py-0 vrm-bg-color-dark">
                                                                        <div class="row">
                                                                            <div class="col-10">
                                                                                <h4 class="card-title vrm-color-white">User Info</h4>
                                                                            </div>
                                                                            <div class="col-2">
                                                                                <div class="collapse-icon float-end">
                                                                                    <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="collapseUser" class="collapse pt-1" aria-labelledby="userInfo" data-parent="#cardAccordion">
                                                                    <div class="row px-2 mt-2">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row align-items-center">
                                                                                <div class="col-lg-4 col-3">
                                                                                    <label class="col-form-label">Username</label>
                                                                                </div>
                                                                                <div class="col-lg-8 col-9">
                                                                                    <input type="text" class="form-control" name="" placeholder="Name">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group row align-items-center">
                                                                                <div class="col-lg-4 col-3">
                                                                                    <label class="col-form-label">Email</label>
                                                                                </div>
                                                                                <div class="col-lg-8 col-9">
                                                                                    <input type="email" class="form-control" placeholder="Email Address">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Write -->
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="quill-light" id="quill-light"></div>
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
                                                            <a href="<?= $base_url; ?>/comment/manage.php" class="vrm-link vrm-color-red">Cancel</a>
                                                        </div>
                                                        <div class="col-lg-4 col-6">
                                                            <button type="button" class="btn btn-sm btn-success w-100">
                                                                <i class="bi bi-cursor-fill"></i> Reply Comment
                                                            </button>
                                                        </div>
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