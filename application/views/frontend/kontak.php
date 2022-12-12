<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>
                Kontak
            </h2>
            <p>Hubungi Kami Melalui Informasi dibawah Ini.</p>
        </p>
    </div>
	
	<div class="row">
		<div class="col-sm-12 row">
			<div class="col-sm-6">
				<!-- telpon , email , alamat -->
				<div class="form-group row">
					<div class="col-sm-2">
						<label for="">Email : </label>
					</div>
					<div class="col-sm-6"><?= $sistem['email']?></div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label for="">Telpon : </label>
					</div>
					<div class="col-sm-6">
					<?= $sistem['telpon']?>
					</div>
				</div>
				
			</div>
			<div class="col-sm-6">
			<?= $sistem['maps']?>
			</div>
		</div>
	</div>
	</div>
</section>




<?php include 'komponen/footer.php';?>
