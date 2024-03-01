<?php
    include "boot.php";
?>


<div class="container mt-3">
    <form class="form-control mt-3 bg-secondary text-light" action ="prosesinput.php" method = "post">
    <div class="mb-3">

        <label for="exampleInputEmail1" class="form-label">Nama Tamu :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama_Tamu" required>

        <label for="exampleInputEmail1" class="form-label">Alamat Tamu</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat_Tamu">

        <label for="exampleInputEmail1" class="form-label">jenis kelamin</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="laki-laki">
          <label class="form-check-label" for="flexRadioDefault1">
        laki-laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="Perempuan">
          <label class="form-check-label" for="flexRadioDefault2">
            perempuan
          </label>
        </div>

        <label for="exampleInputEmail1" class="form-label">Pesan Tamu</label>
        <input type="text"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Pesan_Tamu">

        <label for="exampleInputEmail1" class="form-label">Notel Tamu</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Notel_Tamu">

        <label for="exampleInputEmail1" class="form-label">Tujuan Tamu</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tujuan_Tamu">

        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tanggal">


        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3">Kirim</button>
        </div>
    </div>  
</from>
</div>
