<?php 

$this->load->view('backend/komponen/header');
$this->load->view('backend/komponen/navbar');
$this->load->view('backend/komponen/sidebar-admin');

?>

<!-- Konten -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>layanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Layanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-header">
               <div class="row">
								<div class="col-sm-6">
								<h3 class="card-title">Data Semua Layanan.</h3>
								</div>
								<div class="col-sm-6" align="right">
									<a href="#tambah" class="btn btn-success" data-toggle="modal" data-target="#tambah"> <i class="fa fa-plus"></i> Tambah Layanan</a>
								</div>
							 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
								<?= $this->session->flashdata('sukses')?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
										<th>No.</th>
                    <th>Nama Layanan</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
										<th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
										<?php $no=1; foreach ($layanan as $data): ?>
                  <tr>
										<td><?= $no++?>.</td>
                    <td><?= $data->nama?></td>
                    <td><?= $data->deskripsi?></td>
                    <td><img src="<?= base_url('uploads/layanan/').$data->foto?>" width="50px" alt=""></td>
										<td>
										<a href="#edit" data-toggle="modal" data-target="#edit<?= $data->id?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										<a href="<?= base_url()?>backend/layanan/hapus/<?= $data->id?>" onclick="return confirm('Apakah ingin menghapus layanan ini ?');" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										</td>
                  </tr>
									<?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
	  </div>
	</div>
  </section> 


<?php 

include 'modal.php';

$this->load->view('backend/komponen/footer');

?>
