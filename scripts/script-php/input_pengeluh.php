<?php
include "sqlkonek.php";

// Validasi input
if (empty($_POST['nama'])) {
    echo "Nama tidak boleh kosong";
    exit;
}

if (empty($_POST['email'])) {
    echo "Email tidak boleh kosong";
    exit;
}

if (empty($_POST['pesan'])) {
    echo "Pesan tidak boleh kosong";
    exit;
}

// Konversi input ke format yang sesuai
$nama = mysqli_real_escape_string($konek, $_POST['nama']);
$email = mysqli_real_escape_string($konek, $_POST['email']);
$pesan = mysqli_real_escape_string($konek, $_POST['pesan']);

// Query insert data
$input = "insert into pengeluh (nama,email,pesan) values ('$nama','$email','$pesan')";

// Eksekusi query
$hasil = mysqli_query($konek, $input);

// Penanganan error
if (!$hasil) {
    echo "Proses input data gagal: " . mysqli_error($konek);
} else {
    echo "Proses input data berhasil";
}
?>
