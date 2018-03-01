<div class="wp_container_slideshow">
	 <div class="container">
		<div id="myCarousel" class="carousel slide">
		  <div class="carousel-inner">
			<?php 
				$datalideshows = $this->callbuyMD->tbl_get_home_slideshows(); 
				foreach($datalideshows as $value_data_slideshows){
			?>
			<div class="item active">
			  <img src="<?php echo base_url(); ?>assets/uploads/slideshow/<?php echo $value_data_slideshows['img'];?>" alt="<?php echo $value_data_slideshows['title_slideshow_vi'];?>">
			
				<div class="carousel-caption">
				<div class="description orange-overlay">
					<div class="views-field-title">
						<span class="field-content">
						<a class="title_slideshow_a" href="#">
							<span class="field-content" style="font-size: 27px;text-transform: capitalize;">
								<?php echo $value_data_slideshows['title_slideshow_vi'];?>
							</span></a>
						</span>
					</div>
					<div class="views-field-field-body">
						<div class="field-content">
							<a href="#">
							<div class="field-content">
								<p>
									<em><?php echo $value_data_slideshows['introduction'];?></em><br>
								</p>
							</div>
							</a>
						</div>
					</div>
					<div class="views-field-field-link">
						<div class="field-content">
							<div>
								<a href="#">Đọc tiếp</a>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<?php } ?>
			<?php 
			$datalideshow = $this->callbuyMD->tbl_get_home_slideshow(); 
			foreach($datalideshow as $value_data_slideshow){
			?>
			<div class="item">
			  <img src="<?php echo base_url(); ?>assets/uploads/slideshow/<?php echo $value_data_slideshow['img'];?>" alt="<?php echo $value_data_slideshow['title_slideshow_vi'];?>">
		   
				<div class="carousel-caption">
				 <div class="description orange-overlay">
					<div class="views-field-title">
						<span class="field-content">
						<a class="title_slideshow_a" href="#">
							<span class="field-content" style="font-size: 27px;text-transform: capitalize;">
								<?php echo $value_data_slideshow['title_slideshow_vi'];?>
							</span></a>
						</span>
						
					</div>
					<div class="views-field-field-body">
						<div class="field-content">
							<a href="#">
							<div class="field-content" >
								<p>
									<em><?php echo $value_data_slideshow['introduction'];?></em><br>
								</p>
							</div>
							</a>
						</div>
					</div>
					<div class="views-field-field-link">
						<div class="field-content">
							<div>
								<a href="#">Đọc tiếp</a>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			
			<?php } ?>
		  </div>
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div><!-- /.carousel -->
	</div>
</div>