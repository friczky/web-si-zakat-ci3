<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

<!-- ################# Our Blog Starts Here#######################--->

<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>
                Dokumentasi
            </h2>
            <p>Dokumentasi Kegiatan Yayasan Rumah Mandiri Yogyalarta</p>.
        </p>
    </div>
    <div class="blog-row row">

        <?php foreach ($dok as $data) : ?>
        <div class="col-md-4 col-sm-6">
            <div class="single-blog">
                <figure>
                    <img
                        width="100%"
                        src="<?= base_url()?>uploads/dokumentasi/<?= $data->foto?>"
                        alt=""
                        data-toggle="modal" data-target="#foto<?= $data->id?>">
                </figure>
                <div class="blog-detail">
                    <small style="color: black;">Agenda : <?= $data->nama?></small>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</section>

<!-- button modal -->
<?php foreach ($dok as $data) : ?>
<div class="modal fade" id="foto<?= $data->id?>" role="dialog">
<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <!-- <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
        </div> -->
        <div class="modal-body" style="background-color: transparant ;">
            <img class="img-thumbnail" width="100%" src="<?= base_url('/uploads/dokumentasi/').$data->foto?>" alt="">
			<br>
			<hr>
			<center>
			<b>Agenda : <?= $data->nama?></b>
			<br>
			<?= $data->deskripsi?>
			</center>
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
    </div>
</div>
</div>
<?php endforeach; ?>
<!-- modal -->

<?php include 'komponen/footer.php';?>
