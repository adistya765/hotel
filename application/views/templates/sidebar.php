<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-white" id="sidenavAccordion">
            <div class="sb-sidenav-menu bg-success">
                <div class="nav text-white">
                    
                    <a class="nav-link" href="<?= base_url('C_adistyaAdmin') ?>">
                        <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt text-white-50"></i></div>
                       <div class="text-white">Dashboard</div> 
                    </a>
                    <a class="nav-link" href="<?= base_url('C_adistyaUser/search') ?>">
                    
                        <div class="sb-nav-link-icon "><i class="fa-solid fa-user text-white-50"></i></div>
                       <div class="text-white">User Booking</div> 
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <!-- Room -->
                    

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon "><i class="fas fa-person-booth text-white-50"></i></div>
                        <div class="text-white"> Room </div>
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down text-white-50"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav ">
                            <?php foreach($tipeKamar as $tk) : ?>
                            <a class="nav-link text-white" href="<?= base_url('C_adistyaAdmin/room/') . $tk['nama_kamar'] ?>"><?= $tk['nama_kamar'] ?></a>
                            <?php endforeach ?>
                        </nav>
                    </div>

                    <?php if($user_pengguna['level']==1){?>
                    <!-- Master Data  -->
                    <a class="nav-link" href="<?= base_url('C_adistyaAdmin/masterData') ?>">
                        <div class="sb-nav-link-icon "><i class="fa-solid fa-gear text-white-50"></i></div>
                        <div class="text-white"> Master Daata </div>
                    </a>
                    <?php } ?>




                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">



                        </nav>
                    </div>

                </div>
            </div>

        </nav>
    </div>