<?php
include "koneksi.php";

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Inisialisasi variabel untuk menyimpan pesan atau error
$message = "";

// Periksa apakah formulir telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama = input($_POST["nama_pemesan"]);
    $telepon = input($_POST["no_telp"]);
    $waktu = input($_POST["waktu_perjalanan"]);
    $jumlah = input($_POST["jumlah_peserta"]);
    $pelayanan = input($_POST["pelayanan"]);
    $harga = input($_POST["harga_paket"]);
    $total = input($_POST["total_tagihan"]);

    // Selanjutnya, lakukan penyimpanan data ke database atau proses sesuai kebutuhan Anda.
    // Contoh:
    $sql = "INSERT INTO `tabel_pemesanan` (nama_pemesan, no_telp, waktu_perjalanan, jumlah_peserta, pelayanan, harga_paket, total_tagihan)
VALUES ('$nama', '$telepon', '$waktu', '$jumlah', '$pelayanan', '$harga', '$total')";

    $hasil = mysqli_query($conn, $sql);
    if ($hasil) {
        // Jika penyimpanan data berhasil, set pesan sukses
        $message = "Pembayaran berhasil! Terima kasih, $name!";

        // Tambahkan script JavaScript untuk menampilkan notifikasi
        echo '<script>
    alert("Pembayaran berhasil! Terima kasih, ' . $name . '!");
</script>';
    } else {
        // Jika ada kesalahan, tampilkan pesan error
        $message = "Pembayaran gagal. Silakan coba lagi atau hubungi layanan pelanggan.";
    }
}
