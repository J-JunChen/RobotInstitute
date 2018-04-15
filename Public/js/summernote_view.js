  //调用富文本编辑
$(document).ready(function() {

  var $summernote = $('#summernote').summernote({
    // height: 400,
    // 
    minHeight: null,
    maxHeight: null,
    focus: true,
    lang: 'zh-CN', //必须先加入summernote-zh-CN.js才能使用
    toolbar: false,

});

  $('#summernote').summernote('disable');

})