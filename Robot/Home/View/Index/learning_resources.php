<!DOCTYPE html>
<html>
	<head>
		<title>东莞理工学院机器人学院</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="shortcut icon" href="__PUBLIC__/robot.ico"/>
		   <!-- 通过cdn添加css和js  -->
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

			@media (min-width: 1000px) {

				#nav-list-id{
					height: 280px;
				}

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
	<section class="md-section consult-background">
		<div class="container">

					<!-- 子导航目录 -->
<div class="row" style="min-height: 400px;">
<div class="col-md-3 col-lg-3 textbox_list" id= "nav-list-id">

	<div class="title_flex">
		<h2 class="post-03__title">学习资源</h2>
		<a class="btn btn-primary btn_nav" href="#" >
  		<i class="fa  fa-list-ul fa-2x" aria-hidden="true"></i></a>
		
	</div>

	<!-- widget-text__widget -->
	<section class="widget-text__widget widget-text__style-04 widget section_nav">
		
		<div class="nav_item">
	
			 <?php
                $learning_resources_string  = session('learning_resources_session');
                $learning_resources_json = json_decode($learning_resources_string,TRUE);

                foreach ($learning_resources_json as $key => $value) {
                	echo ' <a href="learning_resources?title='.$value['catalog'].'&content='.$value['catalog_table'].'"> 
                			<div class="post-01__style-03">
               
                   				 <div><h1 class="post-01__title">'.$value['catalog'].'</h1></div>
							
							</div>
						</a>';
                }
             ?>

		</div>
	</section><!-- End / widget-text__widget -->

</div>


<div class="col-md-8 col-lg-8 textbox_list ">
					<div class="title_flex">
						<?php echo ' <h2 class="post-03__title">'.session('catalog').'</h2>'; ?>
						
					</div>

					<!-- widget-text__widget -->
						<section class="widget-text__widget widget-text__style-04 widget">
							
							<div class="download_file_div">

<?php
	$download_table = M(session('catalog_table'));
	$download_data = $download_table->order('id desc')->select();

	foreach ($download_data as $key => $value) {
		echo '<span id="read_file">

		<button id="file_view_btn" class="md-trigger" data-modal="modal-7" data ='.$value['id'].'>
			<div class="post-01__style-03 ">
				<div>
					<h1 class="post-01__title"><img src ="__PUBLIC__/images/FileIcon/'.$value['file_type'].'.png"> '.$value['file_title'].'</h1>
					
					<div class="post-01__note">上传时间：'.date('Y-m-d',$value['date']).' <span style = "color:#f39c12"> by '.$value['user_type'].' </span></div>
					
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
	</section>
	<!-- End / Section -->
</div>


			<!-- End / Content-->
			<include file = "home_footer" />
			


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

		<script src="__PUBLIC__/js/Home/js/btn_nav.js"></script>
		
		<script src = "__PUBLIC__/js/Home/js/send_mail.js"></script>

	</body>
</html>
