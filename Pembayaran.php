<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Price</title>
    <!-- Tambahkan script JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dapatkan elemen select dan input
            var productSelect = document.getElementById('productSelect');
            var priceInput = document.getElementById('priceInput');

            // Tambahkan event listener untuk mengupdate nilai input saat pilihan berubah
            productSelect.addEventListener('change', function () {
                // Dapatkan nilai harga berdasarkan pilihan yang dipilih
                var selectedProduct = productSelect.value;
                var price = getPrice(selectedProduct);

                // Update nilai input
                priceInput.value = price;
            });

            // Fungsi untuk mendapatkan harga berdasarkan pilihan produk
            function getPrice(selectedProduct) {
                // Anda dapat mengganti logika ini sesuai dengan kebutuhan Anda
                switch (selectedProduct) {
                    case 'product-1':
                        return '100';
                    case 'product-2':
                        return '150';
                    case 'product-3':
                        return '200';
                    default:
                        return '0';
                }
            }
        });
    </script>
</head>

<body>
    <select id="productSelect">
        <option value="product-1">Product 1</option>
        <option value="product-2">Product 2</option>
        <option value="product-3">Product 3</option>
    </select>

    <label for="priceInput">Product Price:</label>
    <input type="text" id="priceInput" readonly>
</body>

</html>

</body>
</html>