<!-- 导航栏-->
    <header class="app-header"><a class="app-header__logo" href="#">莞工机器人学院</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>

      <!-- Navbar Right Menu-->
      <ul class="app-nav">

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           
            <li><a class="dropdown-item" href="user_information"><i class="fa fa-user fa-lg"></i> 个人资料</a></li>
           <li><a class="dropdown-item" href="login_out"><i class="fa fa-sign-out fa-lg"></i> 退出登录</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <!-- 左侧滑动目录-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="__PUBLIC__/images/Background/user.png" alt="User Image">
        <div>
            <?php
               echo '<p class="app-sidebar__user-name">'.session('user_name').'</p>
                <p class="app-sidebar__user-designation">'.session('user_type').'</p>';
            ?>
              
        </div>
      </div>


      <ul class="app-menu">

      <li><a class="app-menu__item" href="index"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label app-menu_font"> 首页</span></a></li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-heart "></i><span class="app-menu__label app-menu_font">学院风采</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">

          <?php
             $json_string = session('editable_session');
             $editable_json = json_decode($json_string,TRUE);
              foreach ($editable_json as $key =>$value) {

                if ($value['editable_title'] == '学院风采') {

                     foreach ($value as $key => $value) {

                      if(is_array($value)){
                        foreach ($value as $key => $value) {
                          
                          echo ' <li><a class="treeview-item" href="editable_content?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>';
                        }
                        
                      }
                  }

                }
              }
          ?>  
          </ul>
        </li>


        

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label app-menu_font" >学习资源</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        <ul class="treeview-menu">

          <?php
              $learning_resources_string  = session('learning_resources_session');
              $learning_resources_json = json_decode($learning_resources_string,TRUE);
              foreach ($learning_resources_json as $key => $value) {
                   echo ' <li><a class="treeview-item" href="learning_resources?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>';
              }
          ?>
            
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-picture-o"></i><span class="app-menu__label app-menu_font" >学院相册</span><i class="treeview-indicator fa fa-angle-right"></i></a>

          <ul class="treeview-menu">

            <?php
                $institute_album_string  = session('institute_album_session');
                $institute_album_json = json_decode($institute_album_string,TRUE);
                foreach ($institute_album_json as $key => $value) {
                     echo ' <li><a class="treeview-item" href="institute_album?title='.$value['catalog'].'&content='.$value['catalog_table'].'"><i class="icon fa fa-circle-o"></i>'.$value['catalog'].'</a></li>';
                }
            ?>
            
          </ul>
        </li>

         <li><a class="app-menu__item" href="add_content"><i class="app-menu__icon fa  fa-pencil-square-o "></i><span class="app-menu__label app-menu_font"> 新建图文素材</span></a></li>


       <li><a class="app-menu__item" href="contact"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label app-menu_font"> 通讯录</span></a></li>

      </ul>
    </aside>


