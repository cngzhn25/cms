<?php global $menus; ?>

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-lg">

        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-section sidebar-user my-1">
                <div class="sidebar-section-body">
                    <div class="media">
                        <a href="#" class="mr-3">
                            <img src="<?= public_url() ?>/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
                        </a>

                        <div class="media-body">
                            <div class="font-weight-semibold">Yakup Tasaksiz</div>
                            <div class="font-size-sm line-height-sm opacity-50">
                                asljdalkdjakl
                            </div>
                        </div>

                        <div class="ml-3 align-self-center">
                            <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="icon-transmission"></i>
                            </button>

                            <button type="button" class="btn btn-outline-light text-body border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                                <i class="icon-cross2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-section">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <?php foreach ($menus as $url => $menu): ?>
                        <?php   // mainContentte mainTitle ve subTitle degerlerini gosterme
                            if($url == route(1) || isset($menu["submenu"][route(1)])) {
                                $mainTitle = $menu["title"];
                                $subTitle = isset($menu["submenu"][route(1)]["title"]) ? $menu["submenu"][route(1)]["title"] : null;
                            }
                        ?>

                    <li class="nav-item <?= menu_control("submenu", $menu)  ? "nav-item-submenu " : null, menu_control(route(1), isset($menu["submenu"]) ? $menu["submenu"] : null ) || route(1) == $url ? "nav-item-open" : null;?>">
                        <a href="<?= admin_url($url) ?>" class="nav-link <?= (route(1) == $url) || menu_control(route(1), $menu)  ? "active" : null ?>">
                            <i class="icon-<?= $menu["icon"]?>"></i>
                            <i class="fa-sharp fa-solid fa-id-card"></i>
                            <span> <?= $menu["title"] ?></span>
                        </a>
                        <?php if(menu_control("submenu", $menu)): ?>
                            <ul class="nav nav-group-sub" data-submenu-title="<?=$menu["title"]?>" style="<?= isset($menu["submenu"][route(1)]) || route(1) == $url ?  "display:block": "display:none";?>">
                                <?php foreach ($menu["submenu"] as $submenuUrl => $submenu): ?>
                                <li class="nav-item <?= isset($submenu["submenu"]) ? "nav-item-submenu " : null; ?>">
                                    <a href="<?= $submenuUrl ?>" class="nav-link <?= (route(1) == $submenuUrl) ? "active" : null; ?>" >
                                        <?= $submenu["title"] ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                               </ul>
                        <?php endif; ?>
                    </li>

                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


