<?php
include "boot.php";
function tgl_indo($tanggal) {
  $bulan = array(
    1 => 'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember',
  );

  $pecahkan = explode('-', $tanggal);

  return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
}

echo tgl_indo(date('Y-m-d'));

?>
<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="card" style="width: 14rem;">
        <img src="../img/undraw_notebook_ask4_ys9r.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Pesan tamu: </p>
          <?php
          include "koneksi.php";
          $lihat = $konek->query("select Pesan_Tamu from bukutamu where Pesan_Tamu like'Saya doakan agar cinta kalian akan terus berkembang dan bertahan selamanya. Selamat!'");
          $jumlah = $lihat->num_rows;
          echo $jumlah;
          ?>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 12rem;">
        <img src="../img/undraw_Certification_re_ifll.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Tujuan tamu: </p>
          <?php
          include "koneksi.php";
          $lihat = $konek->query("select Tujuan_Tamu from bukutamu where Tujuan_Tamu like'merayakan'");
          $jumlah = $lihat->num_rows;
          echo $jumlah;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
