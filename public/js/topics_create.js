layui.use(['form'], function(){
  var form = layui.form
  ,layer   = layui.layer

  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
  });



});
