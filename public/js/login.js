/**
 * [layui 初始化]
 */
layui.use(['layer'],function () {

  var layer = layui.layer;
  var form  = layui.form //获取form模块
  var $     = layui.jquery

});

/**
 * [页面自动加载]
 */
$(function () {

  // 页面初始化生成验证码
  createCode('#loginCode');

  // 验证码切换
  $('#loginCode').click(function () {
    createCode('#loginCode');
  });

  // 注册事件
  $('#registerBtn').click(function () {
    register();
  });

  // 登陆事件
  $('#loginBtn').click(function () {
    login();
  });

});


/**
 * [register 注册流程]
 * 注册成功：跳转到个人中心页面
 * 注册失败：给用户提示错误信息
 */
function register() {
  // 校验提交信息是否合理
  if (!validateCode('#loginCard', '#loginCode', 'register')){
    //阻断提示
  } else {
    var email    = $('#email').val();
    var password = $('#password').val();
    var password_confirmation = $('#password_confirmation').val();
    var params = {};
    params.email    = email;
    params.password = password;
    params.password_confirmation = password_confirmation;

    // 遮罩层
    var loginLoadIndex = layer.load(2);
    // 提交按钮文本改变
    $('#registerBtn').val("正在注册...");

    $.ajax({
      type:'post',
      url:route('users.store'),
      dataType:'json', // dataType 设置你收到服务器数据的格式
      headers:  {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      },
      data:params,
      success:function (res) {
        layer.close(loginLoadIndex);
        if (res){
          window.location.href = route('users.show', res.id);
        }
      },
      error:function (res) {
        layer.close(loginLoadIndex);
        $('#registerBtn').val("注册");
        if (res.status == 422) {
          var json=JSON.parse(res.responseText);
          json = json.errors;
          for ( var item in json) {
            for ( var i = 0; i < json[item].length; i++) {
              layer.msg(json[item][i], {
                time: 3000,
              });
              return ; //遇到验证错误，就退出
            }
          }
        } else if (res.status == 500) {
          layer.msg('服务器错误！', {
            time: 3000,
          });
          return ;
        } else {
          layer.msg('网络异常！', {
            time: 3000,
          });
          return ;
        }
      }
    });
  }
}


/**
 * [login 登录流程]
 * @return {[type]} [description]
 */
function login() {
  if (!validateCode('#loginCard','#loginCode')){
    //阻断提示
  }else {
    var email    = $('#email').val();
    var password = $('#password').val();

    var params = {};
    params.email    = email;
    params.password = password;

    var loginLoadIndex = layer.load(2);
    $('#loginBtn').val("正在登录...");

    $.ajax({
      type:'post',
      url:route('login'),
      dataType:'json', // dataType 设置你收到服务器数据的格式
      headers:  {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      },
      data:params,
      success:function (res) {
        layer.close(loginLoadIndex);
        if (res){
          window.location.href = route('users.show', res.id);
        }
      },
      error:function (res) {
        layer.close(loginLoadIndex);
        $('#registerBtn').val("注册");
        if (res.status == 422) {
          var json=JSON.parse(res.responseText);
          json = json.errors;
          for ( var item in json) {
            for ( var i = 0; i < json[item].length; i++) {
              layer.msg(json[item][i], {
                time: 3000,
              });
              return ; //遇到验证错误，就退出
            }
          }
        } else if (res.status == 500) {
          layer.msg('服务器错误！', {
            time: 3000,
          });
          return ;
        } else {
          layer.msg('网络异常！', {
            time: 3000,
          });
          return ;
        }
      }
    });
  }
}



/**
 * [validateCode 校验用户名、密码、验证码]
 * @param  {String} inputID [用户输入的验证码]
 * @param  {String} codeID  [图片展示的验证码]
 * @param  {String} funName [传入的方法名称：register=注册，默认=登录]
 * @return {bloon}          [验证是否通过：false ｜ true]
 */
function validateCode(inputID, codeID, funName = '') {
  var email     = $('#email').val();
  var password  = $('#password').val();
  var inputCode = $(inputID).val().toUpperCase();
  var cardCode  = $(codeID).val();

  if ($.trim(email) == '' || $.trim(email).length <= 0){
    layer.tips('邮箱不能为空', '#email');
    return false;
  }
  if ($.trim(password) == '' || $.trim(password).length <= 0){
    layer.tips('密码不能为空', '#password');
    return false;
  }

  // 如果是注册，多一步验证
  if (funName == 'register') {

    var password_confirmation = $('#password_confirmation').val();

    if ($.trim(password_confirmation) == '' || $.trim(password_confirmation).length <= 0){
      layer.tips('确认密码不能为空', '#password_confirmation');
      return false;
    }

    if ($.trim(password_confirmation) != $.trim(password)){
      layer.tips('两次密码不一致', '#password_confirmation');
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


/**
 * [createCode 生成验证码]
 * @param  {string} codeID [验证码 dom 元素]
 * @return {string}        [生成的验证码]
 */
function createCode(codeID) {
  var code = "";
  // 验证码长度
  var codeLength = 4;
  // 验证码dom元素
  var checkCode = $(codeID);
  // 验证码随机数
  var random = [
    1,2,3,4,5,6,7,8,9,
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
