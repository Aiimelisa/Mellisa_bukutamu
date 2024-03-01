<?php
include "koneksi.php";
$Nama_Tamu = $_POST['Nama_Tamu'];
$Alamat_Tamu = $_POST['Alamat_Tamu'];
$jenis_Kelamin = $_POST['jenis_kelamin'];
$Pesan_Tamu = $_POST['Pesan_Tamu'];
$Notel_Tamu= $_POST['Notel_Tamu'];
$Tujuan_Tamu = $_POST['Tujuan_Tamu'];
$Tanggal = $_POST['Tanggal'];
if ($Nama_Tamu == "") {
    echo "maaf nama wajib di isi";
} else {
    $simpan = $konek->query("insert into bukutamu (Nama_Tamu, Alamat_Tamu, jenis_kelamin,Pesan_Tamu, Notel_Tamu, Tujuan_Tamu) values ('$Nama_Tamu','$Alamat_Tamu','$jenis_Kelamin',
    '$Pesan_Tamu', '$Notel_Tamu', '$Tujuan_Tamu')");
}

?>
<script>
 document.location.href = 'tampil.php?info=berhasil';
</script>