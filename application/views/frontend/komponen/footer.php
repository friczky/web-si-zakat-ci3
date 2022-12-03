<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2>Tentang Kami</h2>
                    <p>
						<?= $sistem['tentang']?>
				</p>
                </div>

                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Kontak Kami</h2>
                    <address class="md-margin-bottom-40">
                        <?= $sistem['nama_web']?> <br>
                        Telpon: <?= $sistem['telpon']?> <br>
                        Email: <a href="mailto:<?= $sistem['email']?>" class=""><?= $sistem['email']?></a><br>
                    </address>

                </div>
            </div>
            
            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Dokumentasi</a></li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>

                  
                </div>
                  <div class="donate-link col-md-3"><a href="#" class="btn btn-primary "><span class="btn-title">Donasi</span></a></div>
            </div>
            
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="<?= base_url()?>"><?= date('Y')?> &copy; All Rights Reserved | <?= $sistem['nama_web']?></a>
                
                <span>
                <a><i class="fab fa-youtube"></i></a>
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
</body>

<script src="<?= base_url()?>assets/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url()?>assets/frontend/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/frontend/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/frontend/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="<?= base_url()?>assets/frontend/plugins/slider/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/frontend/js/script.js"></script>

</html>
