<!DOCTYPE html>
<html>
	<head>
		<title>东莞理工学院机器人学院</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="shortcut icon" href="__PUBLIC__/robot.ico"/>

		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/fonts/Home/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/fonts/Home/themify-icons/themify-icons.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/vendors/bootstrap4/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/vendors/owl.carousel/owl.carousel.css">

		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;amp;subset=latin-ext">

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/main.css">

		<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/component.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/footer.css">

			<!-- Animate.css -->
		<link rel="stylesheet" href="__PUBLIC__/css/album/animate.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="__PUBLIC__/css/album/magnific-popup.css">
		<!-- Salvattore -->
		<link rel="stylesheet" href="__PUBLIC__/css/album/salvattore.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/self.css">

		<style type="text/css">

			#fh5co-board .item{
				margin: 20px 10px;
				border-radius: 10px;
				background-color: #FFF;
				box-shadow: 3px 3px 5px #888888;
			}
		
			.fh5co-desc{
				padding: 20px;
			}

			.fh5co-board-img img:hover{
				opacity:0.5;
			}

			.album_check{
		        display: -webkit-flex; 
		        display: flex;
		        flex-direction: column;
		        width: 100%;
		        text-align: right;
		    }

		    .album_check span{

		        font-size: 13px;
		        font-style: italic;
		        padding-right: 20px ;
		        width: 100%;
		    }

		</style>


	</head>
	
	<body>
		<div class="page-wrap">

			<!-- header -->
			<header class="header">
				<!-- 引进目录 -->
 					<include file = "home_menu" /> 
			</header><!-- End / header -->
			
<div id="fh5co-main" style = "background-image: url(__PUBLIC__/images/background/album_background.jpg);">
	<div class="container">
	
<div class="title-01">
	<h2 class="title-01__title" id="title">照片墙</h2>	
</div>

<div class="row" style="min-height: 400px;">
	<div id="fh5co-board" data-columns>

		<?php 

		    use Think\Model;
		    $table = M('InstitutePhotoAlbum');
		    $data = $table->order('id desc')->select();
		 
		    foreach ($data as $key => $value) {

		        echo ' <div class="item" style = "box-shadow: 3px 3px 5px #888888;">
		        
		               
		                 <div class="animate-box">
		                  
		                    <a href="'.$value['album_file'].'" class="image-popup fh5co-board-img" title="'.$value['album_description'].'"><img src="'.$value['album_file'].'" alt="相册图片"></a>

		                </div>
		                    <div class="fh5co-desc">'.$value['album_description'].'</div>

		                <div class = "album_check" >

		                    <span>上传时间：'.date('Y/m/d',$value['date']).'</span>
		                    <span style="color:#f39c12">by：'.$value['user_type'].'</span>
		                </div>
		                    
		            </div>';
		     
		    }
		?>
	</div>
</div>

	<div id="jiathis">
		<div class="jiathis_style_24x24">
			<span class="jiathis_txt" style ="color:blue;">可分享到：</span>
			<a class="jiathis_button_qzone"></a>
			<a class="jiathis_button_tsina"></a>
			<a class="jiathis_button_weixin"></a>
		</div>
	</div>	

   </div>
</div>
					
			
			<!-- 引进页脚 -->
			<include file = "home_footer" />

			
		</div>


		<!-- Vendors-->
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/jquery.countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/jquery.countTo/jquery.countTo.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/jquery.countUp/jquery.countup.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/owl.carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/menu/menu.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/Home/vendors/smoothscroll/SmoothScroll.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="__PUBLIC__/js/Home/js/main.js"></script>

		<script src="__PUBLIC__/js/Home/js/classie.js"></script>
		<script src="__PUBLIC__/js/Home/js/modalEffects.js"></script>

		<script src="__PUBLIC__/js/Home/js/footer.js"></script>

		<!-- jQuery -->
	<script src="__PUBLIC__/js/album/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="__PUBLIC__/js/album/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="__PUBLIC__/js/album/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="__PUBLIC__/js/album/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="__PUBLIC__/js/album/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="__PUBLIC__/js/album/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="__PUBLIC__/js/album/main.js"></script>

	<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=2159296" charset="utf-8"></script>

	<!-- 自定义分享按钮 -->
	<script  src="__PUBLIC__/js/Home/js/jiathis.js"></script> 
	<script src = "__PUBLIC__/js/Home/js/send_mail.js"></script>

	</body>
</html>
