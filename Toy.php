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
            margin-bottom: -50px;
        }

        .back h1 {
            color: black;
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
            margin-top: 1.4rem;
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
            margin-top: 1rem;
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
            margin-top: 1rem;
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
        <h1>Toy</h1>
    </div>
    <div class="position">
        <div class="card">
            <div class="image"><img src="//www.absolutelyeverything.com.au/cdn/shop/products/ZC513_936f1f7e-2ea2-4d28-83a7-9e75518a7bf4.jpg?v=1701015350&width=550 550w,//www.absolutelyeverything.com.au/cdn/shop/products/ZC513_936f1f7e-2ea2-4d28-83a7-9e75518a7bf4.jpg?v=1701015350&width=1100 1100w,//www.absolutelyeverything.com.au/cdn/shop/products/ZC513_936f1f7e-2ea2-4d28-83a7-9e75518a7bf4.jpg?v=1701015350&width=1445 1445w,//www.absolutelyeverything.com.au/cdn/shop/products/ZC513_936f1f7e-2ea2-4d28-83a7-9e75518a7bf4.jpg?v=1701015350 1500w" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        Zippystick Cat Toy - Hedgehog
                    </span>
                </a>

                <p class="desc">
                    ZippyStick Hedgehog adalah tongkat penggoda kucing. Dimana dilengkapi pom pom dan rumbai serta diamankan pada tongkat bambu yang ramah lingkungan dan tahan lama.
                </p>

                <a class="action" href="formToy.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="//www.absolutelyeverything.com.au/cdn/shop/files/DW-LACATRINA.jpg?v=1701641585&width=550 550w,//www.absolutelyeverything.com.au/cdn/shop/files/DW-LACATRINA.jpg?v=1701641585 600w" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="#">
                    <span class="title">
                        Yeowww! Mainan Kucing dengan Catnip Amerika Murni
                    </span>
                </a>

                <p class="desc">
                    Mainan baru dari Yeowww ini mencerminkan semangat gembira Hari Orang Mati dan menghidupkan waktu bermain bagi kucing dari semua generasi.
                </p>

                <a class="action1" href="formToy2.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="//www.absolutelyeverything.com.au/cdn/shop/products/PS333.jpg?v=1701013003&width=550 550w,//www.absolutelyeverything.com.au/cdn/shop/products/PS333.jpg?v=1701013003 600w" width="180px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        Petstages Catnip Plaque Away Pretzel
                    </span>
                </a>

                <p class="desc">
                    Pretzel!**Dibuat khusus untuk meningkatkan kesehatan gigi, mainan kucing Plaque Away Pretzel memiliki desain inovatif yang membantu membersihkan gigi kucing Anda.
                </p>

                <a class="action2" href="formToy3.php">
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