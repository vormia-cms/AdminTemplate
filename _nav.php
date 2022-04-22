<div id="sidebar" class="active">
    <div class="sidebar-wrapper vrm-admin-sidebar active">
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <a href="<?= $base_url; ?>/index.php" class='sidebar-link'>
                        <i class="bi bi-grid-fill vrm-icon"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- separator -->
                <hr />

                <section class="vrm-nav-section" menu-type="content-top"></section>

                <section class="vrm-nav-section" menu-type="content">
                    <li class="sidebar-item has-sub active">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-file-earmark-word-fill vrm-color-dark-green vrm-icon"></i>
                            <span>Blogs</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item active">
                                <a href="<?= $base_url; ?>/blog/list.php">All</a>
                            </li>
                            <li class="submenu-item">
                                <a href="<?= $base_url; ?>/blog/add.php">New</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/tag/manage.php">Tags</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/category/manage.php">Categories</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/comment/manage.php">Comments</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?= $base_url; ?>/page/list.php" class='sidebar-link'>
                            <i class="bi bi-file-earmark-text-fill vrm-color-dark-green vrm-icon"></i>
                            <span>Pages</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="" class='sidebar-link'>
                            <i class="bi bi-image-fill vrm-color-blue vrm-icon"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                </section>

                <!-- separator -->
                <hr />
                <section class="vrm-nav-section" menu-type="enhance-top"></section>

                <section class="vrm-nav-section" menu-type="enhance">
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-sliders vrm-color-dark-orange vrm-icon"></i>
                            <span>Tools</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/tools/inheritance/manage.php">Inheritances</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/tools/shortcode/manage.php">Shortcodes</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Widgets</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/tools/helper/list.php">Helpers</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/tools/field/list.php">Fields</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-boxes vrm-color-dark-orange vrm-icon"></i>
                            <span>Extensions</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="">Add New</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Installed</a>
                            </li>
                        </ul>
                    </li>
                </section>

                <!-- separator -->
                <hr />

                <section class="vrm-nav-section" menu-type="control-top"></section>

                <section class="vrm-nav-section" menu-type="control">
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill vrm-color-purple vrm-icon"></i>
                            <span>Users</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/user/list.php">All</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/user/add.php">Add New</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/user/profile.php">My Profile</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-gear-fill vrm-color-dark-purple vrm-icon"></i>
                            <span>Controls</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/access/manage.php">Access</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Themes</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/fieldtype/list.php">Fields Type</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/modulelist/manage.php">Modules List</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/inheritancelist/manage.php">Inheritance List</a>
                            </li>
                        </ul>
                    </li>
                </section>

                <!-- separator -->
                <hr />

                <section class="vrm-nav-section" menu-type="setting-top"></section>

                <section class="vrm-nav-section" menu-type="setting">
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-wrench vrm-color-red vrm-icon"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/visibility.php">Visibility</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/system.php">System</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/mail.php">Mailing</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/tweak.php">Tweaks</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/media.php">Media</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/robot.php">Robots</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/writting.php">Writting</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/reading.php">Reading</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="<?= $base_url; ?>/setting/blog.php">Blog</a>
                            </li>
                        </ul>
                    </li>
                </section>

                <li class="sidebar-item  ">
                    <a href="<?= $base_url; ?>/login.php" class='sidebar-link'>
                        <i class="bi bi-power vrm-icon"></i>
                        <span>Logout</span>
                    </a>
                </li>

                <!-- separator -->
                <hr />

                <li class="sidebar-item  ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-life-preserver vrm-color-blue vrm-icon"></i>
                        <span>Documentation</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>