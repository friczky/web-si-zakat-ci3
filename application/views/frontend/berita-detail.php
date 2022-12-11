<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>


<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>
                <?= $berita['judul']?>
            </h2>
            <p>Kategori : <?= $berita['kategori']?>
            </p>
        </div>
        <div class="blog-row row">

           
            <div class="col-sm-12">
                <div class="">
                    <figure>
                        <img src="<?= base_url()?>uploads/berita/<?= $berita['thumbnail']?>" alt="">
                    </figure>
                    <div class="blog-detail">
                        <small>By
                            <?= $berita['nama']?>
                            |
                            <?= $berita['waktu_buat']?></small>
                        <h4><?= $berita['judul']?></h4>
						<hr>
                        	<?= $berita['konten']?>
                        <div class="">
                            
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

<?php include 'komponen/footer.php';?>
