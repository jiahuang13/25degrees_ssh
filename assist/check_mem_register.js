$(document).ready(function () {

  // 變數設定為各個要被檢查的物件
  var chk_mail = $('.mem_mail');
  var chk_pwd = $('.mem_pwd');
  var chk_confirm_pwd = $('.confirm_pwd');

  //變數設定為各個檢查後的結果
  var test_mail = false;
  var test_pwd = false;
  var test_confirm_pwd = false;

  //變數設定為msg顯示的位置
  var msg_mail = $('.msg_mail');
  var msg_pwd = $('.msg_pwd');
  var msg_confirm_pwd = $('.confirm_pwd');

  //變數設定為msg顯示時輔助的設定
  var msg_blue_start = '<span style="color:blue">';
  var msg_blue_end = '</span>';
  var m1 = '<span class="str1"></span>';
  var m0 = '<span class="str0"></span>';
})

//=========檢測帳號=================
chk_mail.on('blur', function () {
  if ($(this).val() != '') {
    var chk_mail_val = $(this).val();
    var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;

    if (!reg.test(chk_mail_val)) {
      $(msg_mail).html('帳號格式不符合');
      test_mail = false;
    } else {
      $.ajax({
        url: './mem_chk_mem_mail.php',
        type: 'post',
        data: {
          mem_mail: chk_mail_val
        }
      }).done(function (msg) {
        if (msg == 1) {
          $(msg_mail).html('帳號已存在，不能使用');
          test_mail = false;
        } else {
          $(msg_mail).html(msg_blue_start + '帳號可以使用' + msg_blue_end);
          test_mail = true;
        }
      })
    }
  }
})

//當游標點入帳號欄位時
chk_mail.on('focus', function () {
  $(msg_mail).html('');
})

//==========檢查密碼===============
chk_pwd.on('keyup', function () {
  var strength = 0;
  checkStrength(chk_pwd.val());

  function checkStrength(pwd) {
    if (pwd.length < 6) {
      $(msg_pwd).html('密碼未達6個字元(應輸入6-20字元)');
      test_pwd = false;
    } else if (pwd.length > 20) {
      $(msg_pwd).html('密碼超過20字元(應輸入6-20字元)');
      test_pwd = false;
    } else {
      test_pwd = true;
    }
  }
})
//當游標點入密碼欄位時
chk_pwd.on('focus', function () {
  $(msg_pwd).html('');
})

//=============二次密碼核對===============
function chk2pwd() {
  if (chk_confirm_pwd.val() == chk_pwd.val()) {
    $(msg_confirm_pwd).html(msg_blue_start + '密碼相符' + msg_blue_end);
    test_confirm_pwd = true;
  } else {
    $(msg_confirm_pwd).html('密碼不符');
    test_confirm_pwd = false;
  }
}

chk_pwd.on('keyup', function () {
  if (chk_confirm_pwd.val() != '') {
    chk2pwd();
  }
})

chk_confirm_pwd.on('keyup', function () {
  if (chk_pwd.val() != '' && chk_confirm_pwd.val() != '') {
    chk2pwd();
  }
})

//=============按下註冊時的判斷=============
$('.mem_addmem_area').on('submit', function(){
  if(test_mail && test_pwd && test_confirm_pwd){
    return true;
  } else {
    var result = '';
    var msg2_mail = '<p>帳號必須以email格式申請</p>';
    var msg2_pwd =  '<p>密碼必須以6-20字元填寫</p>';
    var msg2_confirm_pwd =  '<p>請確認兩次密碼輸入相同</p>';

    if(!test_mail){
      result += msg2_mail;
    }
    if(!test_pwd){
      result += msg2_pwd;
    }
    if(!test_confirm_pwd){
      result += msg2_confirm_pwd
    }

    $('#memChkModal .info-content').html(result);
    $('.showModalBtn').trigger('click');

    return false;
  }
})