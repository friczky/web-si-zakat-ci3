<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>
                Konfirmasi Donasi
            </h2>
            <p>Mari Berdonasi untuk membantu anak Yatim.</p>
        </p>
    </div>

    <div class="container">
        <form action="<?= base_url()?>sukses" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama</label>
                <input
                    type="text" name="nama"
                    class="form-control"
                    value="<?= $donasi['nama']?>"
                    >
            </div>
			<div class="form-group">
                <label for="">Telpon</label>
                <input
                    type="text" name="telepon"
                    class="form-control"
                    value="<?= $donasi['telepon']?>"
                    >
            </div>
            <div class="form-group">
                <label for="">Jumlah</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                    </div>
                    <input
                        type="number"
                        class="form-control"
                        placeholder="Jumlah Donasi"
                        aria-describedby="basic-addon1"
                        value="<?= $donasi['jumlah']?>"
                        name="jumlah"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="">Pesan/Keterangan</label>
                <input
                    type="text"
					name="pesan"
                    class="form-control"
                    value="<?= $donasi['pesan']?>"
                    >
            </div>
            <div class="form-group col-sm-12 row">
                <label for="">Bank Tujuan</label>
                <p></p>
				<input type="hidden" name="bank" value="<?= $bank['nama_bank']?>">
                <div class="col col-sm-2" align="left">
                    <img
                        src="<?= base_url()?>uploads/bank/<?= $bank['foto']?>"
                        width="1000px"
                        alt="">
                </div>
                <div class="col col-sm-10">
                    <b>
                        <p>
                            Nama Bank :
                            <?= $bank['nama_bank']?></p>
                    </b>
                    <h2>
                        <b>
                            <p>
                                Nomor Rekening :
                                <?= $bank['no_rek']?></p>
                        </b>
                    </h2>
                    <b>
                        <p>Nama Pemilik :<?= $bank['nama_pemilik']?></p>
                    </b>
                </div>
            </div>
            <div class="form-group">
                <label for="">Bukti Pembayaran</label>
                <input type="file" name="foto" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="submit" class="btn btn-primary" value="Kirim">
            </div>
        </form>
    </div>

</div>
</section>

<?php include 'komponen/footer.php';?>
