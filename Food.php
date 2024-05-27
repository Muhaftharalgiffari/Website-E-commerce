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

        .back p{
            margin-top:40px;
        }

        .back a{
            text-decoration:none;
            color:black;
        }

        span{
            margin-right:7px;
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
            margin-top: 2.7rem;
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
            margin-top: 4rem;
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
        <h1>Food</h1>
    </div>
    <div class="position">
        <div class="card">
            <div class="image"><img src="https://cdn.royalcanin-weshare-online.io/9Gkua2QBG95Xk-RBh9KI/v556/16-indoor-27-b1-ne" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        Untuk Kucing Umur 1-7 Tahun
                    </span>
                </a>

                <p class="desc">
                    Makanan Kering
                    Kibble yang renyah di luar dan lembut di dalam dengan nutrisi yang lengkap dan seimbang untuk kucing kesayangan Anda.
                </p>

                <a class="action" href="form.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="https://cdn.royalcanin-weshare-online.io/BOcpdn8BaPOZra8q2dU7/v395/sol-mother-babycat-dry-packshot-b1" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="#">
                    <span class="title">
                        Untuk Ibu Kucing dan Bayi Kucing
                    </span>
                </a>

                <p class="desc">
                    Makanan lezat yang dibuat khusus untuk memenuhi kebutuhan anak maupun ibu kucing Anda yang sedang di fase pemulihan sehabis melahirkan.
                </p>

                <a class="action1" href="form2.php">
                    Beli disini
                    <span aria-hidden="true">
                        →
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image"><img src="https://cdn.royalcanin-weshare-online.io/lPkua2QBIYfdNSoCjv5b/v468/16-savour-exigent-b1-in" width="200px" height="200px" alt=""></div>
            <br><br>
            <div class="content">
                <a href="">
                    <span class="title">
                        Untuk Kucing Umur 7-12 Tahun
                    </span>
                </a>

                <p class="desc">
                    Kibble lezat berkrim dengan nutrisi yang lengkap dan seimbang untuk kucing senior Anda.
                </p>

                <a class="action2" href="form3.php">
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