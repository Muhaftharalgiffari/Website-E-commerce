<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <style>
        body {
            background-image: url(background.png);
        }

        .back {
            display: flex;
            flex-direction: row;
            gap: 538px;
            font-weight: 700;
            font-size: 20px;
            margin-bottom: -60px;
        }

        .back h1 {
            color: black;
            margin-left: -45px;
        }

        .back p {
            margin-top: 40px;
        }

        .back a {
            text-decoration: none;
            color: black;
        }

        span {
            margin-right: 7px;
        }

        .position {
            display: flex;
            flex-direction: row;
            gap: 50px;
            margin-top: 80px;
            margin-left: 150px;
        }

        .card {
            max-width: 300px;
            height: 440px;
            border-radius: 0.5rem;
            background-color: #fff;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            border: 1px solid transparent;
        }

        .card a {
            text-decoration: none
        }

        .content {
            padding: 1.1rem;
        }

        .image {
            object-fit: cover;
            width: 100%;
            height: 150px;
            background-color: white;
        }

        .image img {
            position: relative;
            left: 50px;
        }

        .title {
            color: #111827;
            font-size: 1rem;
            line-height: 1.75rem;
            font-weight: 600;
        }

        .desc {
            margin-top: 0.5rem;
            color: black;
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .action {
            display: inline-flex;
            margin-top: 0.5rem;
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            align-items: center;
            gap: 0.25rem;
            background-color: #747bfc;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .action1 {
            display: inline-flex;
            margin-top: 1.8rem;
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            align-items: center;
            gap: 0.25rem;
            background-color: #747bfc;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .action2 {
            display: inline-flex;
            margin-top: 2rem;
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            align-items: center;
            gap: 0.25rem;
            background-color: #747bfc;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .action span {
            transition: .3s ease;
        }

        .action:hover span {
            transform: translateX(4px);
        }
    </style>
</head>

<body>
    <div class="back">
        <p><a href="main.php"><span>←</span>Back</a></p>
        <h1>Wash Tools</h1>
    </div>
    <div class="position">
        <div class="card">
            <div class="image"><img src="https://assets.petco.com/petco/image/upload/c_pad,dpr_1.0,f_auto,q_auto,h_636,w_636/c_pad,h_636,w_636/744425-center-1" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        Shampo Hewan Peliharaan Earthbath Oatmeal & Lidah Buaya
                    </span>
                </a>

                <p class="desc">
                    Earthbath diformulasikan secara khusus dengan sampo pereda gatal Oatmeal & Aloe untuk mengatasi kebutuhan kulit kering dan gatal si anabul.
                </p>

                <a class="action" href="formWash.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="https://assets.petco.com/petco/image/upload/c_pad,dpr_1.0,f_auto,q_auto,h_636,w_636/c_pad,h_636,w_636/1090330-center-1" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="#">
                    <span class="title">
                        Shampo Anak Kucing Lembut John Paul Pet
                    </span>
                </a>

                <p class="desc">
                    Mengandung campuran tumbuhan eksklusif kami untuk mengkondisikan dan menambah kilau pada bulu hewan peliharaan Anda
                </p>

                <a class="action1" href="formWash2.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="https://assets.petco.com/petco/image/upload/c_pad,dpr_1.0,f_auto,q_auto,h_636,w_636/c_pad,h_636,w_636/l_bypetco-badge,fl_relative,w_0.20,g_south_east,e_sharpen/3327877-center-1" width="180px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        Tisu Penghilang Bau Paw dan Bum Kucing Well & Good, Hitungan 24
                    </span>
                </a>

                <p class="desc">
                Lembut pada tempat yang sulit dijangkau dengan aroma jeruk dan bebas dari kekejaman, paraben, alkohol, pewarna kimia, dan ftalat
                </p>

                <a class="action2" href="formWash3.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>