<?php
include "boot.php";
include "koneksi.php";
?>

<div class="row" id="printDiv">
	<div class="col-md-12">
		<div class="card shadow mb-4 mt-3">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Rekap Tamu [<?= date('d-m-y')?>]</h6>
			</div>
			<div class="card-body">
				<form method="post" action="" class="text-center">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Dari Tanggal</label>
								<input class="form-control" type="date" name="tanggal1" value="<?= isset($_POST['tanggal1'])?$_POST['tanggal1']: date('Y-m-d')?>" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Sampai Tanggal</label>
								<input class="form-control" type="date" name="tanggal2" value="<?= isset($_POST['tanggal2'])?$_POST['tanggal2']: date('Y-m-d')?>" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-2">
							<button class="btn btn-success form-control mt-3" name="btampilkan"><i class="fa fa-search"></i>Tampilkan</button>
						</div>
						<div class="col-md-2">
							<a href="tampil.php" class="btn btn-danger form-control mt-3">Kembali</a>
						</div>
					</div>
				</form>

				<?php
				if (isset($_POST['btampilkan'])) :
				?>
					
					<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 text-dark"></i></button>
					<div id="div1">
					<div class="mt-4">
						<table class="table table-striped">
							<tr class="table-primary">
								<th>No</th>
								<th>Nama</th>
								<th>Alamat Tamu</th>
								<th>Jenis Kelamin</th>
								<th scope="col">Pesan Tamu</th>
								<th>Notel Tamu</th>
								<th>Tujuan Tamu</th>
								<th>Tanggal</th>
							</tr>
							<tbody>
							<?php
								$no = 0;
								$tampil = $konek->query("SELECT * FROM bukutamu where Tanggal between '$_POST[tanggal1]' and '$_POST[tanggal2]'");
								while ($s = $tampil->fetch_array()) {
									@$no++;
							?>
								<tr>
									<th scope="row"><?= $no; ?></th>
									<td><?= $s['Nama_Tamu'] ?></td>
									<td><?= $s['Alamat_Tamu'] ?></td>
									<td><?= $s['jenis_Kelamin'] ?></td>
									<td><?= $s['Pesan_Tamu'] ?></td>
									<td><?= $s['Notel_Tamu'] ?></td>
									<td><?= $s['Tujuan_Tamu'] ?></td>
									<td><?= $s['Tanggal'] ?></td>
								</tr>
							<?php
								}
							?>
							</tbody>
						</table>
					</div>
					<!-- Your existing code -->
				<?php
				endif; // Add this line to close the if block
				?>
			</div>
		</div>
	</div>

	<!-- tutup tampil -->
</div>

<script>
	function printDiv(el) {
		var a = document.body.innerHTML;
		var b = document.getElementById(el).innerHTML;
		document.body.innerHTML = b;
		window.print();
		document.body.innerHTML = a;
	}
</script>