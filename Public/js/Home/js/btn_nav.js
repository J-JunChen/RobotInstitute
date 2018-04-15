var flag = 0;
$('.btn_nav').click(function () {
	 if (flag == 0) {
        $(".section_nav").slideDown();
        flag = 1;
    }
    else{
        $(".section_nav").slideUp();
        flag = 0;
    }
	 
})