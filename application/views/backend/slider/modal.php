<!-- modal tambah slider -->
<div class="modal fade" id="tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Tambah slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/slider/store"
                    method="post"
                    enctype="multipart/form-data">

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">judul</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="judul"
                            class="form-control"
                            placeholder="Masukan judul slider" required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Deskripsi</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="deskripsi"
                            class="form-control"
                            placeholder="Masukan Deskripsi" required></div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Foto</label>
                        </div>
                        <div class="col-sm-10">
							<input type="file" name="foto" class="form-control" required>
							Gunakan Ukuran : 1568 x 626 px
						</div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Aksi</label>
                        </div>
                        <div class="col-sm-10"><input type="submit" class="btn btn-primary" value="Simpan"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal edit slider -->
<?php $no=1; foreach ($slider as $data): ?>
<div
    class="modal fade"
    id="edit<?= $data->id?>"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Edit slider :
                    <?= $data->judul?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/slider/update/<?= $data->id?>"
                    method="post"
                    enctype="multipart/form-data">
					
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">judul</label>
                        </div>
                        <div class="col-sm-10"><input type="text" name="judul" class="form-control" value="<?= $data->judul?>"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Deskripsi</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="deskripsi"
                            class="form-control"
                            value="<?= $data->deskripsi?>"></div>
                    </div>

    
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Foto</label>
                        </div>
                        <div class="col-sm-10">
                            <img
                                src="<?= base_url()?>uploads/slider/<?= $data->foto?>"
                                width="200px"
                                alt="">
                            <input type="file" name="foto" class="form-control">
							Gunakan Ukuran : 1568 x 626 px
                            <input
                                type="hidden"
                                name="foto_old"
                                value="<?= $data->foto?>"
                                class="form-control">

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Aksi</label>
                        </div>
                        <div class="col-sm-10"><input type="submit" class="btn btn-primary" value="Perbahrui"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php endforeach;?>
