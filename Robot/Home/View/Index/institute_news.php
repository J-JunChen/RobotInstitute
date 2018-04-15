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

		<link href="__PUBLIC__/css/Home/css/hover-min.css" rel="stylesheet">

		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;amp;subset=latin-ext">

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/main.css">

		<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/component.css" />

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/footer.css">

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/self.css">

		<style type="text/css">

			.institute_news_list_class{
				padding: 10px 0;
				border-bottom: 3px dotted;
			}

			.widget-text__style-04 .widget-text__content > *:last-child {
			     border-bottom: none; 
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

			<!-- Content-->
<div class="md-content" style="background-color: #f7f7f7">
	<!-- Section -->
	<section class="md-section" style="background-color:#f7f7f7;">
					<div class="container">

						<div class="row" style="min-height: 400px;">
								<div class="col-md-12 col-lg-12 textbox_list" >

									<div class="title_flex" >
										<h2  class="post-03__title">学院动态</h2>
									</div>

									<!-- widget-text__widget -->
									<section class="widget-text__widget widget-text__style-04 widget">
										
										<div class="widget-text__content ">
										<div class="row">

<?php

	$institute_news_list_session =  session('institute_news_list_session');

	$institute_news_list = json_decode($institute_news_list_session , true);

	 // var_dump($institute_news_list);
	 
	 foreach ($institute_news_list as $key => $value) {

 		echo '
			<div class="col-md-6 col-lg-6">
				<div class= "institute_news_list_class">
	 			<div class="post-01__style-03">
					<a href="'.$value['editable_table'].'?title='.$value['catalog'].'&content='.$value['catalog_table'].'&id='.$value['id'].'">
						<div>
							<h2 class="post-01__title">'.$value['title'].'</h2>
							<div class="aaa">
								<div class="post-01__time">更新时间：'.date('Y-m-d',$value['date']).'</div>
								<div class="post-01__note"> by <a href = '.$value['editable_table'].'?title='.$value['catalog'].'&content='.$value['catalog_table'].' style ="color:#f39c12">'.$value['editable_title'] .' / '.$value['catalog'].'</a></div>
							</div>
						</div>
					</a>
				</div>
				</div>
			</div>
			';
	 }


?>

</div>
											
											
										</div>
									</section><!-- End / widget-text__widget -->

								</div>

						</div>


					
					</div>
				</section>


</div>

	
			<!-- End / Content-->

			<!-- 引进页脚 -->
			<include file = "home_footer" />

			<!-- JiaThis Button BEGIN -->

			
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

		<script src="__PUBLIC__/js/Home/js/btn_nav.js"></script>
		
		<script src = "__PUBLIC__/js/Home/js/send_mail.js"></script>

	</body>
</html>
