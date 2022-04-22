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
                                            Edit Comment :
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
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
                            <section class="row">
                                <div class="col-12 col-lg-12 col-md-12">

                                    <!-- Main -->
                                    <div class="row">
                                        <div class="col-md-9 col-9">
                                            <div class="card">
                                                <div class="card-body px-0">
                                                    <div class="row">
                                                        <div class="col-12 mb-1">
                                                            <div class="mt-2 py-1">
                                                                <!-- Permalink [Post link] -->
                                                                <div class="form-group" id="postLinkBloc">
                                                                    <label class="d-inline" for="permalink">Link:</label>
                                                                    <a href="#" id="postLinkShow" class="vrm-link vrm-link-md"><?= $base_url; ?>/personal-comment-on-post</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
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
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="vrm-blog-tool" section-type="blog-tool">
                                                <div class="card" order="1">
                                                    <div id="publishTool" data-bs-toggle="collapse" data-bs-target="#collapsePublish" aria-expanded="true" aria-controls="collapsePublish" role="button">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <h4 class="card-title">Publish</h4>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="collapse-icon">
                                                                        <i class="bi bi-caret-down-fill"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div id="collapsePublish" class="collapse show pt-1" aria-labelledby="publishTool" data-parent="#cardAccordion">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="vrm-blog-box">
                                                                        <!-- Status -->
                                                                        <div class="row mb-3" id="publish-status">
                                                                            <div class="col-12">
                                                                                <!-- icon -->
                                                                                <i class="bi bi-question-diamond-fill"></i>
                                                                                <span class="blog-text">Status:</span>

                                                                                <span class="blog-text blog-text-set">Approved</span>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Publish Date -->
                                                                        <div class="row mb-3" id="publish-date">
                                                                            <div class="col-12">
                                                                                <!-- icon -->
                                                                                <i class="bi bi-calendar3"></i>
                                                                                <span class="blog-text">Date:</span>

                                                                                <span class="blog-text blog-text-set">Today</span>
                                                                                <a href="#publish-date" class="vrm-plug-btn vrm-plug-edit">change</a>

                                                                                <div class="vrm-plug-control publish-date-zone">
                                                                                    <div class="row">
                                                                                        <div class="col-7">
                                                                                            <input type="text" class="form-control form-control-sm date datepicker-input">
                                                                                        </div>
                                                                                        <div class="col-2">
                                                                                            <button class="btn btn-sm btn-info vrm-plug-btn vrm-plug-save">Ok</button>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <a href="#publish-date" class="vrm-plug-btn vrm-plug-cancel">Cancel</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Visibility -->
                                                                        <div class="row mb-3" id="publish-visibility">
                                                                            <div class="col-12">
                                                                                <!-- icon -->
                                                                                <i class="bi bi-eye"></i>
                                                                                <span class="blog-text">Visibility:</span>

                                                                                <span class="blog-text blog-text-set">Public</span>
                                                                                <a href="#publish-visibility" class="vrm-plug-btn vrm-plug-edit">change</a>

                                                                                <div class="vrm-plug-control publish-visibility-zone">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input visibility-check" type="radio" name="visibility" value="public" checked>
                                                                                                <label class="form-check-label" for="">
                                                                                                    Public
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input visibility-check" type="radio" name="visibility" value="protected">
                                                                                                <label class="form-check-label" for="">
                                                                                                    Protected
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="vrm-plug-control-action visibility-protected-zone">
                                                                                                <div class="row">
                                                                                                    <div class="col-12">
                                                                                                        <input type="text" class="form-control form-control-sm" placeholder="Enter Unlocking Password:">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input visibility-check" type="radio" name="visibility" value="private">
                                                                                                <label class="form-check-label" for="">
                                                                                                    Private
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input visibility-check" type="radio" name="visibility" value="access">
                                                                                                <label class="form-check-label" for="">
                                                                                                    Access
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="vrm-plug-control-action visibility-access-zone">
                                                                                                <div class="row">
                                                                                                    <div class="col-12">
                                                                                                        <select class="choices form-select" multiple="multiple">
                                                                                                            <option value="author">Author</option>
                                                                                                            <option value="editor">Editor</option>
                                                                                                            <option value="user">User</option>
                                                                                                            <option value="admin">Admin</option>
                                                                                                            <option value="super">Super Admin</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mt-2">
                                                                                        <div class="col-2">
                                                                                            <button class="btn btn-sm btn-info vrm-plug-btn vrm-plug-save">Ok</button>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <a href="#publish-visibility" class="vrm-plug-btn vrm-plug-cancel">Cancel</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Status -->
                                                                        <div class="row mb-3" id="publish-status">
                                                                            <div class="col-12">
                                                                                <fieldset class="form-group">
                                                                                    <select class="form-select">
                                                                                        <option>Approve</option>
                                                                                        <option>Unapprove</option>
                                                                                        <option>Mark as spam</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Reply To -->
                                                                        <div class="row mb-3" id="publish-reply-to">
                                                                            <div class="col-12 vrm-font-13">
                                                                                <span class="blog-text">Replying to:</span>
                                                                                <a href="<?= $base_url; ?>/comment/edit.php" class="vrm-plug-btn vrm-link">Jone Doe (superadmin) comment.</a>

                                                                                <span class="blog-text">on post:</span>
                                                                                <a href="<?= $base_url; ?>/blog/edit.php" class="vrm-plug-btn vrm-link">We close the core cms chapter and...</a>
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
                                                            <div class="col-6">
                                                                <a href="" class="vrm-color-red">Delete Comment</a>
                                                            </div>
                                                            <div class="col-6">
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