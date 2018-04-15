<!DOCTYPE html>
<html>
	<head>
		<title>东莞理工学院机器人学院</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="keywords" content="东莞理工学院机器人学院, 机器人学院, RobotInstitute"/>
		<meta name="description" content="东莞理工学院机器人学院, 机器人学院, RobotInstitute"/>

		<link rel="shortcut icon" href="__PUBLIC__/robot.ico"/>

		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/fonts/Home/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/fonts/Home/themify-icons/themify-icons.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/vendors/bootstrap4/bootstrap-grid.min.css">


		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/vendors/magnific-popup/magnific-popup.min.css">

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/vendors/owl.carousel/owl.carousel.css">

		<!-- <link href="__PUBLIC__/css/Home/css/hover-min.css" rel="stylesheet"> -->

		<!-- App & fonts-->

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/main.css">

		<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/component.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/footer.css">

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/self.css">

		<style type="text/css">

			.widget-text__style-04 .widget-text__content > *:first-child {
			     padding-top: 5px; 
			}

		</style>



	</head>
	
	<body>
		<div class="page-wrap">

			<!-- header -->
			<header class="header header__style-02">
				<!-- 引进目录 -->
 					<include file = "home_menu" /> 
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="md-content">
				
				<!-- slider -->
				<div class="slider">
					
					<!-- carousel__element owl-carousel -->
					<div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 5000}'>

					<div class="slider__item" style="background-image: url('__PUBLIC__/images/IndexSlides/index.jpg');">
		            	<div class="md-tb">
							<div class="md-tb__cell">
								<div class="slider__content">
									<div class="container">
										<p>东莞理工学院机器人学院</p>
									</div>
								</div>
							</div>
						</div>
					</div>

<!-- 幻灯片 -->
<?php  
    use Think\Model;
    $index_table = M('Index');
    $slides_infor = $index_table->order('id desc')->select();
 
    foreach ($slides_infor as $key => $value) {
               

     echo '<div class="slider__item" style="background-image: url('.$value['slides_file'].');">
            	<div class="md-tb">
					<div class="md-tb__cell">
						<div class="slider__content">
							<div class="container">
								<p>'.$value['slides_title'].'</p>
							</div>
						</div>
					</div>
				</div>
			</div>';

    }
?>


					</div><!-- End / carousel__element owl-carousel -->
				</div>
				<!-- End / slider -->
				
				<!-- Service-->
				
				<!-- 框架展示 -->
				<!-- Section -->
				<section class="md-section" style="background-color:#f7f7f7;">
					<div class="container">
						<div class="textbox-group">
							<div class="row">
								<div class="col-md-4 col-lg-4 ">
									
									<!-- textbox -->
									<div class="textbox">
										<div class="textbox__image"><a href="javascript:void(0)"><img src="__PUBLIC__/images/InstituteIntroduction.jpg" alt=""/></a></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><a href="institute_overview?title=学院介绍&content=InstituteOverviewInstituteIntroduction">学院介绍</a></h2>
											
										</div>
									</div><!-- End / textbox -->
									
								</div>
								<div class="col-md-4 col-lg-4 ">
									
									<!-- textbox -->
									<div class="textbox">
										<div class="textbox__image"><a href="javascript:void(0)"><img src="__PUBLIC__/images/InstituteGroup.jpg" alt=""/></a></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><a href="institute_overview?title=学院机构&content=InstituteOverviewInstituteGroup">学院机构</a></h2>
											<!-- <div class="textbox__description">Nam elit ligula, egestas et ornare non, viverra eu justo. Aliquam ornare lectus ut pharetra dictum. </div> -->
										</div>
									</div><!-- End / textbox -->
									
								</div>
								<div class="col-md-4 col-lg-4 ">
									
									<!-- textbox -->
									<div class="textbox">
										<div class="textbox__image"><a href="javascript:void()"><img src="__PUBLIC__/images/InstituteAlbum.jpg" alt=""/></a></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><a href="institute_album">学院相册</a></h2>
											<!-- <div class="textbox__description">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu</div> -->
										</div>
									</div><!-- End / textbox -->
									
								</div>

							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->

				<!-- 列表展示 -->
				<!-- Section -->
				<section class="md-section" style="background-color:#f7f7f7;padding:0;">
					<div class="container">

						<div class="row">
								<div class="col-md-7 col-lg-7 textbox_list" >

									<div class="title_flex">
										<h2  class="post-03__title">学院动态</h2>
										<a class="btn btn-primary btn-w100 " href="institute_news"  >更多 >></a>
									</div>

									<!-- widget-text__widget -->
									<section class="widget-text__widget widget-text__style-04 widget">
										
										<div class="widget-text__content institute_news_div">

