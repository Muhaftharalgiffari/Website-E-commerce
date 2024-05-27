<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan */
        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form id="paymentForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">No Telepon:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Alamat:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="product">Pilih Produk:</label>
        <select id="product" name="product">
            <option value="pilih">Pilih Product</option>
            <option value="product-1">Product 1</option>
            <option value="product-2">Product 2</option>
            <option value="product-3">Product 3</option>
        </select>

        <label for="price">Harga:</label>
        <input type="text" id="price" name="price" readonly>

        <label for="quantity">Jumlah:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1" required>

        <label for="total">Total:</label>
        <input type="text" id="total" name="total" readonly>

        <button type="button" onclick="calculateTotal()">Hitung Total</button>
        <button type="submit">Proses Pembayaran</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var productSelect = document.getElementById('product');
            var priceInput = document.getElementById('price');
            var quantityInput = document.getElementById('quantity');
            var totalInput = document.getElementById('total');

            productSelect.addEventListener('change', function () {
                calculateTotal();
            });

            function calculateTotal() {
                var selectedProduct = productSelect.value;
                var price = getPrice(selectedProduct);
                var quantity = quantityInput.value;
                var total = price * quantity;

                priceInput.value = price;
                totalInput.value = total;
            }

            function getPrice(selectedProduct) {
                switch (selectedProduct) {
                    case 'Pilih Produk':
                        return 0;
                    case 'product-1':
                        return 35000;
                    case 'product-2':
                        return 45000;
                    case 'product-3':
                        return 50000;
                    default:
                        return 0;
                }
            }
        });
    </script>
</body>

</html>
