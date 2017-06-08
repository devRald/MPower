<header>
    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn">
            <p>MPower</p>
        </div>
        <ul class="nav navbar-nav pull-right smooth-scroll">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#homes" type="button" aria-haspopup="true" aria-expanded="false">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#feature" type="button" aria-haspopup="true" aria-expanded="false">Feature</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#team" type="button" aria-haspopup="true" aria-expanded="false">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" type="button" aria-haspopup="true" aria-expanded="false" href="#homes" data-toggle="modal" data-target="#modal-login">Login</a>
            </li>
        </ul>
    </nav>
    <?php if($title=="HOME"){ $this->load->view('template/mask'); } ?>
</header>