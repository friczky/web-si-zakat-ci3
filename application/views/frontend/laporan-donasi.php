<?php
include 'komponen/header.php';
include 'komponen/navbar.php';

?>

<section class="our-blog">
    <div class="container">
        <div class="row session-title">
            <h2>
                Laporan Donasi
            </h2>
            <p>Mari Berdonasi untuk membantu anak Yatim.</p>
        </p>
    </div>
   
        <div class="container">
			<table id="example1" class="table">
				<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Kategori</th>
					<th>Keterangan</th>
					<th>Jumlah</th>
				</tr>
				</thead>
				<tbody>
				<?php $no=1; foreach($donasi as $data) :?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $data->nama?></td>
					<td><?= $data->kategori?></td>
					<td><?= $data->keterangan?></td>
					<td><?= $data->jumlah?></td>
				</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
        </div>
	

</div>
</section>

<?php include 'komponen/footer.php';?>
