<div class="container">
	<div class="header__logo"><a href="index.html"><img src="__PUBLIC__/robot_logo.png"/></a></div>

	<!-- consult-nav -->
		<nav class="consult-nav">

			<!-- consult-menu -->
			<ul class="consult-menu">
				<li><a href="index">首页</a></li>



				<li class="menu-item-has-children"><a href="javascript:void(0)">教学工作</a>
				   <ul class="sub-menu">
				         <?php
				            $teaching_work_string  = session('teaching_work_session');
				            $teaching_work_json = json_decode($teaching_work_string,TRUE);
				            foreach ($teaching_work_json as $key => $value) {
				                 echo ' <li><a  href="teaching_work?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>';
				            }
				        ?>
				    </ul>
				</li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">学院招生</a>
				    <ul class="sub-menu">
				         <?php
				            $enroll_student_string  = session('enroll_student_session');
				            $enroll_student_json = json_decode($enroll_student_string,TRUE);
				            foreach ($enroll_student_json as $key => $value) {
				                 echo ' <li><a href="enroll_student?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>';
				            }
				        ?>
				    </ul>
				</li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">学院风采</a>
				      <ul class="sub-menu">
				         <?php
				            $institute_show_string  = session('institute_show_session');
				            $institute_show_json = json_decode($institute_show_string,TRUE);
				            foreach ($institute_show_json as $key => $value) {
				                 echo ' <li><a href="institute_show?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>';
				            }
				        ?>
				    </ul>
				 </li>

				<li class="menu-item-has-children"><a href="javascript:void(0)">学习资源</a>
				      <ul class="sub-menu">
				         <?php
							$learning_resources_string  = session('learning_resources_session');
							$learning_resources_json = json_decode($learning_resources_string,TRUE);
							foreach ($learning_resources_json as $key => $value) {
							     echo ' <li><a href="learning_resources?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i> '.$value['catalog'].'</a></li>';
							}
						?>
				    </ul>
				</li> 
				<li><a href="institute_album">学院相册</a></li>

			<!-- 	<li><a href="http://localhost/thinkphp/index.php/Admin/Index/login" target="_blank"><span class="ti-user"></span></a></li> -->
				<li><a href="login_admin" target="_blank"><i class="ti-user"></i> 登录/注册</a></li>

			</ul><!-- consult-menu -->

		<div class="navbar-toggle"><span></span><span></span><span></span></div>
	</nav>
	<!-- End / consult-nav -->
</div>





