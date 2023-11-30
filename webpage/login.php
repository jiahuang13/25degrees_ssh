<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
    body {
      background-color: #091b0c;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      background-color: #516b56;
    }

    .nav-link, a {
      color: #fff;
    }

    .nav-link:focus, .nav-link:hover, a:focus, a:hover {
      color: #516b56;
    }

    .btn-primary {
      background-color: #516b56;
      border-color: #516b56;
      box-shadow: none;
    }

    .btn-check:focus+.btn-primary,
    .btn-primary:focus,
    .btn-primary:hover {
      background-color: #516b56;
      border-color: #516b56;
      box-shadow: none;
    }
  </style>
</head>


<body>
<?php include('header.php'); ?>

  <!-- ======================login/register=========================== -->
  <div class="d-flex align-items-center justify-content-center mt-5">
    <div class="container-lg w-25">
      <!-- navs -->
      <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="tab-login" data-mdb-pill-init data-bs-toggle="pill" data-bs-target="#pills-login" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">登入</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="tab-register" data-mdb-pill-init data-bs-toggle="pill" data-bs-target="#pills-register" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">註冊</a>
        </li>
      </ul>

      <!-- content -->
      <div class="tab-content">
        <!-- ==============登入tab========================-->
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel">

          <form method="post" action="./login_check.php" class="mem_login_area">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" name="mem_mail" id="loginName" class="form-control w-100" placeholder="請輸入Email為帳號" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" name="mem_pwd" id="loginPassword" class="form-control w-100" placeholder="請輸入密碼" />
            </div>

            <!-- 2 column grid layout -->
            <div class="row mb-4">
              <div class="d-flex justify-content-center">
                <!-- Simple link -->
                <a href="#!">忘記密碼?</a>
              </div>
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary btn-block mb-4">登入</button>
            </div>
          </form>
          <!-- <h4 class="text-center text-danger">
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
        </h4> -->
        </div>

        <!-- =======================註冊tab======================= -->
        <div class="tab-pane fade" id="pills-register" role="tabpanel">
          <form method="post" action="./register_ok.php">
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input name="mem_name" placeholder="請輸入名稱" required type="text" id="registerName" class="form-control w-100" />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input name="mem_mail" placeholder="請輸入email為帳號" required type="email" id="registerEmail" class="form-control w-100" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input name="mem_pwd" placeholder="請輸入密碼" required type="password" id="registerPassword" class="form-control w-100" />
            </div>

            <!-- Repeat Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input name="confirm_pwd" placeholder="請再次輸入密碼" required type="password" id="registerRepeatPassword" class="form-control w-100" />
            </div>


            <!-- Submit button -->
            <div class="d-flex justify-content-center">
              <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-3 mem_addmem_area">註冊</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- ==========按鈕與modal========== -->
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary showModalBtn d-none" data-bs-toggle="modal" data-bs-target="#memChkModal">
    表單檢查結果
  </button> -->

  <!-- Modal -->
  <!-- <div class="modal fade" id="memChkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">申請表單填寫有錯，請檢查</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body info-content">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>


  <!-- <script src="../assist/check_mem_register.js"></script> -->
</body>

</html>