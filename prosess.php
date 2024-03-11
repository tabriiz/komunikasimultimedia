<?php
// Periksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari field nama, email, dan pesan
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Simpan data ke file atau lakukan tindakan lain yang diinginkan
    // Di sini Anda dapat menulis kode untuk menyimpan data ke database atau melakukan tindakan lain

    // Contoh menyimpan data ke file teks
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents($file, $current);

    // Redirect pengguna kembali ke halaman yang sesuai
    header('Location: index.html');
    exit;
}
?>
