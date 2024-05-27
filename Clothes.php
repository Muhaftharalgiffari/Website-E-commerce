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
            margin-left: -25px;
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
            height: 460px;
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
            font-size: 1.125rem;
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
        <h1>Clothes</h1>
    </div>
    <div class="position">
        <div class="card">
            <div class="image"><img src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71wc+Gn4vJL._AC_UL320_.jpg" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        Weewooday 5 Buah Topi Kelinci dengan Telinga Topi Nanas Pisang Lucu untuk Kucing
                    </span>
                </a>

                <p class="desc">
                    Topi hewan peliharaan yang lucu: gaya memadupadankan telinga kelinci, topi bunga dan buah dapat memberikan hewan peliharaan Anda tampilan yang menggemaskan dan menawan.
                </p>

                <a class="action" href="formClothes.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71ZTPdUaaYL._AC_SL1500_.jpg" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="#">
                    <span class="title">
                        Topi Hewan Peliharaan Lucu dengan Kelucuaan Ekstra di Kepala.
                    </span>
                </a>

                <p class="desc">
                    topi hewan peliharaan lucu: 5 gaya topi kucing termasuk telinga kelinci abu-abu, bunga berwarna-warni, surai singa hitam, bintang, dan topi kepiting, yang membuat hewan peliharaan Anda terlihat menggemaskan.
                </p>

                <a class="action1" href="formClothes1.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71J-wJWzOyL._AC_SL1500_.jpg" width="180px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        QWINEE Mantel Kucing Hoodie Kucing dengan Warna Gradient Unik
                    </span>
                </a>

                <p class="desc">
                    Terbuat dari kain lembut dan bernapas dengan kenyamanan yang baik, memberikan hewan peliharaan Anda pengalaman memakai yang nyaman.
                </p>

                <a class="action2" href="formClothes2.php">
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