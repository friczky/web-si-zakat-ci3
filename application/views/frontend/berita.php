<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>
                Berita
            </h2>
            <p>Menampilkan Informasi Berita Terbaru.
            </p>
        </div>
        <div class="blog-row row">

            <?php foreach ($berita as $data) : ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img
                            src="<?= base_url()?>uploads/berita/<?= $data->thumbnail?>"
                            width="100%"
                            height="200px"
                            alt="">
                    </figure>
                    <div class="blog-detail">
                        <small>By
                            <?= $data->nama?>
                            |
                            <?= $data->waktu_buat?></small>
                        <b><h4><?= $data->judul?></h4></b>
                        <hr>
                        <?= substr($data->konten,0,100)?>...
                        <hr>
                        <div class="">
                            <a href="<?= base_url('baca/'.$data->id_berita)?>" class="btn btn-primary">Baca
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'komponen/footer.php';?>
