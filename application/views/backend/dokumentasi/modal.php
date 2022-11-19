<!-- modal tambah dokumentasi -->
<?php $no=1; foreach ($dokumentasi as $data): ?>
<div class="modal fade" id="tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Dokumentasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/dokumentasi/store"
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
                            placeholder="Masukan Nama Dokumentasi"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Deskripsi</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="text"
                            name="deskripsi"
                            class="form-control"
                            placeholder="Masukan Deskripsi"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Tanggal</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="date"
                            name="tanggal"
                            placeholder="dd-mm-yyyy"
                            value=""
                            min="2000-01-01"
                            max="2100-12-31"
                            class="form-control"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Foto</label>
                        </div>
                        <div class="col-sm-10"><input type="file" name="foto" class="form-control"></div>
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
<?php endforeach;?>

<!-- modal edit dokumentasi -->
<?php $no=1; foreach ($dokumentasi as $data): ?>
<div
    class="modal fade"
    id="edit<?= $data->id?>"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Edit Dokumentasi :
                    <?= $data->nama?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/dokumentasi/update/<?= $data->id?>"
                    method="post"
                    enctype="multipart/form-data">

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-sm-10"><input type="text" name="nama" class="form-control" value="<?= $data->nama?>"></div>
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
                            <label for="">Tanggal</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="date"
                            name="tanggal"
                            value="<?= $data->tanggal?>"
                            max="2100-12-31"
                            class="form-control"></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Foto</label>
                        </div>
                        <div class="col-sm-10">
                            <img
                                src="<?= base_url()?>uploads/dokumentasi/<?= $data->foto?>"
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
