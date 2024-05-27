<?php
// Pastikan Anda memiliki file koneksi.php yang berisi konfigurasi koneksi ke database

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
    $cardNumber = input($_POST["card_number"]);
    $expiryDate = input($_POST["expiry_date"]);
    $cvc = input($_POST["cvc"]);
    $name = input($_POST["name"]);
    $email = input($_POST["email"]);
    $area = input($_POST["area"]);
    $specificAddress = input($_POST["specific_address"]);
    $quantity = input($_POST["quantity"]);
    $total = input($_POST["total"]);

    // Selanjutnya, lakukan penyimpanan data ke database atau proses sesuai kebutuhan Anda.
    // Contoh:
    $sql = "INSERT INTO `pembayarantoy3` (card_number, expiry_date, password, name, email, area, specific_address, quantity, total) 
            VALUES ('$cardNumber', '$expiryDate', '$cvc', '$name', '$email', '$area', '$specificAddress', '$quantity', '$total')";

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazda CX-9 - Checkout</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="checkout-image">
                <div class="info">
                    <h2>Catlo</h2>
                    <h4>Mainan Kucing</h4>
                    <h1>Rp50.000</h1>
                    <p>
                        <span></span>
                    </p>
                    <img class="product-img" src="//www.absolutelyeverything.com.au/cdn/shop/products/PS333.jpg?v=1701013003&width=550 550w,//www.absolutelyeverything.com.au/cdn/shop/products/PS333.jpg?v=1701013003 600w" height="190px" width="200px" alt="Product-Image" />
                </div>
                <div class="footer">
                    <p>
                        <span>Powered by <b>Muh. Afthar algiffari</b></span>
                        <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-warning-ui-dreamstale-lineal-dreamstale.png" alt="Warning-icon" height="15px" width="15px" />
                    </p>
                    <select>
                        <option selected>Indonesia</option>
                        <option>English</option>
                    </select>
                </div>
            </div>
            <div class="checkout-text">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <div class="back-to-home">
                        <a href="Toy.php">Back to Toy By Catlo</a>
                        <img src="https://img.icons8.com/sf-regular/48/aaaaaa/forward.png" alt="Arrow" height="15px" width="15px" />
                        <a href="">Payment</a>
                    </div>
                    <br><br>
                    <div class="card-details">
                        <label>Nomor Rekening</label>
                        <div class="card-number">
                            <input type="number" placeholder="4242 4242 4242 4242" name="card_number" />
                            <div>
                                <img src="bni.png" height="20px" width="20px" />
                                <img src="https://img.icons8.com/color/48/000000/mastercard.png" height="20px" width="20px" />
                                <img src="bca.png" height="20px" width="20px" />
                            </div>
                        </div>
                        <div class="card-info">
                            <div class="mm-yy">
                                <input type="text" placeholder="Tanggal Transaksi" name="expiry_date" />
                            </div>
                            <div class="cvc">
                                <input type="password" placeholder="Password" name="cvc" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="owner-name">
                        <label>Nama</label>
                        <input type="text" placeholder="Muh.Afthar algiffari" name="name" />
                    </div>
                    <br>
                    <div class="owner-name">
                        <label>Alamat e-mail</label>
                        <input type="text" placeholder="e-mail" name="email" />
                    </div>
                    <br>
                    <div class="country-region">
                        <label>Area Tinggal</label>
                        <select id="area" name="area" onchange="calculateTotal()">
                            <option value="jabodetabek">Jabodetabek</option>
                            <option value="luar-jabodetabek">Luar Jabodetabek</option>
                            <option value="luar-pulau">Luar Pulau</option>
                            <option value="luar-negeri">Luar Negeri</option>
                        </select>
                        <input id="specificAddress" type="text" placeholder="Alamat Spesifik" name="specific_address" />
                    </div>
                    <br>
                    <div class="owner-name">
                        <label>Jumlah</label>
                        <input id="quantity" type="number" name="quantity" placeholder="" onchange="calculateTotal()" />
                    </div>
                    <br>
                    <div class="owner-name">
                        <label>Total</label>
                        <input id="total" type="number" name="total" placeholder="50000" readonly />
                    </div>
                    <br><br>
                    <button class="buy-button" type="submit">Pay</button>
            </div>
            </form>
        </div>
        <h5>&copy; <b>Muh. Afthar algiffari</b> - 2023 - Made with ❤️ by <a href="" target="_blank">Afthar</a></h5>
        <script>
            function calculateTotal() {
                var pricePerItem = 50000; // Harga per barang
                var quantity = parseInt(document.getElementById('quantity').value);
                var area = document.getElementById('area').value;
                var specificAddress = document.getElementById('specificAddress').value;
                var totalInput = document.getElementById('total');

                // Hitung total berdasarkan kriteria yang disebutkan
                var additionalCost = 0;
                if (area === 'luar-jabodetabek') {
                    additionalCost = 15000;
                } else if (area === 'luar-pulau') {
                    additionalCost = 35000;
                } else if (area === 'luar-negeri') {
                    additionalCost = 50000;
                }

                var total = (pricePerItem * quantity) + additionalCost;

                // Tampilkan total pada elemen input
                totalInput.value = total;
            }

            // Panggil calculateTotal() setelah dokumen selesai dimuat
            document.addEventListener('DOMContentLoaded', function() {
                calculateTotal();
            });
        </script>
</body>

</html>