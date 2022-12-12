<?php 
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

  <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">

		<?php foreach ($slider as $data): ?>
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="<?= base_url()?>uploads/slider/<?= $data->foto?>" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title"><?= $data->judul?></h1>
                                    <p class="slider-text hidden-xs"><?= $data->deskripsi?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
		<?php endforeach ?>

          
        </div>
    </div>                 
                  
 <!--  ************************* About Us Starts Here ************************** -->    
       
<div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>Tentang <?= $sistem['nama_web']?></h2>
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
   
   

   

    
     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Layanan & Program</h2>
                <p>We are a non-profital & Charity raising money for child education</p> 
            </div>
            <div class="event-ro row">
				<?php foreach ($layanan as $data) : ?>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="<?= base_url('uploads/layanan/').$data->foto?>" alt="">
                        <b><h4><?= $data->nama?></h4></b>
                        
                        <!-- <p class="raises"><span>Raised : $34,425</span> / $500,000 </p> -->
                        <p class="desic"><?= $data->deskripsi?> </p>
                        <a href="donasi" class="btn btn-primary">Donasi Sekarang</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>   

    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Berita </h2>
        			<p>Menampilkan Informasi Berita Terbaru. </p>
        		</div>
        		<div class="blog-row row">

				<?php foreach ($berita as $data) : ?>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="<?= base_url()?>uploads/berita/<?= $data->thumbnail?>" width="100%" height="200px" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By <?= $data->nama?> | <?= $data->waktu_buat?></small>
								<h4><?= $data->judul?></h4>
								<hr>
								<p align="justify"><?= substr($data->konten,0,100)?>...</p>
								<hr>
								<div class="">
									<a href="<?= base_url('baca/'.$data->id_berita)?>" class="btn btn-primary">Baca </a>
								</div>
        					</div>
        				</div>
        			</div>
				<?php endforeach; ?>
        			
				
        		</div>
         	</div>
			 <center><a href="berita" class="btn btn-primary">Semua Berita</a></center>
         </section>
          
<?php 
include 'komponen/footer.php';

?>
