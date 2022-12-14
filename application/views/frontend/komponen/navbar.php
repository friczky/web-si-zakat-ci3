<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            <?= $sistem['email']; ?>
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            <?= $sistem['telpon']?></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                  
                    <ul class="ulright">
                       <li> <small>Folow Us </small>:</li>
                        <li>
                            <a href="https://facebook.com/<?= $sistem['facebook']?>"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/<?= $sistem['instagram']?>"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
							<a href="https://youtube.com/<?= $sistem['youtube']?>"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
					<a href="<?= base_url()?>donasi" class="btn btn-sm btn-success">Donasi</a>
					<a href="<?= base_url()?>laporan-donasi" class="btn btn-sm btn-warning">Laporan Donasi</a>
                    <!-- <button class="btn btn-sm btn-success">Donasi</button> -->
                    <!-- <button class="btn btn-sm btn-warning">Laporan Donasi</button> -->
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="<?= base_url()?>">
                        <img src="<?= base_url()?>uploads/sistem/<?= $sistem['logo']?>" width="30%" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?= base_url()?>">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url()?>tentang">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url()?>layanan">Layanan</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url()?>dokumentasi">Dokumentasi</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url()?>berita">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url()?>kontak">Kontak</a>
                                </li>

                            </ul>


                </div>
            </div>
        </div>
    </div> 
</header>
