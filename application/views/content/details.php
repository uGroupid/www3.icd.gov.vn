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
	<div class="wp_list_container">
		<div class="row">
			
			<div class="span8">
				<div class="wp_list_container_left">
					<div class="span" id="heading_wp_list_container_left">
						<div class="heading_wp_list_container_left">
							
							<h3 class="details_title_heading_wp_list_container_left">
								<img style="margin-top: -8px;" src="<?php echo base_url();?>images/icon_list.png" /> 
								<?php $nametitles = to_slug($nametitle); ?>
								<a href="<?php echo base_url();?>/category/dic/<?php echo $nametitles;?>/<?php echo $iddanhmuc;?>.icd" /> <?php echo $nametitle; ?> </a></h3>
						</div>
					</div>
					<?php foreach($datacontent as $value_content_details){} ?>
					<div class="details_content_data">
						<div class="span7">
							<div class="details_content_li_list_wp_list_container_left">
									<div class="details_content_list_content_pages">
									  <h1 class="details_text_headering_home_list" >
										<span ><?php echo $value_content_details['title_conent_vi']; ?></span>
									  </h1>
									  <div class="details_title_v1_home">
										
											<i><h5 class="details_title_home_center_layout3"> 
												<?php echo $value_content_details['introduction']; ?>... </h5>
											</i>
										
									  </div>
									</div>
									<div class="details_images_list_content_pages" >
										<div class="details_content_v1_home" style="padding-bottom: 20px;">
										<a href="#" title="<?php echo $value_content_details['title_conent_vi']; ?>"> 
											<img class="details_img_content_v1_home" src="http://www3.icd.gov.vn/assets/uploads/content/<?php echo $value_content_details['img']; ?>"  alt="<?php echo $value_content_details['title_conent_vi']; ?>" /> 
										</a>
										</div>
									</div>
									<div class="details_content_pages">
										<?php echo $value_content_details['content_vi']; ?>
										
										<div class="source_website">
											<a href="<?php echo base_url(); ?>"> CTTĐT: (www.idc.gov.vn) </a>
										</div>
									</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		
			<div class="span4">
				<div class="wp_list_container_right">
					<h3 class="text_headering_home">TIN SỰ KIỆN</h3>
					<ul class="list_v1_home">
					<?php foreach($task_even_calendar as $value_task_even_calendar){ ?>
					<?php $url_task = to_slug($value_task_even_calendar['title_conent_vi']);?>
						<li class="li_data_task_hotnews">
							<a href="<?php echo base_url();?>details/dic/<?php echo $value_task_even_calendar['id_content']; ?>/tin-su-kien/<?php echo $url_task; ?>/<?php echo $value_task_even_calendar['sub_menu']; ?>.icd" title="<?php echo $value_task_even_calendar['title_conent_vi']; ?>">
								 <?php echo $value_task_even_calendar['title_conent_vi'];?>
							</a>
						</li>
					<?php } ?>
					</ul>
					
				</div>
				<div class="fix_div_task_bar">
				</div>
				<div class="wp_list_container_right">
					<h3 class="text_headering_home">TIN NỔI BẬT</h3>
					<ul class="list_v1_home">
					<?php foreach($data_task_hotnews as $value_hot_news){ ?>
					<?php $url_task = to_slug($value_hot_news['title_conent_vi']);?>
						<li class="li_data_task_hotnews">
							<a href="<?php echo base_url();?>details/dic/<?php echo $value_hot_news['id_content']; ?>/tin-noi-bat/<?php echo $url_task; ?>/<?php echo $value_hot_news['sub_menu']; ?>.icd" title="<?php echo $value_hot_news['title_conent_vi']; ?>">
								 <?php echo $value_hot_news['title_conent_vi'];?>
							</a>
						</li>
					<?php } ?>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</div>
