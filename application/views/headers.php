<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		 <link rel="shortcut icon" href="<?php echo base_url() ?>images/favicon.ico">
		<title><?php echo $title; ?> </title>
		<meta name="generator" content="<?php echo $keywords; ?>"/>
		<meta name="description" content="<?php echo $description; ?>" />
		<meta name="keywords" content="<?php echo $keywords; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
		<meta name="googlebot" content="<?php echo $keywords; ?>" />
		<meta name="robots" content="index, follow" />
		<meta name="robots" content="nofollow" />
		<link rel="alternate" title="<?php echo $title; ?>" hreflang="VN" href="<?php echo base_url().uri_string();?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php echo $keywords; ?>" href="<?php echo base_url() ?>"/>
		<link rel="alternate" type="application/rss+xml" title="<?php echo $keywords; ?>" href="<?php echo base_url() ?>"/>
		<link rel="alternate" type="application/rss+xml" title="<?php echo $keywords; ?>" href="<?php echo base_url() ?>"/>
		<link rel="stylesheet" href="<?php echo base_url() ?>pop/jquery.mobile-1.4.5.min.css" type="text/css" media='screen'/>
		<link rel="stylesheet" href="<?php echo base_url() ?>pop/jqm-demos.css" type="text/css" media='screen'/>
		<script type='text/javascript' src="<?php echo base_url() ?>pop/jquery.mobile-1.4.5.min.js"></script>
		
		<!-- script Bootstap-->
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-alert.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-button.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-carousel.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-collapse.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-dropdown.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-modal.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-popover.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-scrollspy.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-tab.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-tooltip.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-transition.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-typeahead.js"></script>
		<script type='text/javascript' src="<?php echo base_url() ?>bootstrap/v2.2/jquery.js"></script>
		 <script src="<?php echo base_url() ?>bootstrap/v2.2/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>bootstrap/v2.2/bootstrap.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/v2.2/bootstrap.css" type="text/css" media='screen'/>
		<link rel="stylesheet" href="<?php echo base_url() ?>css/system.css" type="text/css" media='screen'/>
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/v2.2/bootstrap-responsive.css" type="text/css" media='screen'/>
		<link rel="EditURI" type="application/rsd+xml" title="<?php echo $title; ?>" href="<?php echo base_url().uri_string();?>"/>
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo base_url().uri_string();?>"/>
		<link rel='canonical' title="<?php echo $title; ?>" href="<?php echo base_url().uri_string();?>"/>
		<link rel='shortlink' title="<?php echo $title; ?>" href="<?php echo base_url().uri_string();?>"/>
		<style>
			a{text-decoration:none}
		</style>
	</head>
<body>
<?php
 function to_slugs($str) {
		  $str = trim(mb_strtolower($str));
			$str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
			$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
			$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
			$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
			$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
			$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
			$str = preg_replace('/(đ)/', 'd', $str);
			$str = preg_replace('/[^a-z0-9-\s]/', '', $str);
			$str = preg_replace('/([\s]+)/', '-', $str);
				return $str;
} ?>
<!--
<div class="header_idont_like_box">
		<div class="container">
			<div class="span5">
				<div class="header_idont_like_box_languge_vn">
					<a href="<?php echo base_url();?>"> <img class="icon_home_deaser_active_vn" src="<?php echo base_url(); ?>images/icon_vn.png"> </a>
					<a href="<?php echo base_url();?>"> <img class="icon_home_deaser_active_vn" src="<?php echo base_url(); ?>images/icon_en.png"></a>
				</div>
			</div>
			<div class="header_idont_like_box_search_box">
				
				  <input type="text" class="form-control" id="search_index" placeholder="Tìm Kiếm..">
				
			</div>
			
		</div>
</div>	
-->
<div class="navbar-wrapper-fixted">
	
   <div class="navbar-wrapper">
		
	<div class="container"> 
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <button style="float: left;" type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse ">
              <ul class="nav">
                <li class="active"><a href="<?php echo base_url();?>"><span> <img class="icon_home_deaser_active" src="<?php echo base_url(); ?>images/icon_home.png"></span>Trang chủ</a></li>
				<?php $tbl_get_header_danhmuc = $this->callbuyMD->tbl_get_header_danhmuc();
				
				foreach($tbl_get_header_danhmuc as $value_tbl_get_header_danhmuc){
					
				?>
				 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $value_tbl_get_header_danhmuc['name_vi'] ; ?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
					<?php $data_menu_sub_header = $this->callbuyMD->tbl_get_header_danhmuc_sub($value_tbl_get_header_danhmuc['id_danhmuc']);
						
						foreach($data_menu_sub_header as $value_data_menu_sub_header){
						
						$idmenu = $value_data_menu_sub_header['id_danhmuc'];
						$title_url_gioithieu = strtolower(trim($value_data_menu_sub_header['name_vi']));
						
						
					?>
					<?php $url = to_slugs($title_url_gioithieu);?>
                    <li><a href="<?php echo base_url();?>category/dic/<?php echo $url;?>/<?php echo $idmenu;?>.icd" title="<?php echo $value_data_menu_sub_header['name_vi']; ?>" alt="<?php echo $value_data_menu_sub_header['name_vi']; ?>"><?php echo $value_data_menu_sub_header['name_vi']; ?></a></li>
					<?php } ?>
                  </ul>
                </li> 
				<?php } ?>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Văn bản & Tư liệu<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Văn bản pháp quy</a></li>
                    <li><a href="#">Các nghị định</a></li>
                    <li><a href="#">Các quyết định</a></li>
                    <li><a href="#">Văn bản khác</a></li>
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hình ảnh <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Tin ảnh</a></li>
                    <li><a href="<?php echo base_url();?>gallery">Thư viện ảnh</a></li>
                    <li><a href="#">Người Việt bốn phương</a></li>
                  </ul>
                </li>
				
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
						<?php 
						$get_header_video = $this->callbuyMD->get_header_video();
						foreach($get_header_video  as $value_header_video){
						$url_video = to_slugs($value_header_video['name_vi']);
						?>
					 <li><a href="<?php echo base_url();?>video/dic/<?php echo $url_video;?>/<?php echo $value_header_video['id_danhmuc']; ?>.icd"><?php echo $value_header_video['name_vi']; ?></a></li>
					 <?php } ?>
                  </ul>
                </li>
				<li><a href="<?php echo base_url();?>category/dic/viet-nam-cultural-centers-abroad/27.icd">Trung tâm VHVN <span>tại nước ngoài</span></a></li>
				<li><a href="<?php echo base_url();?>">Thế giới nói về Việt Nam </a></li>
				<!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hộp thư và Tải về <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a target="_blank" href="http://mail.icd.gov.vn">Hộp thư </a></li>
                    <li><a href="#">Tải về </a></li>
                  </ul>
                </li> -->
                <li><a href="<?php echo base_url();?>discussion_question.icd">Trao đổi & Hỏi đáp</a></li>
                <li><a href="<?php echo base_url();?>contact.icd">Liên hệ</a></li>
              
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
		 </div> 
	</div>
    </div><!-- /.navbar-wrapper -->
  


	
