//配置axios基地址
axios.defaults.baseURL = 'https://hmajax.itheima.net'

//抽取toast函數
function showToast(msg) {
  const toastDom = document.querySelector('.my-toast')
  const toast = new bootstrap.Toast(toastDom)
  document.querySelector('.toast-body').innerText = msg
  toast.show()
}
