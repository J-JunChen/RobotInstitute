<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>东莞理工学院机器人学院</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="shortcut icon" href="/thinkphp/Public/robot.ico"/>


		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/fonts/Home/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/fonts/Home/themify-icons/themify-icons.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Home/vendors/bootstrap4/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Home/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Home/vendors/owl.carousel/owl.carousel.css">

		<link href="/thinkphp/Public/css/Home/css/hover-min.css" rel="stylesheet">



		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Home/css/main.css">

		<!-- <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Home/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Home/css/component.css" />

		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Home/css/footer.css">
		<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/summernote_view.css">

		<style type="text/css">
		
/*pc*/
			@media (max-width: 2000px){

				.consult-projectDetail__content{
					padding-right: 170px;
					/*padding-left: 60px;*/

				}

				#jinthis{
					margin:0 350px;
				}

			}

/*ipad*/
			@media (max-width: 1200px){

				.consult-projectDetail__content{
					padding-right: 50px;
					padding-left: 50px;
				}

				#jinthis{
					margin:0 350px;
				}
				
			}
/*phone: ;*/
			@media (max-width: 1000px){

				.consult-projectDetail__content{
					padding-right: 0px;
					padding-left: 0px;
				}
				#jinthis{
					margin:0 ;
				}	

			}


			#jinthis{
				/*margin-top:80px; */
				display: flex;
				display: -webkit-flex;
				justify-content:center;
				border-bottom: solid red;

			   border-width:2px;
			   border-radius: 10px;
				padding: 10px;
				
			}

			#title_nav{
				height: auto;
			}

			#editable_section{
				padding:50px 0; 
			}

			/*查看器的视频大小*/
@media (max-width: 640px){
    .note-video-clip{
      width: 100%;
    }
}

@media (max-width: 450px){
    .note-video-clip{
      width: 100%;
      height: 100%;
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
	<div class="header__logo"><a href="index.html"><img src="/thinkphp/Public/robot_logo.png"/></a></div>

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
				<li><a href="login" target="_blank"><span class="ti-user"></span></a></li>

			</ul><!-- consult-menu -->

		<div class="navbar-toggle"><span></span><span></span><span></span></div>
	</nav>
	<!-- End / consult-nav -->
</div>





 
			</header><!-- End / header -->
		
			
<!-- Content-->
<div class="md-content" style="background-color: #f7f7f7">
	<!-- Section -->
	<section class="consult-background" id="editable_section">
		<div class="container">

					<!-- 子导航目录 -->
<div class="row">

<!-- 文章目录 -->

<?php
 use Think\Model; echo '<div class="col-md-12 col-lg-12">
				<div class="consult-projectDetail__main">'; $catalog_table = new Model(session('catalog_table')); $catalog_table_whole = $catalog_table->select(); foreach ($catalog_table_whole as $key => $value) { echo '<div class="row">
					<div class="col-lg-12">
						<div class="consult-projectDetail__content">
							<div class="row">
								<div class="col-xl-12 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
									<h1>'.$value['title'].'</h1>
									<p class="text">编辑于：'.date('Y-m-d',$value['date']).'</p>
								</div>

								<div class="row">
									<div class="col-xl-12 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1" >
										<div>'.$value['content'].'</div>
									</div>
								</div>
	
							</div>

						</div>
<div id="jinthis">
<div class="jiathis_style_24x24">
	<span class="jiathis_txt" style ="color:blue;">可分享到：</span>
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_weixin"></a>
</div>
</div>





					</div>

				</div>'; } echo '		</div>
			</div>'; echo '

'; ?>

</div>

		</div>
	</section>
	<!-- End / Section -->
</div>
			<!-- End / Content-->

			<!-- 引进页脚 -->
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

			<!-- JiaThis Button BEGIN -->

			<div id="summernote"></div>

			
		</div>


		<!-- Vendors-->
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/jquery.countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/jquery.countTo/jquery.countTo.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/jquery.countUp/jquery.countup.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/owl.carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/menu/menu.min.js"></script>
		<script type="text/javascript" src="/thinkphp/Public/js/Home/vendors/smoothscroll/SmoothScroll.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="/thinkphp/Public/js/Home/js/main.js"></script>

		<script src="/thinkphp/Public/js/Home/js/classie.js"></script>
		<script src="/thinkphp/Public/js/Home/js/modalEffects.js"></script>

		<script src="/thinkphp/Public/js/Home/js/footer.js"></script>

		<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=2159296" charset="utf-8"></script>


		<script src="/thinkphp/Public/js/Home/js/btn_nav.js"></script>

		<script "text/javascript"> 
			var jiathis_config = { 
				
				url: "http://www.yourdomain.com", //网页地址
				title: "测试标题	", //网页标题

				summary:"测试摘要" , //分享页面摘要
				pic : "http://n.sinaimg.cn/photo/0/w2000h1200/20180326/R1Hn-fysqfnh0486820.jpg", //封面图片链接
			} 
		</script> 

	</body>
</html>