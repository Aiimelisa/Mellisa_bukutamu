<?php
include "koneksi.php";
include "boot.php";

$query = isset($_GET['query']) ? $_GET['query'] : '';
$result = mysqli_query ($konek, "SELECT * FROM bukutamu WHERE nama_tamu LIKE '%$query%'
OR alamat_tamu LIKE '%$query%'
OR jenis_kelamin LIKE '%$query%'
OR pesan_tamu LIKE '%$query%'
OR notel_tamu LIKE '%$query%'
OR tujuan_tamu LIKE '%$query%'
OR tanggal LIKE '%$query%'");

    echo "<h2>Hasil pencarian untuk: ". htmlspecialchars($query) . "</h2>";
    echo"<table class='table'>";
    echo "<th>No</th>";
    echo "<th>Nama Tamu</th>";
    echo "<th>Alamat Tamu</th>";
    echo "<th>jenis kelamin</th>";
    echo "<th>Pesan Tamu</th>";
    echo "<th>Notel Tamu</th>";
    echo "<th>Tujuan Tamu</th>";
    echo "<th>Tanggal</th>";

    $no = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $no++;
        echo "<tr>";
        echo "<th scope='row'>$no</th>";
        echo "<td>{$row['Nama_Tamu']}</td>";
        echo "<td>{$row['Alamat_Tamu']}</td>";
        echo "<td>{$row['jenis_Kelamin']}</td>";
        echo "<td>{$row['Pesan_Tamu']}</td>";
        echo "<td>{$row['Notel_Tamu']}</td>";;
        echo "<td>{$row['Tujuan_Tamu']}</td>";  
        echo "<td>{$row['Tanggal']}</td>";                      
                    

}

$konek->close();
?>