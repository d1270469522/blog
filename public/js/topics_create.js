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

  //监听提交
  form.on('submit(userEditBtn)', function(data){

    var formType = 'POST';
    var formUrl  = route('topics.store');

    // 打印提交数据
    console.log('提交数据' + data.field);
    // 遮罩层
    var loginLoadIndex = layer.load(2);

    if (data.field.topic_id != 0) {
      formType = 'PATCH';
      formUrl  = route('topics.update', data.field.topic_id);
    }

    $.ajax({
      type:formType,
      url:formUrl,
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
        console.log(res);
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

});

// 在下方实时显示效果
$(".CodeMirror").keyup(function () {
  var simplemde_mar = simplemde.value();
  var simplemde_str = simplemde.markdown(simplemde_mar);
  console.log(simplemde_mar);
  console.log(simplemde_str);
  $("#preview").html(simplemde_str);
})


// Markdown 格式编辑
var simplemde = new SimpleMDE({
  // 要使用的 textarea 的 DOM 元素。默认为页面上的第一个文本区域。
  element: document.getElementById("editor"),
  // 自动下载 FontAwesome，设置成 false 不下载
  autoDownloadFontAwesome: false,
  // 调整用于在预览（而非编辑）期间解析Markdown的设置
  renderingConfig: {
    // 如果设置为true，将使用 highlight.js 高亮显示。默认为false。
    codeSyntaxHighlighting: true,
  },
  // 工具栏
  toolbar: [{
      name: "bold",
      action: SimpleMDE.toggleBold,
      className: "fa fa-bold",
      title: "加粗",
    },{
      name: "italic",
      action: SimpleMDE.toggleItalic,
      className: "fa fa-italic",
      title: "斜体",
    },{
      name: "strikethrough",
      action: SimpleMDE.toggleStrikethrough,
      className: "fa fa-strikethrough",
      title: "删除线",
    },{
      name: "heading",
      action: SimpleMDE.toggleHeadingSmaller,
      className: "fa fa-header",
      title: "标题",
    },{
      name: "code",
      action: SimpleMDE.toggleCodeBlock,
      className: "fa fa-code",
      title: "代码",
    },{
      name: "quote",
      action: SimpleMDE.toggleBlockquote,
      className: "fa fa-quote-left",
      title: "引用",
    },{
      name: "unordered-list",
      action: SimpleMDE.toggleUnorderedList,
      className: "fa fa-list-ul",
      title: "无序列表",
    },{
      name: "ordered-list",
      action: SimpleMDE.toggleOrderedList,
      className: "fa fa-list-ol",
      title: "有序列表",
    },{
      name: "link",
      action: SimpleMDE.drawLink,
      className: "fa fa-link",
      title: "链接",
    },{
      name: "image",
      action: SimpleMDE.drawImage,
      className: "fa fa-picture-o",
      title: "图片",
    },{
      name: "table",
      action: SimpleMDE.drawTable,
      className: "fa fa-table",
      title: "表格",
    },{
      name: "horizontal-rule",
      action: SimpleMDE.drawHorizontalRule,
      className: "fa fa-minus",
      title: "水平线",
    },{
      name: "preview",
      action: SimpleMDE.togglePreview,
      className: "fa fa-eye no-disable",
      title: "预览",
    },{
      name: "side-by-side",
      action: SimpleMDE.toggleSideBySide,
      className: "fa fa-columns no-disable no-mobile",
      title: "双屏",
    },{
      name: "fullscreen",
      action: SimpleMDE.toggleFullScreen,
      className: "fa fa-arrows-alt no-disable no-mobile",
      title: "全屏",
    }
  ],
});
