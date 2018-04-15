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



		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/main.css">

		<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/component.css" />

		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/footer.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/summernote_view.css">

		<style type="text/css">
		
/*pc*/
			@media (max-width: 2000px){

				.consult-projectDetail__content{
					padding-right: 170px;
					/*padding-left: 60px;*/

				}

				#jiathis{
					margin:0 350px;
				}

			}

/*ipad*/
			@media (max-width: 1200px){

				.consult-projectDetail__content{
					padding-right: 50px;
					padding-left: 50px;
				}

				#jiathis{
					margin:0 350px;
				}
				
			}
/*phone: ;*/
			@media (max-width: 1000px){

				.consult-projectDetail__content{
					padding-right: 0px;
					padding-left: 0px;
				}
				#jiathis{
					margin:0 ;
				}	

			}


			#jiathis{
				/*margin-top:80px; */
				display: flex;
				display: -webkit-flex;
				justify-content:center;
				border-bottom: solid red;

			   border-width:2px;
			   border-radius: 10px;
				padding: 10px;
				
			}

			#editable_section{
				padding:50px 0; 
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
	<section class="consult-background" id="editable_section">
		<div class="container">

					<!-- 子导航目录 -->
<div class="row" style="min-height: 400px;">

<!-- 文章目录 -->

<?php
	use Think\Model;

		echo '<div class="col-md-12 col-lg-12">
				<div class="consult-projectDetail__main">';

		$catalog_table = new Model(session('catalog_table'));
		$catalog_table_whole = $catalog_table->select();


		foreach ($catalog_table_whole as $key => $value) {

		  echo '<div class="row">
					<div class="col-lg-12">
						<div class="consult-projectDetail__content">
							<div class="row">
								<div class="col-xl-12 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
									<h1 id="title">'.$value['title'].'</h1>
									<p class="text">编辑于：'.date('Y-m-d',$value['date']).'</p>
								</div>

								<div class="row">
									<div class="col-xl-12 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1" >
										<div>'.$value['content'].'</div>
									</div>
								</div>
	
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

				</div>';

		}

		echo '		</div>
			</div>';
		echo '

';
	


?>

</div>

		</div>
	</section>
	<!-- End / Section -->
</div>
			<!-- End / Content-->

			<!-- 引进页脚 -->
			<include file = "home_footer" />

			<!-- JiaThis Button BEGIN -->

			<div id="summernote"></div>

			
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

		<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=2159296" charset="utf-8"></script>


		<script src="__PUBLIC__/js/Home/js/btn_nav.js"></script>

		<!-- 自定义分享按钮 -->
		<script  src="__PUBLIC__/js/Home/js/jiathis.js"></script> 
		<script src = "__PUBLIC__/js/Home/js/send_mail.js"></script>

	</body>
</html>

