<?php
 function to_slug($str) {
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

  <div class="container">

      <div class="row">
	  <div class="span4">
	  <center style="margin-top: 0px;">
          <a href="<?php echo base_url();?>">
			<img src="<?php echo base_url();?>/images/logo.png" width="245px"  alt="INTERNATIONAL COOPERATION DEPARTMENT Ministry of Culture, Sports and Tourism of Viet Nam " /> 
			
			</a>
	  </center>
		<h3 class="home_logo_title_vi">	<span>CỤC HỢP TÁC QUỐC TẾ</span> </h3>
		 <h5 class="home_logo_title_en">
			<span >INTERNATIONAL COOPERATION DEPARTMENT</span>
		  </h5>
		<center>
			 <div class="email_dowload_index_value">
                    <a style="width: 48%; float: left; background: rgb(183, 0, 0) none repeat scroll 0% 0%; height: 40px;"target="_blank" href="http://mail.icd.gov.vn"><img style="width: 60px; height: auto;" src="<?php echo base_url();?>images/mail-icon.png"><span style="font-size: 14px;font-weight: bold;color: #FFF;">Hộp thư</span></a>
                    <a style="width: 48%; float: left; background: rgb(183, 0, 0) none repeat scroll 0% 0%; height: 40px;margin-left: 10px;" href="<?php echo base_url();?>"><img style="width: 30px; height: auto; margin-top: 5px;" src="<?php echo base_url();?>images/icon-download.png"><span style="font-size: 14px;font-weight: bold;color: #FFF;margin-left: 10px;"> <span> Tải về </span></span></a>
            </div>
		</center>
        </div>
        <div class="span4">
			<div class="vsub_text_headering_homeindex">
			  <h3 class="text_headering_homeindex" >
				SỰ KIỆN CỦA CHÚNG TÔI
			  </h3>
			  <?php 
				foreach($get_data_home_sukienchungtoi as $value_get_data_home_sukienchungtoi){} 
			  ?>
			  <?php $url = to_slug($value_get_data_home_sukienchungtoi['title_conent_vi']);?>
			  <div class="title_v1_home">
				<a href="<?php echo base_url();?>details/dic/<?php echo $value_get_data_home_sukienchungtoi['id_content']; ?>/su-kien-cua-chung-toi/<?php echo $url; ?>/<?php echo $value_get_data_home_sukienchungtoi['sub_menu']; ?>.icd" title="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>"> 
					<h5 class="title_home_center_layout3"><?php echo mb_substr($value_get_data_home_sukienchungtoi['title_conent_vi'].$value_get_data_home_sukienchungtoi['title_conent_vi'].$value_get_data_home_sukienchungtoi['title_conent_vi'],0,45,'UTF-8');?>...</h5>
				</a>
			  </div>
			  <div class="content_v1_home">
				<a href="<?php echo base_url();?>details/dic/<?php echo $value_get_data_home_sukienchungtoi['id_content']; ?>/su-kien-cua-chung-toi/<?php echo $url; ?>/<?php echo $value_get_data_home_sukienchungtoi['sub_menu']; ?>.icd" title="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>"> 
					<img src="<?php echo base_url();?>assets/uploads/content/<?php echo $value_get_data_home_sukienchungtoi['img']; ?>"  style="width: 100%; height: 320px;" alt="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>" /> 
				</a>
					<div class="content_v1_home_introduction">
						<span>
							<?php echo mb_substr($value_get_data_home_sukienchungtoi['introduction'],0,190,'UTF-8');?>...
						</span>
					</div>
			  </div>
			</div>
		</div>
        <div class="span4">
          <h3 class="text_headering_subhome">TIN NỔI BẬT</h3>
			<ul class="list_v1_home_subhome">
				<?php foreach($data_task_hotnews as $value_hot_news){ ?>
				<?php $url_task = to_slug($value_hot_news['title_conent_vi']);?>
					<li class="li_data_task_hotnews_subhome">
						<a style='color: #2d2c2c; text-decoration: none; font-family: Georgia,"Times New Roman",Times,serif;' href="<?php echo base_url();?>details/dic/<?php echo $value_hot_news['id_content']; ?>/tin-noi-bat/<?php echo $url_task; ?>/<?php echo $value_hot_news['sub_menu']; ?>.icd" title="<?php echo $value_hot_news['title_conent_vi']; ?>">
							<span> <?php echo $value_hot_news['title_conent_vi'];?></span>
						</a>
					</li>
				<?php } ?>
			</ul>
		
		</div>
        
      </div>
		<br>
      
</div>

<div class="home_task_container_video_callbuy" style="background: #fff;    margin-bottom: 20px;">
	<div class="container">
		<div class="sub_container_home_task_container_video_callbuy">
			<div class="row">
				<div class="span4">
				  <h3 class="text_headering_home">LỊCH SỰ KIỆN</h3>
					<div class="calendar_home" style="height: 179px ! important; float: left; width: 100%;">
						<?php echo $calendar;?>
					</div>
				</div>
				
				<div class="span8">
					<h3 class="text_headering_home">TIN ẢNH</h3>
					<div class="tabsk_right_image_home">
						<img src="<?php echo base_url();?>images/halong05.jpg" style="width: 100%; height: 280px;"/>
					</div>
				</div>
			</div>
		</div>
	</div>
<br>
</div>

<div class="container">
	<div class="row">
	<div class="span4">
		<div class="vsub_text_headering_homeindex">
		  <?php 
			foreach($get_data_home_sukienchungtoi_qt as $value_get_data_home_sukienchungtoi){} 
		  ?>
		  <?php $url = to_slug($value_get_data_home_sukienchungtoi['title_conent_vi']);?>
			<a href="<?php echo base_url();?>details/dic/<?php echo $value_get_data_home_sukienchungtoi['id_content']; ?>/su-kien-cua-chung-toi/<?php echo $url; ?>/<?php echo $value_get_data_home_sukienchungtoi['sub_menu']; ?>.icd" title="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>"> 
				<img src="<?php echo base_url();?>assets/uploads/content/<?php echo $value_get_data_home_sukienchungtoi['img']; ?>"  style="width: 100%; height: 320px;" alt="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>" /> 
			</a>
			<div class="content_v1_home_introductions">
				<span>
					<?php echo mb_substr($value_get_data_home_sukienchungtoi['introduction'],0,190,'UTF-8');?>...
				</span>
			</div>
		</div>
		
	</div>
	<div class="span4">
		<div class="vsub_text_headering_homeindex">
		 <iframe width="100%" height="320" src="https://www.youtube.com/embed/ALBIbWnrZwc" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>
	<div class="span4">
			<div class="vsub_text_headering_homeindex">
		  <?php 
			foreach($get_data_home_sukienchungtoi as $value_get_data_home_sukienchungtoi){} 
		  ?>
		  <?php $url = to_slug($value_get_data_home_sukienchungtoi['title_conent_vi']);?>
			<a href="<?php echo base_url();?>gallery" title="Thư Viện Ảnh"> 
				<img src="<?php echo base_url();?>images/DulichVN4-ID1815.JPG"  style="width: 100%; height: 320px;" alt="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>" /> 
			</a>
			<div class="content_v1_home_introductions" style="width: 100%; float: left; margin-top: -41px; height: 42px;">
				<span>
					<a href="<?php echo base_url();?>gallery" style="color: rgb(255, 255, 255);"> THƯ VIỆN ẢNH </a>
				</span>
			</div>
		</div>

	</div>
	</div>
</div>
<br>

<div class="container">
	<div class="row">
	<div class="span4">
			<div class="vsub_text_headering_homeindex">
		  <?php 
			foreach($get_data_home_sukienchungtoi_vn as $value_get_data_home_sukienchungtoi_vn){} 
		  ?>
		  <?php $url = to_slug($value_get_data_home_sukienchungtoi_vn['title_conent_vi']);?>
			<a href="<?php echo base_url();?>details/dic/<?php echo $value_get_data_home_sukienchungtoi_vn['id_content']; ?>/su-kien-cua-chung-toi/<?php echo $url; ?>/<?php echo $value_get_data_home_sukienchungtoi_vn['sub_menu']; ?>.icd" title="<?php echo $value_get_data_home_sukienchungtoi_vn['title_conent_vi']; ?>"> 
				<img src="<?php echo base_url();?>assets/uploads/content/<?php echo $value_get_data_home_sukienchungtoi_vn['img']; ?>"  style="width: 100%; height: 320px;" alt="<?php echo $value_get_data_home_sukienchungtoi_vn['title_conent_vi']; ?>" /> 
			</a>
			<div class="content_v1_home_introductions">
				<span>
					<?php echo mb_substr($value_get_data_home_sukienchungtoi_vn['introduction'],0,190,'UTF-8');?>...
				</span>
			</div>
		</div>

	</div>
	
	<div class="span4">
		<div class="vsub_text_headering_homeindex">
			 <iframe width="100%" height="320" src="https://www.youtube.com/embed/tXPeeh2Uwd0" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>
	<div class="span4">
			<div class="vsub_text_headering_homeindex">
		  <?php 
			foreach($get_data_home_sukienchungtoi as $value_get_data_home_sukienchungtoi){} 
		  ?>
		  <?php $url = to_slug($value_get_data_home_sukienchungtoi['title_conent_vi']);?>
			<a href="<?php echo base_url();?>details/dic/<?php echo $value_get_data_home_sukienchungtoi['id_content']; ?>/su-kien-cua-chung-toi/<?php echo $url; ?>/<?php echo $value_get_data_home_sukienchungtoi['sub_menu']; ?>.icd" title="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>"> 
				<img src="<?php echo base_url();?>images/vietnamdatnuocconnguuoi.jpg"  style="width: 100%; height: 320px;" alt="<?php echo $value_get_data_home_sukienchungtoi['title_conent_vi']; ?>" /> 
			</a>
			<div class="content_v1_home_introductions" style="width: 100%; float: left; margin-top: -41px; height: 42px;">
				<span>
					<a href="#" style="color: rgb(255, 255, 255);font-size: 12px !important;"> NGƯỜI VIỆT BỐN PHƯƠNG & THẾ GIỚI NÓI VỀ VIỆT NAM </a>
				</span>
			</div>
		</div>

	</div>
	</div>
</div>
<br>
<div class="home_icon_iconsetion_home">
	<div class="container">
		<div class="extend_home_icon_iconsetion_home">
			  <div class="row">
				<?php foreach($get_data_setion_images_home as $value_iconsetion_home){?>
				  <?php $vname_title = to_slug($value_iconsetion_home['name_title']);?>
				<div class="span3">
				
				  <div class="content_v1_home">
					<a href="<?php echo base_url();?>category/dic/<?php echo $vname_title;?>/<?php echo $value_iconsetion_home['id_danhmuc'];?>.icd" title=" <?php echo $value_iconsetion_home['name_title'];?> "> 
						<img class="iconsetion_home" src="<?php echo base_url();?>assets/uploads/sections/<?php echo $value_iconsetion_home['img'];?>" width="100%" height="350px" alt="<?php echo $value_iconsetion_home['name_title'];?>" /> 
					</a>
				  </div>
					<a href="<?php echo base_url();?>category/dic/<?php echo $vname_title; ?>/<?php echo $value_iconsetion_home['id_danhmuc'];?>.icd" title=" <?php echo $value_iconsetion_home['name_title'];?> "> 
						<h3 class="title_home_span_layout4"><?php echo $value_iconsetion_home['name_title'];?></h3>
					</a>
				</div>  
				<?php } ?>
				
				
			  </div>
		 </div>
	  </div>
	</div>