<!-- 学院动态 -->
<?php

	$institute_news_list_session =  session('institute_news_list_session');

	$institute_news_list = json_decode($institute_news_list_session , true);

	 // var_dump($institute_news_list);
	 
	 foreach ($institute_news_list as $key => $value) {

	 	if ($key >= 5) {  //输出前四个
	 		break;
	 	}

 		echo '
 			<div class="post-01__style-03">
				<a href="'.$value['editable_table'].'?title='.$value['catalog'].'&content='.$value['catalog_table'].'&id='.$value['id'].'">
					<div>
						<h2 class="post-01__title">'.$value['title'].'</h2>
						<div class="aaa">
							<div class="post-01__time">更新时间：'.date('Y-m-d',$value['date']).'</div>
							<div class="post-01__note"> From <a href = '.$value['editable_table'].'?title='.$value['catalog'].'&content='.$value['catalog_table'].' style ="color:#f39c12">'.$value['editable_title'] .' / '.$value['catalog'].'</a>
							</div>
						</div>
					</div>
				</a>
			</div>';
	 }


?>
											
											
										</div>
									</section><!-- End / widget-text__widget -->

								</div>

								<div class="col-md-4 col-lg-4 textbox_list ">
									<div class="title_flex">
										<h2  class="post-03__title">资源下载</h2>
										<a class="btn btn-primary btn-w100" href="learning_resources?title=资源下载&content=LearningResourcesDownload" >更多 >></a>
									</div>

									<!-- widget-text__widget -->
										<section class="widget-text__widget widget-text__style-04 widget">
											
											<div class="download_file_div">
<!-- 资源下载 -->
<?php
	session('catalog_table','LearningResourcesDownload');
	$download_table = M('LearningResourcesDownload');
	$download_data = $download_table->order('id desc')->limit(6)->select();

	foreach ($download_data as $key => $value) {
		echo '<span id="read_file">

		<button id="file_view_btn" class="md-trigger" data-modal="modal-7" data ='.$value['id'].'>
			<div class="post-01__style-03 ">
				<div>

					<h1 class="post-01__title"><img src ="__PUBLIC__/images/FileIcon/'.$value['file_type'].'.png"> '.$value['file_title'].'</h1>
					
					<div class="post-01__note">上传时间：'.date('Y-m-d',$value['date']).'</div>
				</div>
			</div>
		</button>
		</span>';
	}
?>

												
											</div>
										</section><!-- End / widget-text__widget -->

								</div>
						</div>


					
					</div>
				</section>
				<!-- End / Section -->
			
				<!-- 荣誉榜 -->
				<!-- Section -->
				<section class="md-section consult-background" style = " background-image: url(__PUBLIC__/images/background/album_background.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
								
								<!-- title-01 -->
								<div class="title-01">
									<h2 class="title-01__title">荣誉榜</h2>
								</div><!-- End / title-01 -->
								
							</div>
						</div>
						
						<!-- carousel__element owl-carousel -->
						<div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>

<!--荣誉榜  -->
<?php

	$honor_table = M('InstituteHonorAlbum');
    $honor_data = $honor_table->order('id desc')->select();
 
    foreach ($honor_data as $key => $value) {
               

     echo '<div>
				<div class="post-01__media"><a href="javascript:void(0)"><img src="'.$value['album_file'].'" alt="荣誉榜"/></a>
				</div>
				<div>
					<h2 class="post-01__title"><a href="javascri
					pt:void(0)">'.$value['album_description'].'</a></h2>
					<div class="post-01__time">'.date('Y/m/d',$value['date']).'</div>
					<div class="post-01__note">by 机器人学院</div>
				</div>
			</div>';

    }

?>
							
							
							
						</div><!-- End / carousel__element owl-carousel -->
						
					</div>
				</section>
				<!-- End / Section -->
			</div>
			<!-- End / Content-->
			
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

		<script src ="__PUBLIC__/js/Home/js/download_file.js"></script>
		<script src = "__PUBLIC__/js/Home/js/send_mail.js"></script>

	</body>
</html>
