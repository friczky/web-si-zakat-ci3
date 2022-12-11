<!-- modal tambah bank -->
<div class="modal fade" id="tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Tambah bank</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/bank/store"
                    method="post"
                    enctype="multipart/form-data">

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nama Pemilik</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="nama_pemilik"
                            class="form-control"
                            placeholder="Masukan nama_pemilik bank" required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nomer Rekening</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="no_rek"
                            class="form-control"
                            placeholder="Masukan no_rek" required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nama Bank</label>
                        </div>
                        <div class="col-sm-10">
							<input type="text" name="nama_bank" class="form-control" placeholder="Masukan Nama Bank">
						</div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Logo</label>
                        </div>
                        <div class="col-sm-10"><input type="file" name="foto" class="form-control" required></div>
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

<!-- modal edit bank -->
<?php $no=1; foreach ($bank as $data): ?>
<div
    class="modal fade"
    id="edit<?= $data->id?>"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Edit bank :
                    <?= $data->nama_pemilik?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/bank/update/<?= $data->id?>"
                    method="post"
                    enctype="multipart/form-data">

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nama Pemilik</label>
                        </div>
                        <div class="col-sm-10"><input type="text" name="nama_pemilik" class="form-control" value="<?= $data->nama_pemilik?>"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nomer Rekening</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="no_rek"
                            class="form-control"
                            value="<?= $data->no_rek?>"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nama Bank</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="nama_bank"
                            value="<?= $data->nama_bank?>" 
                            class="form-control" ></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Foto</label>
                        </div>
                        <div class="col-sm-10">
                            <img
                                src="<?= base_url()?>uploads/bank/<?= $data->foto?>"
                                width="200px"
                                alt="">
                            <input type="file" name="foto" class="form-control">
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
