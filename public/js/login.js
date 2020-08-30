layui.use(['layer'],function () {
  var layer = layui.layer;
  var form  = layui.form //获取form模块
  var $     = layui.jquery
});

$(function () {
  // 页面初始化生成验证码
  createCode('#loginCode');
  // 验证码切换
  $('#loginCode').click(function () {
    createCode('#loginCode');
  });
  // 登陆事件
  $('#loginBtn').click(function () {
    login();
  });
  // 注册事件
  $('#registerBtn').click(function () {
    register();
  });
});

// 生成验证码
function createCode(codeID) {
  var code = "";
  // 验证码长度
  var codeLength = 4;
  // 验证码dom元素
  var checkCode = $(codeID);
  // 验证码随机数
  var random = [
    0,1,2,3,4,5,6,7,8,9,
    'A','B','C','D','E','F','G',
    'H','I','J','K','L','M','N',
    'O','P','Q','R','S','T',
    'U','V','W','X','Y','Z'
  ];
  for (var i = 0;i < codeLength; i++){
    // 随机数索引
    var index = Math.floor(Math.random()*36);
    code += random[index];
  }
  // 将生成的随机验证码赋值
  checkCode.val(code);
}

// 校验验证码、用户名、密码
function validateCode(inputID, codeID, funName = '') {
  var loginUsername = $('#loginUsername').val();
  var loginPassword = $('#loginPassword').val();
  var inputCode = $(inputID).val().toUpperCase();
  var cardCode  = $(codeID).val();

  if ($.trim(loginUsername) == '' || $.trim(loginUsername).length <= 0){
    layer.tips('用户名不能为空', '#loginUsername');
    return false;
  }
  if ($.trim(loginPassword) == '' || $.trim(loginPassword).length <= 0){
    layer.tips('密码不能为空', '#loginPassword');
    return false;
  }

  // 如果是注册，多一步验证
  if (funName == 'register') {
    var confirmPassword = $('#confirmPassword').val();
    if ($.trim(confirmPassword) == '' || $.trim(confirmPassword).length <= 0){
      layer.tips('确认密码不能为空', '#confirmPassword');
      return false;
    }
    if ($.trim(confirmPassword) == $.trim(loginPassword)){
      layer.tips('两次密码不一致', '#confirmPassword');
      return false;
    }
  }

  if (inputCode.length <= 0){
    layer.tips('验证码不能为空', codeID);
    return false;
  }
  if (inputCode != cardCode){
    layer.tips('请输入正确验证码', codeID);
    return false;
  }

  return true;
}

// 登录流程
function login() {
  if (!validateCode('#loginCard','#loginCode')){
    //阻断提示
  }else {
    var loginUsername = $('#loginUsername').val();
    var loginPassword = $('#loginPassword').val();
    var params = {};
    params.loginUsername = loginUsername;
    params.loginPassword = loginPassword;
    var loginLoadIndex = layer.load(2);
    $('#loginBtn').val("正在登录...");
    $.ajax({
      type:'post',
      url:"{{ route('login') }}",
      dataType:'html',
      data:JSON.stringify(params),
      contentType:'application/json',
      success:function (data) {
        layer.close(loginLoadIndex);
        var jsonData = JSON.parse(data);
        if (jsonData.code == '200'){
          window.location.href = "{{ route('topics.index') }}";
        }
      },
      error:function () {
        layer.close(loginLoadIndex);
        layer.msg('登录失败！', {
          time: 3000,
        });
        $('#loginBtn').val("登录");
      }
    });
  }
}

