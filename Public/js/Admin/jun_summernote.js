  //调用富文本编辑
$(document).ready(function() {

  var $summernote = $('#summernote').summernote({
    height: 400,
    minHeight: null,
    maxHeight: null,
    focus: true,
    lang: 'zh-CN', //必须先加入summernote-zh-CN.js才能使用
    placeholder: "在此输入文字",
    fontNames: ['宋体','微软雅黑','楷体','黑体','Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather','Consolas'],
    popover: {
        image: [
          ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
          ['remove', ['removeMedia']],
        ],
    },

    toolbar: [
         // 集成一个toolbar
            // ['para', ['style','height','ul', 'ol', 'paragraph']],
            // ['view', ['fullscreen','undo','redo']],
            // ['font', ['color','fontname','fontsize','bold', 'italic', 'underline', 'clear','superscript']],
            // ['insert', ['link', 'picture', 'video']],


          // 每一个toolbar分离
           //font
          ['color', ['color']],
          ['fontname',['fontname']],
          ['fontsize',['fontsize']],
          ['bold',['bold']],
          ['italic',['italic']],
          ['underline',['underline']],
          ['clear',['clear']],
          ['superscript',['superscript']],

          //para
          ['style', ['style']],
          ['height',['height']],
          ['ul',['ul']],
          ['ol',['ol']],
          ['paragraph',['paragraph']],
        
          //view
          ['fullscreen',['fullscreen']],
          ['undo',['undo']],
          ['redo',['redo']],


          //insert
          ['table', ['table']], 
          ['link',['link']],
          ['picture',['picture']],
          ['video',['video']],
    ],

  
    //调用图片上传
    callbacks: {

        onImageUpload: function (files) {
            sendFile($summernote, files[0]);
        },
      }
});

//ajax上传图片
function sendFile($summernote, file) {

    var formData = new FormData();
    formData.append("file", file);

    $.ajax({

        url: "picture_server",
        data: formData,
        type: 'POST',

        //如果提交data是FormData类型，那么下面三句一定需要加上
        cache: false,  
        contentType: false,
        processData: false,

        success: function (data) {
            //$('#summernote').summernote('insertImage', 'Public/images/20180131/logo4.jpg');
            
            $('#summernote').summernote('insertImage', data);  //直接插入路径就行，filename可选
            // console.log(data);
        },

        error:function(){
          alert("上传图片失败！");
        }
    });
}

// Firefox和Chrome早期版本中带有前缀
var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

//下面代码必须在var $summernote = $('#summernote').summernote()构造完才有class = note-editable，否则直接使用会报错
//
// 选择目标节点
var target = document.querySelector('.note-editable'); 
// 创建观察者对象
var observer = new MutationObserver(function(mutations){ //观察对象的回调函数

  //console.log(mutations);

  mutations.forEach(function(mutation) //forEach：遍历所有MutationRecord
  {  
    // console.log(mutation);
    // console.log(mutation.type);  //MutationRecord.type

    if(mutation.addedNodes[0]!=null){ 
      // console.log(mutation.addedNodes);
      //  console.log(mutation.addedNodes[0]);
      //  console.log(mutation.addedNodes[0].src);
     // if(mutation.addedNodes[0].tagName ==  "IMG")
        //console.log("成功添加一张img");
   }

     if(mutation.removedNodes[0]!=null)
    {

       //console.log(mutation.removedNodes);

       if(mutation.removedNodes[0].tagName ==  "IMG")
       {

          // var href = location.href; //当前路径

          // console.log(href);

          // href = href.substring(0,href.lastIndexOf("/")+1);
          // console.log(href);

          var imgSrc =mutation.removedNodes[0].src;
          console.log(imgSrc);

          imgSrc = imgSrc.replace('http://'+location.host+'/',''); //一种分离相对路径很笨的办法
          console.log(imgSrc);

          imgSrc = imgSrc.substring((imgSrc.indexOf("/")+1),imgSrc.length);
          console.log(imgSrc);

          $.ajax({
             type: "POST",
             url: "delete_picture",  //同目录下的php文件
             data:{imgSrc:imgSrc},
             success: function(msg){ //请求成功后的回调函数
              
                 alert(msg); //提示图片删除成功！
                  
             } 
           });
        }
    }

  });  

});

// 配置观察选项:
var config = { attributes: true, childList: true, characterData: true ,subtree:true};

// 传入目标节点和观察选项
observer.observe(target, config);

});


$("#submit").click(function () { //点击提交按钮
  
    var title = $('#title').val();
    var editable_title = $('#editable_title').val();
    var editable_catalog = $('#editable_catalog option:selected').val(); //子栏目被选中的value
    var editable_catalog_name = $('#editable_catalog option:selected').text(); //子栏目被选中的text，表的中文名

    var content = $('#summernote').summernote('code');
    var filteredContent = $(content).text().replace(/\s+/g, ''); //判断内容是否为空

    //console.log(title.replace(/^\s+|\s+$/g,"").length);
    // console.log(editable_catalog_name+editable_catalog);

    if(title.replace(/^\s+|\s+$/g,"").length == 0) //去除前后空格
      alert('标题不能为空');
    
    else if (editable_title == null) 
         alert('请选择栏目');

    else if (editable_catalog == '请选择子栏目') 
        alert('请选择子栏目');

    else if(filteredContent.length <= 0) 
          alert('内容不能为空');

    else if(confirm("确认提交？")) { //所有填写充分时

        var submit_infor ={  
          'title':title,  
          'editable_title':editable_title,  
          'editable_catalog':editable_catalog,  
          'content':content
       } 

       $.ajax({
          url: "submit",
          data: submit_infor,
          type: 'POST',
          success: function (data) {
            alert(data);
            window.parent.location.href = "editable_content?title="+editable_catalog_name+"&content="+editable_catalog;//父页跳转
          },

          error:function(){
            alert("提交失败！");
          }
      });
    }

})



$('#editable_title').change(function () { //栏目有改变

    var group_id = $('#editable_title option:selected').val();
    //console.log(group_id);

    var editable_title = $('#editable_title option:selected').text();
   // console.log(editable_title);

    $('#editable_catalog option').remove(); //每次更新，先清除原来的选项
    $('#editable_catalog').append("<option disabled selected style='display:none;'>请选择子栏目</option>");  

     $.ajax({
        url: "editable",
        data: {editable_title:editable_title},
        type: 'POST',
        success: function (data) {

         // console.log(data);
              $('#editable_catalog').append(data); // 添加到UL中去
        },
    });

})





