// 反馈邮箱正则验证
function validateEmail(val) {
	$('#email_span').empty();

	         //对电子邮件的验证
	 var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		if(!myreg.test(val))
		{
		  $('#email_span').append('（请输入有效的Email地址！）');
		  $('#md-submit').attr('disabled','disabled');
		}
		else{
			 $('#md-submit').removeAttr('disabled');
		}
}


// 意见反馈信息通过邮箱发送
$('#md-submit').click(function() {

	$('#button_span').empty();

	var feedback_name  = $('#feedback_name').val();
	var feedback_eamil = $('#feedback_email').val();
	var feedback_infor = $('#feedback_infor').val().replace(/^\s+|\s+$/g,"");;
	// alert(feedback_infor);
	
	if (feedback_name == '') {
		$('#button_span').append("（请输入您的名字！）");
	}

	else if(feedback_eamil == ''){
		$('#button_span').append("（请输入您的邮箱！）");
	}

	else if(feedback_infor == ''){
		$('#button_span').append("（请输入您的反馈信息！）");
	}

	else{
		var infor = {
			'feedback_name' :feedback_name,
			'feedback_email' : feedback_eamil,
			'feedback_infor' : feedback_infor
		};

		$.ajax({
			url:'feedback',
			data:infor,
			type:'POST',
			success:function (data) {
				alert(data);
				window.location.reload();
			},

			error:function () {
				alert("发送失败");
			}
		});
	}

	

});

