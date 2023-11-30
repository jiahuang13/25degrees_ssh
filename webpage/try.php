<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">登入</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">註冊</button>
    </li>
  </ul>


  <div class="tab-content" id="pills-tabContent">
    <!-- ============登入======================= -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <form method="post" action="./login_check.php" class="mem_login_area">
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" name="mem_mail" id="loginName" class="form-control" placeholder="請輸入Email為帳號" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" name="mem_pwd" id="loginPassword" class="form-control" placeholder="請輸入密碼" />
        </div>

        <!-- 2 column grid layout -->
        <div class="row mb-4">
          <div class="col-md-6 d-flex justify-content-center">
            <!-- Simple link -->
            <a href="#!">忘記密碼?</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">登入</button>
      </form>
      <h4 class="text-center text-danger">
        <?php
        if (isset($_GET['msg']) && $_GET['msg'] === 1) {
          echo '輸入的帳號或密碼有誤，請重新登入';
        } else if (isset($_GET['msg']) && $_GET['msg'] === 2) {
          echo '請以會員身份登入後，再進入會員中心';
        } else if (isset($_GET['msg']) && $_GET['msg'] === 3) {
          echo '請以管理者身份登入後，才能進入後台管理中心';
        } else if (isset($_GET['msg']) && $_GET['msg'] === 4) {
          echo '<span class="text-primary">感謝您驗證確認信！
          歡迎您成為正式會員，請登入再進入會員中心</span>';
        }
        ?>
      </h4>
    </div>

    <!-- ============註冊======================= -->
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <form method="post" action="./register_ok.php">
        <!-- Name input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input name="mem_name" placeholder="請輸入名稱" required type="text" id="registerName" class="form-control" />
        </div>

        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input name="mem_email" placeholder="請輸入email為帳號" required type="email" id="registerEmail" class="form-control" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input name="mem_pwd" placeholder="請輸入密碼" required type="password" id="registerPassword" class="form-control" />
        </div>

        <!-- Repeat Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input name="confirm_pwd" placeholder="請再次輸入密碼" required type="password" id="registerRepeatPassword" class="form-control" />
        </div>


        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-3">註冊</button>
      </form>
    </div>
  </div>



</body>

</html>