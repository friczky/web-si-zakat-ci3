<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>
                Donasi
            </h2>
            <p>Mari Berdonasi untuk membantu anak Yatim.</p>
        </p>
    </div>
   
        <div class="container">
			<form action="">
            <div class="form-group">
                <label for="">Nama Anda</label>
                <input
                    type="text"
                    name=""
                    id=""
                    class="form-control"
                    placeholder="Masukan Nama Anda"
                    aria-describedby="helpId" required>
            </div>
            <div class="form-group">
                <label for="">Jumlah Donasi</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                    </div>
                    <input
                        type="number"
                        class="form-control"
                        placeholder="Jumlah Donasi"
                        aria-describedby="basic-addon1" required>
                </div>
            </div>
			<div class="form-group">
                <label for="">Pilih Bank Tujuan</label>
                <select name="" id="" class="form-control" required>
					<?php foreach($bank as $data) : ?>
						<option data-content="<img class='email' src='https://thdoan.github.io/bootstrap-select/images/icon-chrome.png'><span class='text-dark'>Air India Express</span>" value="<?= $data->id?>"><?= $data->nama_bank ?> ( <?= $data->no_rek?> )</option>
					<?php endforeach; ?>
				</select>
            </div>
			<div class="form-group">
                <label for="">Pesan/Keterangan</label>
                <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Masukan Pesan/Keteranga/Doa" required></textarea>
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Selanjutnya">
            </div>
        </div>
		</form>

</div>
</section>

<?php include 'komponen/footer.php';?>
