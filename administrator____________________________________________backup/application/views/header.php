<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản Trị Hệ Thống</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>tempadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>tempadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>tempadmin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>tempadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS 
    <link href="<?php echo base_url();?>tempadmin/bower_components/morrisjs/morris.css" rel="stylesheet">

   Custom Fonts -->
    <link href="<?php echo base_url();?>tempadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo  base_url();?>">Quản Trị Hệ Thống (ICD.GOV.VN)</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="<?php echo  base_url();?>"><i class="fa fa-dashboard fa-fw"></i>Tổng Quan</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa  fa-file-text-o"></i> Giới Thiệu Trang<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                  <a href="#"><i class="fa  fa-caret-right"></i> Bộ Văn Hoá<span class="fa arrow"></span></a>
                                  <ul class="nav nav-second-level">
                                    <li>
                                      <a href="<?php echo base_url();?>dashboard/The_structure_of_the_Ministry_of_Culture_Sports_and_Tourism"><i class="fa fa-minus-circle"></i> Tổng Quan</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo base_url();?>dashboard/Profile_Leadership_Department"><i class="fa fa-minus-circle"></i> Hồ Sơ Lãnh Đạo Bộ</a>
                                    </li>
                                  </ul>
                                  <!-- /.nav-second-level -->
                              </li>
                              <li>
                                  <a href="#"><i class="fa  fa-caret-right"></i> Cục hợp tác quốc tế<span class="fa arrow"></span></a>
                                  <ul class="nav nav-second-level">
                                    <li>
                                      <a href="<?php echo base_url();?>dashboard/Structure_The_Department_of_International_Cooperation"><i class="fa fa-minus-circle"></i> Tổng Quan</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo base_url();?>dashboard/quan_ly_phongban"><i class="fa fa-minus-circle"></i> Danh Sách phòng ban</a>
                                    </li>
                                    <li>
                                      <a href="#"><i class="fa  fa-plus-circle"></i> Cơ cấu tổ chức<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                          <li>
                                            <a href="<?php echo base_url();?>dashboard/Leaders_of_Department_of_International_Cooperation"><i class="fa fa-minus-circle"></i> Hồ sơ lãnh đạo cục</a>
                                          </li> 
                                          <li>
                                            <a href="<?php echo base_url();?>dashboard/Profile_HR_departments"><i class="fa fa-minus-circle"></i> Hồ sơ nhân sự phòng ban</a>
                                          </li>
                                          <li>
                                           
                                          </li>
                                        </ul>
                                  <!-- /.nav-second-level -->
                                    </li>
                                  </ul>
                                  <!-- /.nav-second-level -->
                              </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-file-text"></i>  Quản Trị Nội Dung<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                      <a href="#"><i class="fa  fa-caret-right"></i> Quản Trị Tin Nổi Bật<span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level">
                                        <li>
                                          <a href="<?php echo base_url();?>dashboard/CULTURE"><i class="fa fa-minus-circle"></i> Văn Hoá</a>
                                        </li> 
                                        <li>
                                          <a href="<?php echo base_url();?>dashboard/SPORT"><i class="fa fa-minus-circle"></i> Thể Thao</a>
                                        </li> <li>
                                          <a href="<?php echo base_url();?>dashboard/Travel"><i class="fa fa-minus-circle"></i> Du lịch</a>
                                        </li> <li>
                                          <a href="<?php echo base_url();?>dashboard/FAMILY"><i class="fa fa-minus-circle"></i> Gia Đình</a>
                                        </li> <li>
                                          <a href="<?php echo base_url();?>dashboard/INTERNATIONAL_RELATIONS"><i class="fa fa-minus-circle"></i> Quan Hệ Quốc Tế</a>
                                        </li>
                                      </ul>
                                      <!-- /.nav-second-level -->
                                  </li> 

                                   <li>
                                      <a href="#"><i class="fa  fa-caret-right"></i> Quản Trị Văn bản Tư Liệu<span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level">
                                        <li>
                                          <a href="<?php echo base_url();?>dashboard/Legal_documents"><i class="fa fa-minus-circle"></i> Văn bản pháp quy</a>
                                        </li> 
                                        <li>
                                          <a href="<?php echo base_url();?>dashboard/THE_DECREE"><i class="fa fa-minus-circle"></i> Các nghị định</a>
                                        </li> <li>
                                          <a href="<?php echo base_url();?>dashboard/The_decision"><i class="fa fa-minus-circle"></i> Các quyết định</a>
                                        </li> <li>
                                          <a href="<?php echo base_url();?>dashboard/Other_documents"><i class="fa fa-minus-circle"></i> Văn bản khác</a>
                                        </li>
                                      </ul>
                                      <!-- /.nav-second-level -->
                                  </li> 
                                  <li>
                                    <a href="<?php echo base_url();?>dashboard/OUR_EVENTS"><i class="fa fa-minus-circle"></i> Nội Dung SK Của Chúng Tôi</a>
                                  </li>
                                  <li>
                                    <a href="<?php echo base_url();?>dashboard/CULTURAL_CENTER_OF_VIETNAM_OVERSEAS"><i class="fa fa-minus-circle"></i> TTVHVN ở nước ngoài</a>
                                  </li>
                                  <li>
                                    <a href="<?php echo base_url();?>dashboard/WORLD_SAY_ABOUT_VIETNAM"><i class="fa fa-minus-circle"></i> Thế giới với việt nam</a>
                                  </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 

                  
                        <li>
                            <a href="<?php echo base_url();?>dashboard/manager_slideshow"><i class="fa  fa-desktop"></i> Slide Shows</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>dashboard/lichsukien"><i class="fa fa-calendar"></i> Lịch sự kiện</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-youtube-play"></i> Video<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              <li>
                                <a href="<?php echo base_url();?>dashboard/Our_video"><i class="fa fa-minus-circle"></i> Video Của Chúng Tôi</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>dashboard/Video_consult"><i class="fa fa-minus-circle"></i> Video Tham Khảo</a>
                              </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-file-photo-o"></i> Hình ảnh<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                              <li>
                                <a href="<?php echo base_url();?>dashboard/News_images"><i class="fa fa-minus-circle"></i> Tin ảnh</a>
                              </li>
                              <li>
                                <a href="<?php echo base_url();?>dashboard/upload_lib_images"><i class="fa fa-minus-circle"></i> Thư viện ảnh</a>
                              </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         
                        <li>
                            <a href="#"><i class="fa  fa-cogs"></i> Cấu hình chung<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>dashboard/config_contact"><i class="fa fa-minus-circle"></i> Cấu hình liên hệ</a>
                                </li> 
                                <li>
                                    <a href="<?php echo base_url();?>dashboard/lienketlink"><i class="fa fa-minus-circle"></i> Liên kết trang</a>
                                </li>  
                                <li>
                                    <a href="<?php echo base_url();?>dashboard/config_footer"><i class="fa fa-minus-circle"></i> Cấu hình Chân trang</a>
                                </li> 
                                
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                           <li>
                            <a href="#"><i class="fa fa-signal"></i> Thống Kê<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>dashboard/discussion_question"><i class="fa fa-minus-circle"></i> Trao đổi và hỏi đáp</a>
                                </li> 
                                <li>
                                    <a href="<?php echo base_url();?>dashboard/report_contact"><i class="fa fa-minus-circle"></i> Yêu Cầu liên hệ</a>
                                </li>  
                                
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <?php 
                             $PemUser = $this->session->userdata('id_pem');
                             if($PemUser == 1){
                          ?>
                         <li>
                            <a href="#"><i class="fa fa-user-md"></i> Quản Trị Tài Khoản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>dashboard/user_profile"><i class="fa fa-group"></i> Account User</a>
                                </li> 
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php }?>
                        <li>
                            <a href="<?php echo base_url();?>dashboard/logout"><i class="fa fa-sign-in"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>tempadmin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>tempadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>tempadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript
    <script src="<?php echo base_url();?>tempadmin/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>tempadmin/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>tempadmin/js/morris-data.js"></script>

	Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>tempadmin/dist/js/sb-admin-2.js"></script>

</body>

</html>
