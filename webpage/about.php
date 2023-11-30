<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./img/favicon.svg" type="image/x-icon" rel="icon" />
    <meta charset="UTF-8">
    <title>關於25°C</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet" />
</head>

<style>
    :root {
        --animate-duration: 2s;
        --animate-delay: 1s;
        --animate-repeat: 1;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #091B0C;
        font-family: sans-serif;
    }

    .about-title {
        background-color: #475449;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        /* border-top: 5px rgb(132, 141, 134) solid */
    }

    .about-title h1 {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 200;
        color: white;
        font-size: min(calc(1rem + 1.5vw), 20px);
        letter-spacing: 5px;
    }




    .photo {
        width: 100%;
    }

    .text {
        width: 70%;
        margin: auto;
        padding: 10%;
    }

    .set img {
        width: 100vh;
        height: 50vh;
        object-fit: cover;
    }

    .set p {
        color: rgba(255, 255, 255, 0.75);
        font-size: min(calc(6px + 1.1vw), 16px);
        line-height: calc(6px + 2vw);
        letter-spacing: 3px;
    }

    @media (min-width:768px) {
        .set {
            height: 100vh;
            display: flex;
        }

        .set:nth-of-type(odd) {
            flex-direction: row-reverse;
        }

        .set img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text {
            width: 50%;
        }

        .photo {
            width: 50%;
        }
    }
</style>

<body>
    <?php include('header.php'); ?>

    <div class="about-title">
        <h1>The Story of 25°C</h1>
    </div>

    <div class="set d-lg-flex">
        <div class="photo wow animate__animated animate__fadeInRight">
            <img src="../img/blog01.jpg" alt="">
        </div>
        <div class="text wow animate__animated animate__fadeInLeft">
            <p>25°C，不只是一個品牌，更是一個呵護身心靈的生活伴侶。我們深知現代城市生活的繁忙和壓力，因此我們致力於為您締造一個能夠停下腳步、尋找平靜的空間。</p>
        </div>
    </div>

    <div class="set d-lg-flex wow animate__animated animate__fadeInDown">
        <div class="photo"><img src="../img/blog02.jpg" alt=""></div>
        <div class="text">
            <p>我們的產品涵蓋香氛和精油，能夠在您的生活中播撒一抹自然的芬芳，為您帶來身心的寧靜。我們追求細緻的香氛調配，希望每一款產品都能夠為您營造一種舒適的氛圍，讓您在家中或工作場所都感受到25°C的溫暖。
            </p>
        </div>
    </div>

    <div class="set d-lg-flex wow animate__animated animate__fadeInUp">
        <div class="photo"><img src="../img/blog04.jpg" alt=""></div>
        <div class="text">
            <p>此外，我們提供專業的按摩服務，不僅是身體上的享受，更是滋潤心靈的體驗。我們的按摩師具備豐富的經驗和技巧，針對您的需求提供量身訂造的按摩療程，讓您在輕柔的觸摸中釋放壓力，重拾活力。</p>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>