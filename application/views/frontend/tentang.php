<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

 <!--  ************************* About Us Starts Here ************************** -->    
       
 <div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2 align="center">Tentang <br><?= $sistem['nama_web']?></h2>
				<hr>
				<img src="<?= base_url('uploads/sistem/'.$sistem['logo'])?>" alt="">
				<br><br>
                <?= $sistem['tentang']?>
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <i class="fas fa-user"></i>
                            <p>Menjadi Volunteer</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-search-dollar red"></i>
                            <p>Mencari Dana Bantuan</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-donate yell"></i>
                            <p>Memberikan Bantuan Donasi</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-hands-helping blu"></i>
                            <p>Membantu Sesama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php include 'komponen/footer.php';?>
