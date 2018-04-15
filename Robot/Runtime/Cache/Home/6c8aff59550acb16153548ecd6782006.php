<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>东莞理工学院机器人学院</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="shortcut icon" href="/RobotInstitute/Public/robot.ico"/>
		   <!-- 通过cdn添加css和js  -->
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
 					<div class="container">
	<div class="header__logo"><a href="index.html"><img src="/RobotInstitute/Public/robot_logo.png"/></a></div>

	<!-- consult-nav -->
		<nav class="consult-nav">

			<!-- consult-menu -->
			<ul class="consult-menu">
				<li><a href="index">首页</a></li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">学院概况</a>

					<ul class="sub-menu">
						<?php
 $institute_overview_string = session('institute_overview_session'); $institute_overview_json = json_decode($institute_overview_string,TRUE); foreach ($institute_overview_json as $key => $value) { echo ' <li><a href="institute_overview?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
					</ul>
				</li>


				<li class="menu-item-has-children"><a href="javascript:void(0)">教学工作</a>
				   <ul class="sub-menu">
				         <?php
 $teaching_work_string = session('teaching_work_session'); $teaching_work_json = json_decode($teaching_work_string,TRUE); foreach ($teaching_work_json as $key => $value) { echo ' <li><a  href="teaching_work?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				</li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">学院招生</a>
				    <ul class="sub-menu">
				         <?php
 $enroll_student_string = session('enroll_student_session'); $enroll_student_json = json_decode($enroll_student_string,TRUE); foreach ($enroll_student_json as $key => $value) { echo ' <li><a href="enroll_student?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				</li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">学院风采</a>
				      <ul class="sub-menu">
				         <?php
 $institute_show_string = session('institute_show_session'); $institute_show_json = json_decode($institute_show_string,TRUE); foreach ($institute_show_json as $key => $value) { echo ' <li><a href="institute_show?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				 </li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">学习资源</a>
				      <ul class="sub-menu">
				         <?php
 $learning_resources_string = session('learning_resources_session'); $learning_resources_json = json_decode($learning_resources_string,TRUE); foreach ($learning_resources_json as $key => $value) { echo ' <li><a href="learning_resources?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>'; } ?>
				    </ul>
				</li> 
				<li><a href="institute_album">学院相册</a></li>

			<!-- 	<li><a href="http://localhost/thinkphp/index.php/Admin/Index/login" target="_blank"><span class="ti-user"></span></a></li> -->
				<li><a href="login_admin" target="_blank"><span class="ti-user"></span></a></li>

			</ul><!-- consult-menu -->

		<div class="navbar-toggle"><span></span><span></span><span></span></div>
	</nav>
	<!-- End / consult-nav -->
</div>





 
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
 $learning_resources_string = session('learning_resources_session'); $learning_resources_json = json_decode($learning_resources_string,TRUE); foreach ($learning_resources_json as $key => $value) { echo ' <a href="learning_resources?title='.$value['catalog'].'&content='.$value['catalog_table'].'"> 
                			<div class="post-01__style-03">
               
                   				 <div><h1 class="post-01__title">'.$value['catalog'].'</h1></div>
							
							</div>
						</a>'; } ?>

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
 $download_table = M(session('catalog_table')); $download_data = $download_table->order('id desc')->select(); foreach ($download_data as $key => $value) { echo '<span id="read_file">

		<button id="file_view_btn" class="md-trigger" data-modal="modal-7" data ='.$value['id'].'>
			<div class="post-01__style-03 ">
				<div>
					<h1 class="post-01__title"><img src ="/RobotInstitute/Public/images/FileIcon/'.$value['file_type'].'.png"> '.$value['file_title'].'</h1>
					
					<div class="post-01__note">上传时间：'.date('Y-m-d',$value['date']).' <span style = "color:#f39c12"> by '.$value['user_type'].' </span></div>
					
				</div>
			</div>
		</button>
		</span>'; } ?>

							</div>
						</section><!-- End / widget-text__widget -->

				</div>


		</div>
	</section>
	<!-- End / Section -->
</div>


			<!-- End / Content-->
			<!-- 页脚 -->
<footer class="footer">

	<div class="footer__main">
		<div class="row row-eq-height vertical-center ">

			<div class="col-sm-2 "><span style=" font-size: 30px; ">友情链接：</span></div>

			<div class="col-sm-2">
				<a href="http://jwc.dgut.edu.cn/" target="_blank" >东莞理工学院教务处</a></div>

			<div class="col-sm-2 "><a href="http://ee.dgut.edu.cn/" target="_blank">电子工程与智能化学院 </a></div>

			<div class="col-sm-2 "><a href="http://sw.dgut.edu.cn/" target="_blank" >计算机与网络安全学院 </a></div>

			<div class="col-sm-2 "><a href="http://jxx.dgut.edu.cn/" target="_blank" >机械工程学院 </a></div>

			<div class="col-sm-2 "><a href="http://www.xbotpark.com/" target="_blank" >松山湖国际机器人产业基地 </a></div>
			
		</div>
	</div>


	<div class="footer__copyright"><p>技术支持邮箱：<a style="color:#f39c12" href="mailto:junstitch.com@gmail.com" target="_blank">junstitch.com@gmail.com</a></p><p>2018 &copy; 东莞理工学院机器人学院 </p> </div>
</footer>
<!-- End / footer -->


<!-- 侧边浮动栏 -->
<div id = "side_float">
	<button id="back-to-top"><a href="javascript:void(0)"><i class="fa fa-2x fa-chevron-up" aria-hidden="true"></i></a></button>
	
	<button class="md-trigger" data-modal="modal-4"><a href="javascript:void(0)"><i class="fa fa-2x fa-envelope-o" aria-hidden="true" ></i></a></button>	
</div>

<!-- 意见反馈model -->
<div class="md-modal md-effect-4" id="modal-4">
	<div class="md-content">
		<h3>意见反馈</h3>
		<div>

			<ul>
				<li>您的名字：<span id="name_span">*</span></li>
				<input type="text" name="" id="feedback_name" onkeyup ="this.value=this.value.replace(/\s+/g,'')">
				<li>您的邮箱：<span id="email_span">*</span></li>
				<input type="text" name="" id="feedback_email" onkeyup ="this.value=this.value.replace(/\s+/g,'')" onchange="validateEmail(this.value)">
				<li>反馈信息：<span>*</span></li>
				<textarea id="feedback_infor"></textarea> 

				<span id="button_span"></span>
			</ul>

			
			<div class="md-button">
				<button id="md-submit" >发送</button>
				<button class="md-close">取消</button>
			</div>

		</div>
	</div>
</div>

<div class="md-modal md-effect-7" id="modal-7">
	<div class="md-content">
		<h3>查看资源</h3>
		<div>
			<form>
		     <div class="form-group">
		        <label class="control-label">文件名:</label>
		        <input id='read_file_name' type="text" class="form-control"  readonly="true" >
		      </div>

		      <div class="form-group">
		        <label  class="control-label">文件标题:</label>
		        <input id='read_file_title' type="text" class="form-control"  readonly="true">
		      </div>

		      <div class="form-group">
		        <label class="control-label">文件描述:</label>
		        <textarea  id='read_file_description' class="form-control" readonly="true" style="resize: none; overflow:visible"></textarea>
		      </div>
		    </form>

			<div class="md-button">
				<button id="download_file_button">下载</button>
				<button class="md-close">取消</button>
			</div>

		</div>
	</div>
</div>

<div class="md-overlay"></div>
			


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

		<script src="/RobotInstitute/Public/js/Home/js/btn_nav.js"></script>
		
		<script src = "/RobotInstitute/Public/js/Home/js/send_mail.js"></script>

	</body>
</html>