<!-- modal tambah donasi -->

<div class="modal fade" id="tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Tambah donasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/donasi/store"
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
                            placeholder="Masukan Nama donasi" required></div>
                    </div>

					<div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Jumlah</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="number"
                            name="jumlah"
                            class="form-control"
                            placeholder="Masukan Jumlah" required></div>
                    </div>

					<div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Kategori</label>
                        </div>
                        <div class="col-sm-10">
							<select name="kategori" id="" class="form-control" required> 
								<option value="Pemasukan">Pemasukan</option>
								<option value="Pengeluaran">Pengeluaran</option>
							</select>
						</div>
                    </div>

					<div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Tanggal</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="date"
                            name="tanggal"
                            class="form-control" required
                            ></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Keterangan</label>
                        </div>
                        <div class="col-sm-10">
						<textarea name="keterangan" class="form-control" id="" cols="10" rows="5" required></textarea>		
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


<!-- modal edit donasi -->
<?php $no=1; foreach ($donasi as $data): ?>
<div
    class="modal fade"
    id="edit<?= $data->id?>"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Edit donasi :
                    <?= $data->nama?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form
                    action="<?= base_url()?>backend/donasi/update/<?= $data->id?>"
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
                            <label for="">Jumlah</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="number"
                            name="jumlah"
                            class="form-control"
                            placeholder="Masukan Jumlah" value="<?= $data->jumlah?>" required></div>
                    </div>

					<div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Kategori</label>
                        </div>
                        <div class="col-sm-10">
							<select name="kategori" id="" class="form-control" required>
								<option value="<?= $data->kategori?>"><?= $data->kategori?> (Terpilih)</option>
								<option value="Pemasukan">Pemasukan</option>
								<option value="Pengeluaran">Pengeluaran</option>
							</select>
						</div>
                    </div>

					<div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Tanggal</label>
                        </div>
                        <div class="col-sm-10"><input
                            type="date"
                            name="tanggal"
                            class="form-control"
							value="<?= $data->tanggal?>" required></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">
                            <label for="">Keterangan</label>
                        </div>
                        <div class="col-sm-10">
						<textarea name="keterangan" class="form-control" id="" cols="30" rows="5" required><?= $data->keterangan?></textarea>		
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
