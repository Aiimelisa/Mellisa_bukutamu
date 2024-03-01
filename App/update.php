<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$ubah=$konek->query("select*from bukutamu where no='$id'");
$a = $ubah->fetch_array();


?>
<div class="container">
    <form class="form-control mt-3 bg-secondary text-light" action ="" method = "post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Tamu :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama_Tamu" 
         value="<?=$a['Nama_Tamu'] ?>">

        <label for="exampleInputEmail1" class="form-label">Alamat Tamu  :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
        name="Alamat_Tamu"value="<?=$a['Alamat_Tamu'] ?>">

        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby=
        "emailHelp" name="jenis_Kelamin" value="<?=$a['jenis_Kelamin'] ?>">

        <label for="exampleInputEmail1" class="form-label">Pesan Tamu</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby=
        "emailHelp" name="Pesan_Tamu"value="<?=$a['Pesan_Tamu'] ?>">

        <label for="exampleInputEmail1" class="form-label">Notel Tamu</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby=
        "emailHelp" name="Notel_Tamu"value="<?=$a['Notel_Tamu'] ?>">

        <label for="exampleInputEmail1" class="form-label">Tujuan Tamu</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby=
        "emailHelp" name="Tujuan_Tamu" value="<?=$a['Tujuan_Tamu'] ?>">

        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby=
        "emailHelp" name="Tanggal"value="<?=$a['Tanggal'] ?>">

        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3 ">Simpan</button>
        </div>

<?php
if (!isset($_POST['edit'])) {
    echo "silahkan ubah";
} 
@$ubah = $konek->query("update bukutamu set Nama_Tamu='$_POST[Nama_Tamu]', Alamat_Tamu='$_POST[Alamat_Tamu]', jenis_Kelamin='$_POST[jenis_Kelamin]', 
Pesan_Tamu='$_POST[Pesan_Tamu]', Notel_Tamu='$_POST[Notel_Tamu]', Tujuan_Tamu='$_POST[Tujuan_Tamu]', Tanggal='$_POST[Tanggal]' where no='$id'");

  echo "data berhasil di ubah <a href=tampil.php>kembali</a>";
 
  ?>