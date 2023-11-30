<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">

    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assist/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="../assist/slick-1.8.1/slick/slick-theme.css">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #091b0c;
            overflow-x: hidden;
        }

        .container {
            padding: 3%;
        }

        main {
            overflow: hidden;
        }

        .image {
            text-align: center;
        }

        .text p {
            color: #fff;
        }

        .buy p {
            color: #fff;
        }

        .slick-prev {
            left: -25px;
            z-index: 9;
        }

        .slick-next {
            right: 0px;
            z-index: 9;
        }

        .card {
            margin-top: 3rem;
            margin-bottom: 1rem;
            width: 14rem;
            position: relative;
            text-align: center;
        }

        .card-text {
            padding-bottom: 1rem;
        }

        .info h5,
        p {
            text-decoration: none;
            color: #000;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        .sale {
            position: absolute;
            left: 3px;
            top: 3px;
            width: 20%;
            height: auto;
        }

        h1,
        h2,
        h3,
        h4 {
            margin: auto;
            color: #fff;
        }

        del {
            color: #aaa;
        }
    </style>
</head>

<body>
<?php include('header.php'); ?>


    <div class="container">

        <div class="image"><img src="../img/product/1.png" alt=""></div>
        <br><br><br>
        <main style="padding-left: 5%;">
            <h1>活力複方精油</h1>
            <br><br>
            <div class="text" style="float: left; width: 65%;">
                <h3 style="font-weight: bold;">提振身心，活力充沛的自然能量</h3>
                <br>
                <p>我們自豪地呈獻「活力複方精油」，精心調配的精油複方，專為提振您的身心而設計。<br>
                    結合了多種天然植物精華，為您帶來持久的活力和精神。
                    <br><br>
                <h3 style="font-weight: bold;">多種天然植物力量</h3>
                <br>
                <p>「活力複方精油」融合了多種天然植物的力量，包括柑橘、薄荷和迷迭香等。<br>
                    每一種成分都具有獨特的提神和活化效果，讓您在短時間內感受到身心的豐盈。</p>
            </div>

            <div class="buy" style="float: right; width: 35%; text-align: center;">
                <p>NT$1,080
                    <br><br>
                    數量
                </p>
                <input type="number" min="1" step="1" value="1" style="height: 50px;width: 75px;">
                <br><br>
                <a href="#" class="btn btn-secondary text-center" style="border-radius: 15px; width: 60%; height: 150%;">新增到購物車</a>
                <a href=""> <i class="bi bi-heart-fill" style="color: #fff;"></i> </a>
            </div>

        </main>

        <br><br><br><br>

        <h2 style="text-align: center;">相關產品</h2>

        <!-- slick slider -->
        <div class="responsive">
            <div>
                <div class="col">
                    <div class="card"><a class="info" href="./product-2.php">
                            <img class="sale" src="../img/Sale.png" alt="">
                            <img src="../img/product_s/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">苦橙葉單方精油</h5>
                                <p class="card-text"><del>NT$1,280</del> NT$960</p>
                                <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="col">
                <div class="card"><a class="info" href="./product-3.php">
                        <img class="sale" src="../img/Sale.png" alt="">
                        <img src="../img/product_s/3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">大麻喚醒按摩精油</h5>
                            <p class="card-text">NT$1,580</p>
                            <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-4.php">
                    <img class="sale" src="../img/Sale.png" alt="">
                    <img src="../img/product_s/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">溫和植萃沐浴組</h5>
                        <p class="card-text">NT$980</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-5.php">
                    <img class="sale" src="../img/Sale.png" alt="">
                    <img src="../img/product_s/5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">柚木沐浴皂3件組</h5>
                        <p class="card-text"><del>NT$680</del> NT$510</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-6.php">
                    <img class="sale" src="../img/Sale.png" alt="">
                    <img src="../img/product_s/6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">保濕修護乳霜</h5>
                        <p class="card-text">NT$1,280</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-7.php">
                    <img class="sale" src="../img/Sale.png" alt="">
                    <img src="../img/product_s/7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">玫瑰淨白精華</h5>
                        <p class="card-text">NT$2,180</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-8.php">
                    <img class="sale" src="../img/Sale.png" alt="">
                    <img src="../img/product_s/8.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">超保濕6件組</h5>
                        <p class="card-text"><del>NT$3,380</del> NT$3,080</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-9.php">
                    <img src="../img/product_s/9.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">蠟燭 | 天海相接</h5>
                        <p class="card-text">NT$980</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-10.php">
                    <img class="sale" src="../img/Sale.png" alt="">
                    <img src="../img/product_s/10.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">蠟燭 | 松林清晨</h5>
                        <p class="card-text"><del>NT$980</del> NT$880</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    <div>
        <div class="col">
            <div class="card"><a class="info" href="./product-11.php">
                    <img src="../img/product_s/11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">蠟燭 | 原野芬芳</h5>
                        <p class="card-text">NT$980</p>
                        <a href="#" class="btn btn-outline-secondary text-center d-block">新增到購物車</a>
                </a>
            </div>
        </div>
    </div>
    </div>

    </div>

    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assist/ap.js"></script>

    <script type="text/javascript" src="../assist/slick-1.8.1/slick/slick.min.js"></script>

    <script>
        $('.responsive').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 6,
            responsive: [{
                    breakpoint: 1499,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                    }
                },
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
</body>

</html>