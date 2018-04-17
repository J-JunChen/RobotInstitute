<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>¶«İ¸Àí¹¤Ñ§Ôº»úÆ÷ÈËÑ§Ôº</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="keywords" content="¶«İ¸Àí¹¤Ñ§Ôº»úÆ÷ÈËÑ§Ôº, »úÆ÷ÈËÑ§Ôº, RobotInstitute"/>
		<meta name="description" content="¶«İ¸Àí¹¤Ñ§Ôº»úÆ÷ÈËÑ§Ôº, »úÆ÷ÈËÑ§Ôº, RobotInstitute"/>

		<link rel="shortcut icon" href="/RobotInstitute/Public/robot.ico"/>

		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/fonts/Home/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/fonts/Home/themify-icons/themify-icons.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/vendors/bootstrap4/bootstrap-grid.min.css">


		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/vendors/magnific-popup/magnific-popup.min.css">

		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/vendors/owl.carousel/owl.carousel.css">

		<!-- <link href="/RobotInstitute/Public/css/Home/css/hover-min.css" rel="stylesheet"> -->

		<!-- App & fonts-->

		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/css/main.css">

		<!-- <link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/css/component.css" />
		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/css/footer.css">

		<link rel="stylesheet" type="text/css" href="/RobotInstitute/Public/css/Home/css/self.css">

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
				<!-- Òı½øÄ¿Â¼ -->
 					<div class="container">
	<div class="header__logo"><a href="index.html"><img src="/RobotInstitute/Public/robot_logo.png"/></a></div>

	<!-- consult-nav -->
		<nav class="consult-nav">

			<!-- consult-menu -->
			<ul class="consult-menu">
				<li><a href="index">é¦–é¡µ</a></li>


				<li class="menu-item-has-children"><a href="javascript:void(0)">æ•™å­¦å·¥ä½œ</a>
				   <ul class="sub-menu">
				         <?php
 $teaching_work_string = session('teaching_work_session'); $teaching_work_json = json_decode($teaching_work_string,TRUE); foreach ($teaching_work_json as $key => $value) { echo ' <li><a  href="teaching_work?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				</li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">å­¦é™¢æ‹›ç”Ÿ</a>
				    <ul class="sub-menu">
				         <?php
 $enroll_student_string = session('enroll_student_session'); $enroll_student_json = json_decode($enroll_student_string,TRUE); foreach ($enroll_student_json as $key => $value) { echo ' <li><a href="enroll_student?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				</li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">å­¦é™¢é£é‡‡</a>
				      <ul class="sub-menu">
				         <?php
 $institute_show_string = session('institute_show_session'); $institute_show_json = json_decode($institute_show_string,TRUE); foreach ($institute_show_json as $key => $value) { echo ' <li><a href="institute_show?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				 </li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">å­¦ä¹ èµ„æº</a>
				      <ul class="sub-menu">
				         <?php
 $learning_resources_string = session('learning_resources_session'); $learning_resources_json = json_decode($learning_resources_string,TRUE); foreach ($learning_resources_json as $key => $value) { echo ' <li><a href="learning_resources?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				</li> 
				<li><a href="institute_album">å­¦é™¢ç›¸å†Œ</a></li>

			<!-- 	<li><a href="http://localhost/thinkphp/index.php/Admin/Index/login" target="_blank"><span class="ti-user"></span></a></li> -->
				<li><a href="login_admin" target="_blank"><i class="ti-user"></i> ç™»å½•/æ³¨å†Œ</a></li>

			</ul><!-- consult-menu -->

		<div class="navbar-toggle"><span></span><span></span><span></span></div>
	</nav>
	<!-- End / consult-nav -->
</div>





 
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="md-content">
				
				<!-- slider -->
				<div class="slider">
					
					<!-- carousel__element owl-carousel -->
					<div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 5000}'>

					<div class="slider__item" style="background-image: url('/RobotInstitute/Public/images/IndexSlides/index.jpg');">
		            	<div class="md-tb">
							<div class="md-tb__cell">
								<div class="slider__content">
									<div class="container">
										<p>¶«İ¸Àí¹¤Ñ§Ôº»úÆ÷ÈËÑ§Ôº</p>
									</div>
								</div>
							</div>
						</div>
					</div>

<!-- »ÃµÆÆ¬ -->
<?php  use Think\Model; $index_table = M('Index'); $slides_infor = $index_table->order('id desc')->select(); foreach ($slides_infor as $key => $value) { echo '<div class="slider__item" style="background-image: url('.$value['slides_file'].');">
            	<div class="md-tb">
					<div class="md-tb__cell">
						<div class="slider__content">
							<div class="container">
								<p>'.$value['slides_title'].'</p>
							</div>
						</div>
					</div>
				</div>
			</div>'; } ?>


					</div><!-- End / carousel__element owl-carousel -->
				</div>
				<!-- End / slider -->
				
				<!-- Service-->
				
				<!-- ¿ò¼ÜÕ¹Ê¾ -->
				<!-- Section -->
				<section class="md-section" style="background-color:#f7f7f7;">
					<div class="container">
						<div class="textbox-group">
							<div class="row">
								<div class="col-md-4 col-lg-4 ">
									
									<!-- textbox -->
									<div class="textbox">
										<div class="textbox__image"><a href="javascript:void(0)"><img src="/RobotInstitute/Public/images/InstituteIntroduction.jpg" alt=""/></a></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><a href="institute_overview?title=Ñ§Ôº½éÉÜ&content=InstituteOverviewInstituteIntroduction">Ñ§Ôº½éÉÜ</a></h2>
											
										</div>
									</div><!-- End / textbox -->
									
								</div>
								<div class="col-md-4 col-lg-4 ">
									
									<!-- textbox -->
									<div class="textbox">
										<div class="textbox__image"><a href="javascript:void(0)"><img src="/RobotInstitute/Public/images/InstituteGroup.jpg" alt=""/></a></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><a href="institute_overview?title=Ñ§Ôº»ú¹¹&content=InstituteOverviewInstituteGroup">Ñ§Ôº»ú¹¹</a></h2>
											<!-- <div class="textbox__description">Nam elit ligula, egestas et ornare non, viverra eu justo. Aliquam ornare lectus ut pharetra dictum. </div> -->
										</div>
									</div><!-- End / textbox -->
									
								</div>
								<div class="col-md-4 col-lg-4 ">
									
									<!-- textbox -->
									<div class="textbox">
										<div class="textbox__image"><a href="javascript:void()"><img src="/RobotInstitute/Public/images/InstituteAlbum.jpg" alt=""/></a></div>
										<div class="textbox__body">
											<h2 class="textbox__title"><a href="institute_album">Ñ§ÔºÏà²á</a></h2>
											<!-- <div class="textbox__description">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu</div> -->
										</div>
									</div><!-- End / textbox -->
									
								</div>

							</div>
						</div>
					</div>
				</section>
				<!-- End / Section -->

				<!-- ÁĞ±íÕ¹Ê¾ -->
				<!-- Section -->
				<section class="md-section" style="background-color:#f7f7f7;padding:0;">
					<div class="container">

						<div class="row">
								<div class="col-md-7 col-lg-7 textbox_list" >

									<div class="title_flex">
										<h2  class="post-03__title">Ñ§Ôº¶¯Ì¬</h2>
										<a class="btn btn-primary btn-w100 " href="institute_news"  >¸ü¶à >></a>
									</div>

									<!-- widget-text__widget -->
									<section class="widget-text__widget widget-text__style-04 widget">
										
										<div class="widget-text__content institute_news_div">

<!-- Ñ§Ôº¶¯Ì¬ -->
<?php
 $institute_news_list_session = session('institute_news_list_session'); $institute_news_list = json_decode($institute_news_list_session , true); foreach ($institute_news_list as $key => $value) { if ($key >= 5) { break; } echo '
 			<div class="post-01__style-03">
				<a href="'.$value['editable_table'].'?title='.$value['catalog'].'&content='.$value['catalog_table'].'&id='.$value['id'].'">
					<div>
						<h2 class="post-01__title">'.$value['title'].'</h2>
						<div class="aaa">
							<div class="post-01__time">¸üĞÂÊ±¼ä£º'.date('Y-m-d',$value['date']).'</div>
							<div class="post-01__note"> From <a href = '.$value['editable_table'].'?title='.$value['catalog'].'&content='.$value['catalog_table'].' style ="color:#f39c12">'.$value['editable_title'] .' / '.$value['catalog'].'</a>
							</div>
						</div>
					</div>
				</a>
			</div>'; } ?>
											
											
										</div>
									</section><!-- End / widget-text__widget -->

								</div>

								<div class="col-md-4 col-lg-4 textbox_list ">
									<div class="title_flex">
										<h2  class="post-03__title">×ÊÔ´ÏÂÔØ</h2>
										<a class="btn btn-primary btn-w100" href="learning_resources?title=×ÊÔ´ÏÂÔØ&content=LearningResourcesDownload" >¸ü¶à >></a>
									</div>

									<!-- widget-text__widget -->
										<section class="widget-text__widget widget-text__style-04 widget">
											
											<div class="download_file_div">
<!-- ×ÊÔ´ÏÂÔØ -->
<?php
 session('catalog_table','LearningResourcesDownload'); $download_table = M('LearningResourcesDownload'); $download_data = $download_table->order('id desc')->limit(6)->select(); foreach ($download_data as $key => $value) { echo '<span id="read_file">

		<button id="file_view_btn" class="md-trigger" data-modal="modal-7" data ='.$value['id'].'>
			<div class="post-01__style-03 ">
				<div>

					<h1 class="post-01__title"><img src ="/RobotInstitute/Public/images/FileIcon/'.$value['file_type'].'.png"> '.$value['file_title'].'</h1>
					
					<div class="post-01__note">ÉÏ´«Ê±¼ä£º'.date('Y-m-d',$value['date']).'</div>
				</div>
			</div>
		</button>
		</span>'; } ?>

												
											</div>
										</section><!-- End / widget-text__widget -->

								</div>
						</div>


					
					</div>
				</section>
				<!-- End / Section -->
			
				<!-- ÈÙÓş°ñ -->
				<!-- Section -->
				<section class="md-section consult-background" style = " background-image: url(/RobotInstitute/Public/images/background/album_background.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
								
								<!-- title-01 -->
								<div class="title-01">
									<h2 class="title-01__title">ÈÙÓş°ñ</h2>
								</div><!-- End / title-01 -->
								
							</div>
						</div>
						
						<!-- carousel__element owl-carousel -->
						<div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>

<!--ÈÙÓş°ñ  -->
<?php
 $honor_table = M('InstituteHonorAlbum'); $honor_data = $honor_table->order('id desc')->select(); foreach ($honor_data as $key => $value) { echo '<div>
				<div class="post-01__media"><a href="javascript:void(0)"><img src="'.$value['album_file'].'" alt="ÈÙÓş°ñ"/></a>
				</div>
				<div>
					<h2 class="post-01__title"><a href="javascri
					pt:void(0)">'.$value['album_description'].'</a></h2>
					<div class="post-01__time">'.date('Y/m/d',$value['date']).'</div>
					<div class="post-01__note">by »úÆ÷ÈËÑ§Ôº</div>
				</div>
			</div>'; } ?>
							
							
							
						</div><!-- End / carousel__element owl-carousel -->
						
					</div>
				</section>
				<!-- End / Section -->
			</div>
			<!-- End / Content-->
			
			<!-- Òı½øÒ³½Å -->
			<!-- é¡µè„š -->
<footer class="footer">

	<div class="footer__main">
		<div class="row row-eq-height vertical-center ">

			<div class="col-sm-2 "><span style=" font-size: 30px; ">å‹æƒ…é“¾æ¥ï¼š</span></div>

			<div class="col-sm-2">
				<a href="http://jwc.dgut.edu.cn/" target="_blank" >ä¸œèç†å·¥å­¦é™¢æ•™åŠ¡å¤„</a></div>

			<div class="col-sm-2 "><a href="http://ee.dgut.edu.cn/" target="_blank">ç”µå­å·¥ç¨‹ä¸æ™ºèƒ½åŒ–å­¦é™¢ </a></div>

			<div class="col-sm-2 "><a href="http://sw.dgut.edu.cn/" target="_blank" >è®¡ç®—æœºä¸ç½‘ç»œå®‰å…¨å­¦é™¢ </a></div>

			<div class="col-sm-2 "><a href="http://jxx.dgut.edu.cn/" target="_blank" >æœºæ¢°å·¥ç¨‹å­¦é™¢ </a></div>

			<div class="col-sm-2 "><a href="http://www.xbotpark.com/" target="_blank" >æ¾å±±æ¹–å›½é™…æœºå™¨äººäº§ä¸šåŸºåœ° </a></div>
			
		</div>
	</div>


	<div class="footer__copyright"><p>æŠ€æœ¯æ”¯æŒé‚®ç®±ï¼š<a style="color:#f39c12" href="mailto:junstitch.com@gmail.com" target="_blank">junstitch.com@gmail.com</a></p><p>2018 &copy; ä¸œèç†å·¥å­¦é™¢æœºå™¨äººå­¦é™¢ </p> </div>
</footer>
<!-- End / footer -->


<!-- ä¾§è¾¹æµ®åŠ¨æ  -->
<div id = "side_float">
	<button id="back-to-top"><a href="javascript:void(0)"><i class="fa fa-2x fa-chevron-up" aria-hidden="true"></i></a></button>
	
	<button class="md-trigger" data-modal="modal-4"><a href="javascript:void(0)"><i class="fa fa-2x fa-envelope-o" aria-hidden="true" ></i></a></button>	
</div>

<!-- æ„è§åé¦ˆmodel -->
<div class="md-modal md-effect-4" id="modal-4">
	<div class="md-content">
		<h3>æ„è§åé¦ˆ</h3>
		<div>

			<ul>
				<li>æ‚¨çš„åå­—ï¼š<span id="name_span">*</span></li>
				<input type="text" name="" id="feedback_name" onkeyup ="this.value=this.value.replace(/\s+/g,'')">
				<li>æ‚¨çš„é‚®ç®±ï¼š<span id="email_span">*</span></li>
				<input type="text" name="" id="feedback_email" onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="validateEmail(this.value)">
				<li>åé¦ˆä¿¡æ¯ï¼š<span>*</span></li>
				<textarea id="feedback_infor"></textarea> 

				<span id="button_span"></span>
			</ul>

			
			<div class="md-button">
				<button id="md-submit" >å‘é€</button>
				<button class="md-close">å–æ¶ˆ</button>
			</div>

		</div>
	</div>
</div>

<div class="md-modal md-effect-7" id="modal-7">
	<div class="md-content">
		<h3>æŸ¥çœ‹èµ„æº</h3>
		<div>
			<form>
		     <div class="form-group">
		        <label class="control-label">æ–‡ä»¶å:</label>
		        <input id='read_file_name' type="text" class="form-control"  readonly="true" >
		      </div>

		      <div class="form-group">
		        <label  class="control-label">æ–‡ä»¶æ ‡é¢˜:</label>
		        <input id='read_file_title' type="text" class="form-control"  readonly="true">
		      </div>

		      <div class="form-group">
		        <label class="control-label">æ–‡ä»¶æè¿°:</label>
		        <textarea  id='read_file_description' class="form-control" readonly="true" style="resize: none; overflow:visible"></textarea>
		      </div>
		    </form>

			<div class="md-button">
				<button id="download_file_button">ä¸‹è½½</button>
				<button class="md-close">å–æ¶ˆ</button>
			</div>

		</div>
	</div>
</div>

<div class="md-overlay"></div>

			
		</div>


		<!-- Vendors-->
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/jquery.countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/jquery.countTo/jquery.countTo.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/jquery.countUp/jquery.countup.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/owl.carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/menu/menu.min.js"></script>
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/vendors/smoothscroll/SmoothScroll.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="/RobotInstitute/Public/js/Home/js/main.js"></script>

		<script src="/RobotInstitute/Public/js/Home/js/classie.js"></script>
		<script src="/RobotInstitute/Public/js/Home/js/modalEffects.js"></script>

		<script src="/RobotInstitute/Public/js/Home/js/footer.js"></script>

		<script src ="/RobotInstitute/Public/js/Home/js/download_file.js"></script>
		<script src = "/RobotInstitute/Public/js/Home/js/send_mail.js"></script>

	</body>
</html>