//配置axios基地址
axios.defaults.baseURL = 'https://hmajax.itheima.net'

//抽取toast函數，顯示提示(login/register頁面都要用)
function showToast(msg) {
  const toastDom = document.querySelector('.my-toast')
  const toast = new bootstrap.Toast(toastDom)
  document.querySelector('.toast-body').innerText = msg
  toast.show()
}

//抽取校驗函數(首頁和？要用)
function checkLogin() {
  const token = localStorage.getItem('token')
  console.log(token);
  //token為null表示沒有緩存
  if (token === null) {
    showToast('請先登入')
    setTimeout(function () {
      location.href = "./webpage/login.html"
    }, 1500)
  }
}

//抽取帳號渲染函數 username首頁顯示歡迎
function renderUsername() {
  const username = localStorage.getItem('username')
  // console.log(username);
  document.querySelector('.uname-render').innerText = `${username}，你好`;
}