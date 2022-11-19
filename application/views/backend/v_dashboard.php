<?php 

$this->load->view('backend/komponen/header');
$this->load->view('backend/komponen/navbar');
$this->load->view('backend/komponen/sidebar-admin');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $this->db->count_all('tb_berita')?></h3>
                            <p>Berita</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <a href="<?= base_url()?>dashboard/berita" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $this->db->count_all('tb_pengguna')?></h3>
                            <p>Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="<?= base_url()?>dashboard/pengguna" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $this->db->count_all('tb_dokumentasi')?></h3>
                            <p>Dokumentasi</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-image"></i>
                        </div>
                        <a href="<?= base_url()?>dashboard/dokumentasi" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $this->db->count_all('tb_layanan')?></h3>
                            <p>Layanan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <a href="<?= base_url()?>dashboard/layanan" class="small-box-footer">More info
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
								<div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Donasi</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($donasi as $d): ?>
                                    <tr>
                                        <td><?= $no++?></td>
                                        <td><?= $d->nama?></td>
                                        <td><?= $d->jumlah?></td>
                                        <td><?= $d->tanggal?></td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Grafik Donasi</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="150"></canvas>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li>
                                            <i class="far fa-circle text-danger"></i>
                                            Pemasukan</li>
                                        <li>
                                            <i class="far fa-circle text-success"></i>
                                            Pengeluaran</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>

            <?php 
$this->load->view('backend/komponen/footer');
?>
