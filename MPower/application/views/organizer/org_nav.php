<header>
        <ul id="slide-out" class="side-nav custom-scrollbar ps-container ps-theme-default">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                    <img src="<?= get_image_url($org_info->org_img); ?>" class="img-fluid img-circle">
                    <div class="rgba-stylish-strong">
                        <p class="user white-text"><?= $org_info->o_first_name .' '. $org_info->o_last_name; ?>
                            <br>organizer@gmail.com</p>
                    </div>
                </div>
            </li>
            <!--/. Logo -->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                <li><a href="<?= site_url('organizer'); ?>" class="collapsible-header waves-effect arrow-r"><i class="fa fa-tachometer"></i> Dashboard</a> </li>
                <li><a href="<?= site_url('organizer/profile'); ?>" class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Profile </a> </li>
                <li><a href="" class="collapsible-header waves-effect arrow-r"><i class="fa fa-wrench "></i> Settings</a> </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-calendar"></i> Post Events </a> </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Speakers </a> </li>
                 <li><a href="<?= site_url('organizer/logout'); ?>" class="collapsible-header waves-effect arrow-r"><i class="fa fa-sign-out "></i> Logout</a> </li>   
                </ul>
            </li>
        </ul>
        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">
            <!-- Breadcrumb-->
            <div class="pull-left">
                <a href="" data-activates="slide-out" class="button-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="breadcrumb-dn">
                <p>MPower</p>
            </div>
        </nav>
    </header>