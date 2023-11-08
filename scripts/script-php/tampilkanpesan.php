<?php
include "sqlkonek.php";

// Query select data
$sql = "select * from pengeluh where no_tamu = 26";

// Eksekusi query
$hasil = mysqli_query($konek, $sql);

// Periksa hasil query
if (!$hasil) {
    echo "Proses query gagal: " . mysqli_error($konek);
    exit;
}

// Tampilkan data
while ($data = mysqli_fetch_array($hasil)) {
    echo "<center> Atur pada scripts/script-php/tampilkanpesan.php <br></center>";
    echo "<center>Nama : " . $data["nama"] . "<br></center>";
    echo "<center>Email : " . $data["email"] . "<br></center>";
    echo "<center>Pesan : " . $data["pesan"] . "<br></center>";
}
?>