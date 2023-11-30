<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->
<link rel="stylesheet" href="../assist/header.css">


<header>
  <nav class="navbar navbar-expand-lg navbar-dark p-3" id="headerNav">
    <div class="container-xl p-1">
      <!-- 手機版logo -->
      <a class="navbar-brand d-block d-lg-none" href="../index.html">
        <img src="../img/25degrees_logo.png" class="logo" style="height: 100px;" />
      </a>

      <!-- 購物車 -->
      <button type=" button" class="btn btn_cart order-lg-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
        <i class="bi bi-cart pe-2"></i>購物車
        <span>2</span>
      </button>

      <!-- 手機版漢堡選單 -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- 桌機版navbar -->
      <div class="collapse navbar-collapse position-relative" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown p-1 header-nav-item">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="./shop.php">所有商品</a></li>
              <li><a class="dropdown-item" href="#">香氛</a></li>
              <li><a class="dropdown-item" href="#">精油</a></li>
              <li><a class="dropdown-item" href="#">身體保養</a></li>
              <li><a class="dropdown-item" href="#">臉部保養</a></li>
            </ul>
          </li>
          <li class="nav-item p-1 header-nav-item">
            <a class="nav-link mx-2" aria-current="page" href="./massage.php">精油按摩</a>
          </li>
          <li class="nav-item p-1 header-nav-item">
            <a class="nav-link mx-2" href="./blog.php">專欄</a>
          </li>
          <li class="nav-item p-1 header-nav-item">
            <a class="nav-link mx-2" href="./about.php">關於25°C</a>
          </li>
        </ul>

        <!-- logo -->
        <div class="logo d-lg-block mx-auto d-none">
          <li class="d-lg-block me-5">
            <a class="nav-link mx-2 me-5" href="../index.html">
              <img src="../img/25degrees_logo.png" class="me-5" height="150" />
            </a>
          </li>
        </div>

        <!-- 登入按鈕 -->
        <a href="./login.php"><button type="button" class="btn btn_login m-xl-3">
            登入/註冊
          </button></a>

      </div>
    </div>
  </nav>
</header>

<!-- =================== cart ======================== -->
<div class="cart offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="border: none;">&gt;</button>
    <h5 id="offcanvasRightLabel">購物車</h5>
  </div>
  <div class="offcanvas-body">


    <div class="item">
      <img src="../img/product_s/1.png" alt="">
      <p style="width: 40%;">苦橙葉單方精油<br>
        <del>NT$1,280</del> NT$960
      </p>

      <ul class="counter">
        <li id="minus"><input type="button" onclick="minuser()" value="-" /></li>
        <li id="countnum">1</li>
        <li id="plus"><input type="button" onclick="adder()" value="+" /></li>
      </ul>
      <i class="bi bi-trash"></i>
    </div>

    <div class="item">
      <img src="../img/product_s/9.png" alt="">
      <p style="width: 40%;">蠟燭 | 天海相接<br>
        NT$980
      </p>

      <ul class="counter">
        <li id="minus1"><input type="button" onclick="minuser1()" value="-" /></li>
        <li id="countnum1">1</li>
        <li id="plus1"><input type="button" onclick="adder1()" value="+" /></li>
      </ul>
      <i class="bi bi-trash"></i>
    </div>

    <div class="purchase d-flex flex-column">
      <h4>小計：NT$1,940</h4>
      <a href="#" class="btn btn-outline-dark text-center d-block">購物車明細</a>
    </div>
  </div>

</div>
</div>
</div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
<script>
  function adder() {
    var count = $("#countnum").text();
    count = parseInt(count) + 1;
    $("#countnum").text(count);
  }

  function minuser() {
    var count = $("#countnum").text();
    if (count <= 0) {
      count = 0;
    } else {
      count = parseInt(count) - 1;
    }
    $("#countnum").text(count);
  }
</script>

<script>
  function adder1() {
    var count = $("#countnum1").text();
    count = parseInt(count) + 1;
    $("#countnum1").text(count);
  }

  function minuser1() {
    var count = $("#countnum1").text();
    if (count <= 0) {
      count = 0;
    } else {
      count = parseInt(count) - 1;
    }
    $("#countnum1").text(count);
  }
</script>