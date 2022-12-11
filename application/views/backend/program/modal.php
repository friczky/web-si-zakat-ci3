<!-- modal tambah layanan -->

<div class="modal fade" id="tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Tambah layanan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/layanan/store"
                    method="post"
                    enctype="multipart/form-data">

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="nama"
                            class="form-control"
                            placeholder="Masukan Nama layanan" required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Deskripsi</label>
                        </div>
                        <div class="col-sm-10">
						<textarea name="deskripsi" class="form-control" id="" cols="10" rows="10" required></textarea>		
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


<!-- modal edit layanan -->
<?php $no=1; foreach ($layanan as $data): ?>
<div
    class="modal fade"
    id="edit<?= $data->id?>"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Edit layanan :
                    <?= $data->nama?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/layanan/update/<?= $data->id?>"
                    method="post"
                    enctype="multipart/form-data">

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-sm-10"><input type="text" name="nama" class="form-control" value="<?= $data->nama?>" required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Deskripsi</label>
                        </div>
                        <div class="col-sm-10">
						<textarea name="deskripsi" class="form-control" id="" cols="30" rows="10" required><?= $data->deskripsi?></textarea>		
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
