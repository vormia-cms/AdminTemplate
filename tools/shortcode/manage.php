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
                                            Shortcode :
                                        </h3>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="<?= $base_url; ?>/index.php">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Shortcodes</li>
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
                                        <div class="card-body px-2 vrm-shortcode">
                                            <!-- Code Section -->
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-2">
                                                    <div class="list-group" role="tablist">
                                                        <a class="list-group-item list-group-item-action active" id="list-general-list" data-bs-toggle="list" href="#list-general" role="tab">General</a>
                                                        <a class="list-group-item list-group-item-action" id="list-inheritance-list" data-bs-toggle="list" href="#list-inheritance" role="tab">Inheritance</a>
                                                        <a class="list-group-item list-group-item-action" id="list-setting-list" data-bs-toggle="list" href="#list-setting" role="tab">Settings</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-10 mt-1">
                                                    <div class="tab-content text-justify" id="nav-tabContent">
                                                        <div class="tab-pane show active" id="list-general" role="tabpanel" aria-labelledby="list-general-list">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12">
                                                                    <ul class="vrm-shortcode-ul">
                                                                        <li class="vrm-shortcode-li has-ul">
                                                                            <h6>For Site Title: </h6>

                                                                            <code>
                                                                                &lt;?php echo vrm_shortcode('[site_title]'); ?&gt;
                                                                            </code>
                                                                            <ul class="vrm-shortcode-ul has-li">
                                                                                <li class="vrm-shortcode-li">Pass xyz as first paramenter</li>
                                                                                <li class="vrm-shortcode-li">Pass 123 as second paramenter</li>
                                                                            </ul>

                                                                            <code>
                                                                                #{[site_title]}
                                                                            </code>
                                                                            <p>Use the above shortcode for in-text shortcode execution</p>
                                                                        </li>
                                                                        <li class="vrm-shortcode-li has-ul">
                                                                            <h6>Default Tagline: </h6>

                                                                            <code>
                                                                                &lt;?php echo vrm_shortcode('[site_tagline]'); ?&gt;
                                                                            </code>
                                                                            <ul class="vrm-shortcode-ul has-li">
                                                                                <li class="vrm-shortcode-li">Does not accept any paramenter</li>
                                                                            </ul>

                                                                            <code>
                                                                                #{[site_tagline]}
                                                                            </code>
                                                                            <p>Use the above shortcode for in-text shortcode execution</p>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="list-inheritance" role="tabpanel" aria-labelledby="list-inheritance-list">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12">
                                                                    <ul class="vrm-shortcode-ul">
                                                                        <li class="vrm-shortcode-li has-ul">
                                                                            <h6>Single Inheritance: </h6>

                                                                            <code>
                                                                                &lt;?php echo vrm_shortcode('[inheritance],[id=20],[return:title]'); ?&gt;
                                                                            </code>
                                                                            <ul class="vrm-shortcode-ul has-li">
                                                                                <li class="vrm-shortcode-li">Pass xyz as first paramenter</li>
                                                                                <li class="vrm-shortcode-li">Pass 123 as second paramenter</li>
                                                                            </ul>

                                                                            <code>#{[inheritance],[id=20],[return:title]}</code>
                                                                            <span></span>
                                                                            <code>#{inheritance,[20]}</code>

                                                                            <p>Use the above shortcode for in-text shortcode execution</p>
                                                                        </li>
                                                                        <li class="vrm-shortcode-li has-ul">
                                                                            <h6>Multiple Inheritance Values: </h6>

                                                                            <code>
                                                                                &lt;?php echo vrm_shortcode('[inheritance],[id=20],[return:*]'); ?&gt;
                                                                            </code>
                                                                            <ul class="vrm-shortcode-ul has-li">
                                                                                <li class="vrm-shortcode-li">Does not accept any paramenter</li>
                                                                            </ul>

                                                                            <code>#{[inheritance],[id=20],[return:*]}</code>
                                                                            <span></span>
                                                                            <code>#{inheritance,[20],*}</code>
                                                                            <p>Use the above shortcode for in-text shortcode execution</p>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="list-setting" role="tabpanel" aria-labelledby="list-setting-list">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12">
                                                                    <ul class="vrm-shortcode-ul">
                                                                        <li class="vrm-shortcode-li has-ul">
                                                                            <h6>Settings: </h6>

                                                                            <code>
                                                                                &lt;?php echo vrm_shortcode('[setting],[id=5],[return:value]'); ?&gt;
                                                                            </code>
                                                                            <ul class="vrm-shortcode-ul has-li">
                                                                                <li class="vrm-shortcode-li">Pass xyz as first paramenter</li>
                                                                                <li class="vrm-shortcode-li">Pass 123 as second paramenter</li>
                                                                            </ul>

                                                                            <code>#{[setting],[id=5],[return:value]}</code>
                                                                            <span></span>
                                                                            <code>#{setting,[5]}</code>

                                                                            <p>Use the above shortcode for in-text shortcode execution</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- End Code Section -->
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