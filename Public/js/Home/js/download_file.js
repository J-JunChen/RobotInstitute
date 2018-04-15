
$("#read_file button").click( function () {

  var id = $(this).attr("data");

  //console.log(id);
   $.ajax({
      url: "read_file",
      data: {id:id},
      type: 'POST',
      success: function (data) {
        $json_file = JSON.parse(data)
        //console.log($json_file);

         $('#read_file_name').val($json_file.file_name);
         $('#read_file_title').val($json_file.file_title);
         $('#read_file_title').text($json_file.id);
        $('#read_file_description').val($json_file.file_description);
      },

      error:function(){
        alert("查看失败！");
      }
  });
   
 });
   
 $('#download_file_button').click(function ()  {
  
    var id = $("#read_file_title").text();
 
   $.ajax({
      url: "download_file",
      data: {id:id},
      type: 'POST',
      async:false,
      success: function (data) {
        var json_file = JSON.parse(data);
         window.open(json_file.file_path);

      },

      error:function(){
        alert("下载失败！");
      }
  });
      
 }) 