<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url(background.png)
        }

        .position{
            display: flex;
            flex-direction: column;
            margin-top:-100px;
        }

        .logo{
          position: relative;
          left: 475px;
          top: 140px;
        }

        .logo li {
            list-style: none;
        }

        .logo img {
            width: 170px;
        }

        .logo ul {
            display: flex;
            flex-direction: row;
        }

        .logo ul h1 {
            position: relative;
            right: 50px;
            bottom: 7px;
            font-size: 40px;
            font-weight: 400;
            color: #5A4FCF;
        }

        .form {
            display: flex;
            flex-direction: column;
            position: relative;
            top: 100px;
            gap: 10px;
            background-color: white;
            width: 25%;
            padding: 2.5em;
            border-radius: 25px;
            transition: .4s ease-in-out;
            background-color: #5A4FCF;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
            margin: 0 auto;

        }

        .form:hover {
            transform: translateX(-0.5em) translateY(-0.5em);
            border: 1px solid #171717;
            box-shadow: 10px 10px 0px #666666;
        }

        .heading {
            color: black;
            padding-bottom: 2em;
            text-align: center;
            font-weight: bold;
        }

        .input {
            border-radius: 5px;
            border: 1px solid whitesmoke;
            background-color: whitesmoke;
            outline: none;
            padding: 0.7em;
            transition: .4s ease-in-out;
        }

        .input:hover {
            box-shadow: 6px 6px 0px #969696,
                -3px -3px 10px #ffffff;
        }

        .input:focus {
            background: #ffffff;
            box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
        }

        .form .btn {
            margin-top: 2em;
            align-self: center;
            padding: 0.7em;
            padding-left: 1em;
            padding-right: 1em;
            border-radius: 10px;
            border: none;
            color: black;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
        }

        .form .btn:hover {
            box-shadow: 6px 6px 0px #969696,
                -3px -3px 10px #ffffff;
            transform: translateX(-0.5em) translateY(-0.5em);
        }

        .form .btn:active {
            transition: .2s;
            transform: translateX(0em) translateY(0em);
            box-shadow: none;
        }
    </style>
</head>

<body>
<?php
include "koneksi.php";

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$message = ""; // Inisialisasi pesan selamat datang

if (isset($_POST["submit"])) {
    $nama = input($_POST["username"]);
    $password = input($_POST["password"]);

    // Enkripsi password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `login` (Username, Password) VALUES ('$nama', '$hashed_password')";
    $hasil = mysqli_query($conn, $sql);

    if ($hasil) {
        // Jika data berhasil disimpan, set pesan selamat datang
        $message = "Selamat datang di Catlo, $nama!";
        // Redirect ke halaman main.php
        header("Location: main.php");
        exit(); // Pastikan untuk keluar setelah mengarahkan header
    } else {
        echo "Data Gagal disimpan." . mysqli_error($conn);
    }
}
?>
    <div class="position">
        <div class="logo">
            <ul>
                <li><img src="Catlo.png" alt="Catlo"></li>
                <li>
                    <h1>Catlo</h1>
                </li>
            </ul>
        </div>
        <form class="form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p class="heading">Login</p>
            <input class="input" placeholder="Username" type="text" name="username">
            <input class="input" placeholder="Password" type="password" name="password">
            <button class="btn" name="submit">Login</button>
        </form>

        <!-- Tampilkan pesan selamat datang -->
        <div class="welcome-message">
            <?php echo $message; ?>
        </div>
    </div>
</body>

</html>

</body>

</html>
