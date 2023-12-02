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
// function checkLogin() {
//   const token = localStorage.getItem('token')
//   console.log(token);
//   //token為null表示沒有緩存
//   if (token === null) {
//     showToast('請先登入')
//     setTimeout(function () {
//       location.href = "./webpage/login.html"
//     }, 1500)
//   }
// }


//抽取帳號渲染函數 username首頁顯示歡迎 登出按鈕顯示
function renderUsername() {
  const username = localStorage.getItem('username')
  const token = localStorage.getItem('token')

  // console.log(username);
  if (username) {
    document.querySelector('.uname-render').innerText = `${username}，你好`
    document.querySelector('.logout').classList.remove('d-none')
  }
}

//抽取登出函數
function logout() {
  document.querySelector('.logout').addEventListener('click', function () {
    localStorage.removeItem('username')
    localStorage.removeItem('token')
    document.querySelector('.uname-render').innerText = "登入/註冊"
  })
}

// 添加请求拦截器
// 统一携带token
axios.interceptors.request.use(function (config) {
  // 可以通过headers，查看+设置请求头
  // config.headers['info'] = 'itheima666'
  // 每次发送请求，都会执行这个回调函数
  // console.log(config)
  // 在发送请求之前做些什么,比如: 统一设置token
  const token = localStorage.getItem('token')
  // token存在，才携带
  if (token) {
    config.headers['Authorization'] = token
  }
  return config;
}, function (error) {
  // 对请求错误做些什么
  return Promise.reject(error);
});


// 添加响应拦截器
// 统一处理token过期
// 数据剥离
axios.interceptors.response.use(function (response) {
  // console.log(response)
  // 2xx 范围内的状态码都会触发该函数。
  // 对响应数据做点什么，比如: 数据剥离
  // 剥离data属性，页面中少写.data属性，直接可以获取到数据
  return response.data;
}, function (error) {
  // console.dir(error)
  // 超出 2xx 范围的状态码都会触发该函数。
  // 对响应错误做点什么: 比如统一处理token失效
  // 统一处理token失效
  if (error.response.status === 401) {
    // 弹框提示用户
    showToast('请重新登录')
    // 删除缓存
    localStorage.removeItem('token')
    localStorage.removeItem('username')
    // 返回登录页
    setTimeout(() => {
      location.href = './login.html'
    }, 1500)
  }
  return Promise.reject(error);
});
