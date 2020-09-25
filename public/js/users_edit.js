layui.use(['form', 'upload'], function(){
  var form = layui.form
  ,layer   = layui.layer
  ,upload  = layui.upload
  ,$       = layui.jquery

  //监听提交
  form.on('submit(userEditBtn)', function(data){

    // 打印提交数据
    console.log('提交数据' + data.field);
    // 遮罩层
    var loginLoadIndex = layer.load(2);

    $.ajax({
      type:'patch',
      url:route('users.update', data.field.user_id),
      dataType:'json', // dataType 设置你收到服务器数据的格式
      headers:  {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      },
      data:data.field,
      success:function (res) {
        console.log('返回数据' + res);
        layer.close(loginLoadIndex);
        if (res){
          window.location.href = route('users.show', res.id);
        }
      },
      error:function (res) {
        console.log(res);return false;
        layer.close(loginLoadIndex);
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
        } else {
          layer.msg('网络异常！', {
            time: 3000,
          });
        }
      }
    });

    return false; // 禁止表单跳转
  });


  //普通图片上传
  var uploadInst = upload.render({
    elem: '#imagesBtn'
    ,url: route('uploads.upload_image')
    ,headers:  {
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
    ,before: function(obj){
      obj.preview(function(index, file, result){
        $('#imagesPre').attr('src', result);
      });
    }
    ,done: function(res){
      if(res.code == 0){
        // 上传成功
        $("#avatar").attr("value",res.data.src);
        layer.msg('上传成功，请继续');return;
      } else {
        // 上传失败
        layer.msg('上传失败');return;
      }
    }
    ,error: function(){
      // 演示失败状态，并实现重传
      layer.msg('演示失败');return;
    }
  });

});
