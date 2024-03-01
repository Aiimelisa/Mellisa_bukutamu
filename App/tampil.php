<?php
include "boot.php";
include "koneksi.php";

?>

<div class="row">
    <div class="col">
<div class="mt-4">
    <table class="table table-striped">
        <?php if (isset ($_GET['info'])) : ?>
            <?php if ($_GET['info'] =="berhasil") : ?>
                <div class="alert alert-info alert-dismissible fade show">
                    <strong>info!</strong>Tambah data berhasil.
                </div>
                <?php endif ?>
                <?php if ($_GET['info'] =="delete") : ?>
                    <div class="alert alert-warning alert-dismissible fade show">
                    <strong>info!</strong>Tambah data berhasil.
                    </div>
                    <?php endif ?>
                    <?php endif ?>
                    <div class="card-m-4 p-2">
                        <div class="card-header">
                            List Data Tamu
                            <a href="input.php?halaman=tampil">
                            <button class="btn btn-success">
                                Tambah data tamu
                            </button>
                            </a>
                        </div>
                    </div>
        <thead>
        <tr class="table-primary">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat Tamu</th>
            <th>Jenis Kelamin</th>
            <th scope="col">Pesan Tamu</th>
            <th>Notel Tamu</th>
            <th>Tujuan Tamu</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php

            @$tampil = $konek->query ("select*from bukutamu");
            while ($s = $tampil->fetch_array ()) {
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
                <td>
                <button class="btn btn-sm btn btn-danger" onclick="hapusData(<?= $s['no'] ?>)"><i class="bi bi-trash"></i></button>
                <button class="btn btn-sm btn btn-success" onclick="document.location.href='update.php?id=<?= $s['no'] ?>'"><i class="bi bi-pencil-square"></i></button>

                <script>
                    function hapusData(dataId) {
                        // Konfirmasi penghapusan
                        var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");

                        // Jika pengguna mengonfirmasi, arahkan ke halaman hapus.php
                        if (konfirmasi) {
                            document.location.href = 'hapus.php?id=' + dataId;
                        }
                    }
                </script>

                </td>

                <?php

                    }

                ?>
            </tr>
        </tbody>
    </table>
</div>

</div>
</div>