layui.use(['form'], function(){
  var form = layui.form
  ,layer   = layui.layer
  ,$   = layui.jquery

  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
  });

});

/**
 * [页面自动加载]
 */
$(function () {
  // 用户编辑事件
  $('#userEditBtn').click(function () {
    register();
  });
});

function userEditSave() {

  var email = $('#email').val();
  var email = $('#email').val();
  var email = $('#email').val();
  var email = $('#email').val();
  var email = $('#email').val();
  var email = $('#email').val();
  var email = $('#email').val();
  var email = $('#email').val();
  var params = {};
  params.email = email;
  params.email = email;
  params.email = email;
  params.email = email;
  params.email = email;

  // 遮罩层
  var loginLoadIndex = layer.load(2);
  // 提交按钮文本改变
  $('#userEditBtn').val("正在保存...");

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
      $('#userEditBtn').val("保存");
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
