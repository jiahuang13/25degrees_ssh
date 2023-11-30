<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="./img/favicon.svg" type="image/x-icon" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet" />

  <title>精油按摩</title>
</head>
<style>
  :root {
    --animate-duration: 3s;
    --animate-delay: 1s;
    --animate-repeat: 1;
  }

  body {
    font-family: sans-serif;
    background-color: #091b0c;
  }

  .welcome {
    color: rgba(255, 255, 255, 0.9);
    background-image: url(../img/massage_01.jpg);
    background-position: top;
    background-size: cover;
    height: 50vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .welcome img {
    height: 50vh;
  }


  .welcome h2 {
    font-size: min(calc(1rem + 1.5vw), 40px);
  }

  .welcome h3 {
    font-size: min(calc(0.8rem + 1.5vw), 30px);
  }

  .welcome hr {
    color: white;
    width: 18%;
    min-width: 150px;
    height: 2px;
  }

  .container {
    align-content: center;
    width: 80%;
    padding: 50px 0;
  }

  .card {
    background-color: #516b56;
    position: relative;
    border-radius: 20px;
    animation-duration: 1.5s;
    /* box-shadow: -10px -10px 30px black; */
    overflow: hidden;
    font-weight: 100px;
    color: #091b0c;
    letter-spacing: 3px;
  }

  .card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .card-body {
    position: relative;
  }

  .card-title {
    color: white;
    padding: 20px;

  }

  .card-text {
    color: white;

  }

  .bottom {
    position: absolute;
    bottom: 15%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .container .btn {
    background-color: #516b56;
    color: rgba(255, 255, 255, 0.75);
    border-color: rgba(255, 255, 255, 0.75);
    padding-left: 20px;
    padding-right: 20px;
  }

  .btn:hover {
    background-color: #516b56;
    color: rgba(255, 255, 255, 0.75);
    border-color: #091b0c;
  }


  .container .form-control {
    width: 100%;
  }

  @media (min-width: 768px) {
    .welcome img {
      height: 100vh;
    }

    .card-text {
      padding-bottom: 100px;

    }
  }
</style>


<body>
  <!-- header =================================================== -->
  <?php include('header.php'); ?>

  <!-- main 1=================================================== -->
  <div class="welcome d-flex flex-column wow animate__animated animate__fadeIn">
    <!-- <img src="../img/massage_01.jpg" alt="DelftStack Logo"> -->
    <h2 style="font-family: serif;">精　油　按　摩</h2>
    <hr class="d-none d-lg-flex">
    <h3 style="font-family: serif;" class="d-none d-lg-flex">身　心　寧　靜．自　然　療　癒　的　寶　藏</h3>
  </div>
  <!-- main 2=================================================== -->
  <div class="massage">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 g-4">
        <div class="col">
          <div class="card h-100 wow animate__animated animate__fadeInLeft">
            <img src="../img/msg_01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">植萃精油深層紓壓</h5>
              <p class="card-text text-center">體驗深層植物精油按摩，融合大自然的能量，為您帶來身心的和諧與療癒。立即預約，感受自然的愛護。</p>
              <div class="bottom"><a href="#form" class="btn d-none d-lg-block">立即預約</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 wow animate__animated animate__fadeInLeft">
            <img src="../img/msg_02.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">全身經絡指壓</h5>
              <p class="card-text text-center">探索全新的身心平衡之旅，透過專業的全身經絡指壓服務，激活能量通道，促進身體的自然療癒能力。立即預約，享受深層的身心和諧。</p>
              <div class="bottom"><a href="#form" class="btn d-none d-lg-block">立即預約</a></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 wow animate__animated animate__fadeInLeft">
            <img src="../img/msg_03.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">臉部嫩膚保養</h5>
              <p class="card-text text-center">品味臉部嫩膚保養的極致享受，讓肌膚綻放自然光彩。專業按摩師給予您全面的肌膚護理，為您呈現年輕、飽滿的容顏。立即預約，感受肌膚的明顯改變。</p>
              <div class="bottom"><a href="#form" class="btn d-none d-lg-block">立即預約</a></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- main 3 表單=================================================== -->
  <div class="massage" id="form">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 offset-md-1" style="color: white; padding-top: 30px; padding-bottom: 30px; border-color: rgb(255, 255, 255); border: 1px solid; border-radius: 10px; ">

          <form method="POST" target="_blank" class="" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScqJDyAT_BxDEh8ijYZY_CqCUKQtjrPgU2QOsqEVwQ1Oi0IQA/formResponse">

            <p class="text-center"><small><span class="reqword">*</span> 表示欄位必填</small></p>

            <!-- 第1列 姓名 ======================================================= -->
            <div class="row mb-4 mb-sm-3  align-items-center">
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center 
                  justify-content-start justify-content-sm-end">
                <span><span class="reqword">*</span>姓名：</span>
                <span class="faword"><i class="bi bi-person"></i></span>
              </div>

              <div class="col-12 col-md-8">
                <input type="text" name="entry.800189385" class="form-control" required="" placeholder="請填寫聯絡人真實姓名, 方便與您聯絡......">
              </div>
            </div>

            <!-- 第2列 稱謂 ======================================================= -->
            <div class="row mb-4 mb-sm-3  align-items-center" style="padding-top: 20px">
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center 
    justify-content-start justify-content-sm-end">
                <span><span class="reqword">*</span>稱謂：</span>
                <span class="faword"><i class="bi bi-gender-ambiguous"></i></span>
              </div>

              <div class="col-12 col-sm-7 col-md-8 text-start text-sm-start">
                <label><input type="radio" name="entry.562521252" value="先生" class="form-check-input ms-3 me-1"> 先生
                </label>
                <label><input type="radio" name="entry.562521252" value="小姐" class="form-check-input ms-3 me-1"> 小姐
                </label>
              </div>
            </div>

            <!-- 第3列 手機 ======================================================= -->
            <div class="row mb-4 mb-sm-3  align-items-center" style="padding-top: 20px">
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center 
    justify-content-start justify-content-sm-end">
                <span><span class="reqword">*</span>手機：</span>
                <span class="faword"><i class="bi bi-phone-vibrate"></i></span>
              </div>

              <div class="col-12 col-md-8">
                <input type="text" name="entry.633084313" class="form-control" required="required" maxlength="11" pattern="09\d{2}-\d{6}" />
                <span>提醒：請填寫正確手機格式09xx-xxxxxx(數字含-標點符號)</span>
              </div>
            </div>

            <!-- 第4列 服務區域 ======================================================= -->
            <div class="row mb-4 mb-sm-3  align-items-center" style="padding-top: 20px">
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center 
    justify-content-start justify-content-sm-end">
                <span><span class="reqword">*</span>預約服務項目：</span>
                <span class="faword"><i class="bi bi-shop"></i></span>
              </div>

              <div class="col-12 col-sm-7 col-md-8">

                <select name="entry.118214249" class="form-select" aria-label="Default select example">
                  <option selected="" disabled="">請選擇預約的服務項目...</option>
                  <option value="植萃精油深層紓壓">植萃精油深層紓壓</option>
                  <option value="全身經絡指壓">全身經絡指壓</option>
                  <option value="臉部嫩膚保養">臉部嫩膚保養</option>
                </select>

              </div>
            </div>

            <!-- 第5列 方便連絡的時間 ======================================================= -->
            <div class="row mb-4 mb-sm-3  align-items-center" style="padding-top: 20px">
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center 
            justify-content-start justify-content-sm-end">
                <span><span class="reqword">*</span>方便連絡的時間：</span>
                <span class="faword"><i class="bi bi-check2-square"></i></span>
              </div>

              <div class="col-12 col-sm-7 col-md-8 text-sm-start">
                <label><input type="checkbox" name="entry.868934780_sentinel" value="上午12 點前" class="form-check-input ms-3 me-1">
                  上午12點前
                </label>
                <label><input type="checkbox" name="entry.868934780_sentinel" value="中午12點 ~ 下午3點" class="form-check-input ms-3 me-1">
                  中午12點~下午3點
                </label>
                <label><input type="checkbox" name="entry.868934780_sentinel" value="下午3點 ~ 傍晚5點" class="form-check-input ms-3 me-1">
                  下午3點~傍晚3點
                </label>
                <label><input type="checkbox" name="entry.868934780_sentinel" value="傍晚5點 ~ 晚上7點" class="form-check-input ms-3 me-1">
                  傍晚5點~晚上7點
                </label>
              </div>
            </div>

            <!-- 第6列 其他需求或建議事項 ======================================================= -->
            <div class="row mb-4 mb-sm-3  align-items-start" style="padding-top: 20px">
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center 
    justify-content-start justify-content-sm-end">
                <span><span class="reqword">*</span>其他需求：</span>
                <span class="faword"><i class="bi bi-chat-dots"></i></span>
              </div>

              <div class="col-12 col-sm-7 col-md-8">
                <textarea name="entry.1203023320" rows="6" class="form-control" required="" placeholder="如果沒有，請填無..."></textarea>
              </div>
            </div>

            <!-- 第7列 ======================================================= -->
            <div class="row mb-4 mb-sm-3  align-items-start" style="padding-top: 20px">
              <div class="col-12 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center 
    justify-content-start justify-content-sm-end">
              </div>
              <div class="col-12 col-sm-7 col-md-8 text-center">
                <input type="submit" class="btn" value="確定送出">
              </div>
            </div>
        </div>
        </form>

      </div>

    </div>


  </div>
  </div>

  <!-- footer =================================================== -->
  <?php include('footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

  <script src="../assist/ap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

</body>


</html>