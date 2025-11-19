<?php
// Ambil data dari form
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$pesan  = $_POST['pesan'];

// Email tujuan
$to = "sulisstait@gmail.com";

// Subject email
$subject = "Pesan Baru dari Form Website";

// Isi email
$message = "
Nama   : $nama
Email  : $email
Pesan  : 
$pesan
";

// Header
$headers = "From: $email";

// Kirim email
if (mail($to, $subject, $message, $headers)) {
    echo "Pesan berhasil dikirim!";
} else {
    echo "Gagal mengirim pesan.";
}
?>


