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
                                            Add New Page :
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Page</li>
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
                                                        <div class="col-12 mb-3">
                                                            <div class="form-group">
                                                                <label for="title">Add Title</label>
                                                                <input type="text" class="form-control" placeholder="Add New Page Title">
                                                            </div>
                                                        </div>

                                                        <!-- Write -->
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="quill-editor" id="quill-editor"></div>
                                                            </div>
                                                        </div>

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

                                                                                <span class="blog-text blog-text-set">Deactivated</span>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Action -->
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <button type="button" class="btn btn-sm btn-primary">Save to Draft</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <button type="button" class="btn btn-sm btn-success w-100">
                                                                    <i class="bi bi-cursor-fill"></i> Publish
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Page Control -->
                                                <div class="card" order="2">
                                                    <div id="controlTool" data-bs-toggle="collapse" data-bs-target="#collapseControl" aria-expanded="true" aria-controls="collapseControl" role="button">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <h4 class="card-title">Post Control</h4>
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
                                                        <div id="collapseControl" class="collapse show pt-1" aria-labelledby="controlTool" data-parent="#cardAccordion">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="vrm-blog-box">
                                                                        <div class="vrm-bloc">
                                                                            <div class="mb-3" id="publish-control">
                                                                                <div class="row">
                                                                                    <div class="col-12 mb-1">
                                                                                        <!-- icon -->
                                                                                        <span class="blog-text">Author:</span>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <fieldset class="form-group">
                                                                                            <select class="form-select">
                                                                                                <option>Jane Doe</option>
                                                                                                <option>John Doe</option>
                                                                                            </select>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-12 mb-1">
                                                                                        <!-- icon -->
                                                                                        <span class="blog-text">Parent:</span>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <fieldset class="form-group">
                                                                                            <select class="form-select">
                                                                                                <option>--- Self ---</option>
                                                                                                <option>An introduction to vormia</option>
                                                                                                <option>At vero eos et accusamus et iusto odio</option>
                                                                                                <option>Journey of development starts here</option>
                                                                                            </select>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-12 mb-1">
                                                                                        <!-- icon -->
                                                                                        <span class="blog-text">Template:</span>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <fieldset class="form-group">
                                                                                            <select class="form-select">
                                                                                                <option>Default</option>
                                                                                                <option>Blank</option>
                                                                                            </select>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-12 mb-1">
                                                                                        <!-- icon -->
                                                                                        <span class="blog-text">Position:</span>
                                                                                    </div>

                                                                                    <div class="col-12">
                                                                                        <input type="number" class="form-control form-control-sm" placeholder="0">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card" order="3">
                                                    <div id="featuredTool" data-bs-toggle="collapse" data-bs-target="#collapseFeatured" aria-expanded="true" aria-controls="collapseFeatured" role="button">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <h4 class="card-title">Featured Image</h4>
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
                                                        <div id="collapseFeatured" class="collapse show pt-1" aria-labelledby="featuredTool" data-parent="#cardAccordion">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="vrm-blog-box">
                                                                        <div class="vrm-bloc">
                                                                            <!-- Category List -->
                                                                            <div class="row mb-3" id="publish-featured">
                                                                                <div class="col-12 mb-1">
                                                                                    <!-- icon -->
                                                                                    <i class="bi bi-image-fill"></i>
                                                                                    <span class="blog-text">Attach Image:</span>
                                                                                </div>

                                                                                <div class="col-12">
                                                                                    <div class="input-group mb-3">
                                                                                        <label class="input-group-text" for=""><i class="bi bi-upload"></i></label>
                                                                                        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" id="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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