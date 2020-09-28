layui.use(['upload'], function(){
  var upload  = layui.upload

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
