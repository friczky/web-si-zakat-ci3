<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

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




<?php include 'komponen/footer.php';?>
