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
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/summernote_view.css">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Home/css/self.css">

		<style type="text/css">

			@media (min-width: 1000px) {

				#nav-list-id{
					height: 340px;
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
	<section class="consult-background" id="editable_section">
		<div class="container">

					<!-- 子导航目录 -->
<div class="row" style="min-height: 400px;">
<div class="col-md-3 col-lg-3 textbox_list" id= "nav-list-id">

	<div class="title_flex">
		<h2 class="post-03__title">教学工作</h2>
		<a class="btn btn-primary btn_nav" href="#" >
  		<i class="fa  fa-list-ul fa-2x" aria-hidden="true"></i></a>
	</div>

	<!-- widget-text__widget -->
	<section class="widget-text__widget widget-text__style-04 widget section_nav">
		
		<div class="nav_item">
	
			 <?php
                $teaching_work_string  = session('teaching_work_session');
                $teaching_work_json = json_decode($teaching_work_string,TRUE);

                foreach ($teaching_work_json as $key => $value) {
                	echo '
                    	 <a href="teaching_work?title='.$value['catalog'].'&content='.$value['catalog_table'].'">
                    	 	<div class="post-01__style-03 ">
                   			 <div><h2 class="post-01__title">'.$value['catalog'].'</h2></div>
						
						</div></a>';
                }
             ?>

		</div>
	</section><!-- End / widget-text__widget -->

</div>


<!-- 文章目录 -->

<?php
	use Think\Model;

	if($_GET['id']){ //如果get到id，就是id的内容

		echo '<div class="col-md-8 col-lg-8">
				<div class="consult-projectDetail__main">';

		$catalog_table = new Model(session('catalog_table'));
		$catalog_table_whole = $catalog_table->where('id='.$_GET[id].'')->select();


		foreach ($catalog_table_whole as $key => $value) {

		  echo '<div class="row">
					<div class="col-lg-12">
						<div class="consult-projectDetail__content">
							<div class="row">
								<div class="col-xl-12 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
									<h1 id="title">'.$value['title'].'</h1>
									<p>更新时间：'.date('Y-m-d',$value['date']).'</p>
									<p class="text">编辑于：'.$value['user_type'].'</p>
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
	}

	else{ //如果没有get到id，就是列表

		echo '<div class="col-md-8 col-lg-8 textbox_list" >';

		echo '<div class="title_flex">
				<h2  class="post-03__title">'.session('catalog').'</h2>
			</div>';

		echo ' <section class="widget-text__widget widget-text__style-04 widget">
					<div class="widget-text__content">';

		$table = new Model(session('catalog_table'));

		$data = $table->order('id desc')->select();

		if($data == null)
		{
			echo "<div style='color:gray;'>暂时无数据</div>";
		}

		foreach ($data as $key => $value) {

			echo '<div class="post-01__style-03">
				<a href="'.$value['editable_table'].'?title='.$value['catalog'].'&content='.$value['catalog_table'].'&id='.$value['id'].'">
					<div>
						<h2 class="post-01__title" id="title">'.$value['title'].'</h2>
						<div class="aaa">
							<div class="post-01__time">更新时间：'.date('Y-m-d',$value['date']).'</div>
							<div class="post-01__note" style="color:#f39c12"> by '.$value['user_type'].'</div>
						</div>
					</div>
				</a>
			</div>';
		}

	echo '		</div>
			</section>
		</div>';

	}

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

