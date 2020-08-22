<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pembayaran SPP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query -->
    <?php
    // $level = $this->session->userdata('level');
    // $querymenu = "SELECT `user_menu`.`id`, `menu`
    //             FROM `user_menu` JOIN `user_access_menu` 
    //             ON `user_menu`.`id` = `user_access_menu`.`menu_ id`
    //             WHERE `user_access_menu`.`level` = $level
    //             ORDER BY `user_access_menu`.`menu_id` ASC
    //             ";
    // $menu = $this->db->query($querymenu)->result_array();
    // var_dump($menu);
    // die;
    ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDm" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseDm" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Data</h6>
                <?php
                $user = $this->session->userdata('level');
                if ($user == 'admin') :
                ?>
                    <a class="collapse-item" href="<?= base_url('admin/datapetugas') ?>">Data Petugas</a>
                <?php endif ?>
                <a class="collapse-item" href="cards.html">Data Siswa</a>
            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTran" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-usd"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseTran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSet" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseSet" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengaturan</h6>
                <a class="collapse-item" href="utilities-color.html">Profile</a>
                <a class="collapse-item" href="utilities-border.html">Edit Profile</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
            </div>
        </div>
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->