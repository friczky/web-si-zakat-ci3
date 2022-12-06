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
                        <img src="<?= base_url()?>uploads/berita/<?= $data->thumbnail?>" alt="">
                    </figure>
                    <div class="blog-detail">
                        <small>By
                            <?= $data->nama?>
                            |
                            <?= $data->waktu_buat?></small>
                        <h4><?= $data->judul?></h4>
                        <p><?= $data->konten?></p>
                        <div class="">
                            <a href="" class="btn btn-primary">Baca
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
