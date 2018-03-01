<?php
class Category extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('home_model', 'callbuyMD');	
			return redirect('http://www3.icd.gov.vn/quantri');
				
	}
	

	public function dic($title,$idmenu){
		if($idmenu == NULL){redirect("home","localtion");}else{
			$data_item_menu_header = $this->callbuyMD->get_headersub_contrc($idmenu);
			if($data_item_menu_header == NULL){
				$title = "Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
				$description = "Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
				$keywords = "Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
				$data = array(
					'title' => $title,
					'description' => $description,
					'keywords' => $keywords,
				);
				$this->parser->parse('header',$data);
				$this->parser->parse('warring',$data);
				$this->parser->parse('footer',$data);
			}else{
				foreach($data_item_menu_header as $value_header_data_item){}
				$title = $value_header_data_item['name_vi'];
				$description = $value_header_data_item['description'];
				$keywords = $value_header_data_item['keywords'];
				$datacontent = $this->callbuyMD->tbl_getcontent($value_header_data_item['id_danhmuc']);
				$contresurt = $this->callbuyMD->tbl_countcontent($value_header_data_item['id_danhmuc']);
				$data_getcontent_category = $this->callbuyMD->tbl_getcontent_category($value_header_data_item['id_danhmuc']);
				
				if($data_getcontent_category == NULL){
					redirect("home","localtion");
				}else{
					$task_hot_news = $this->callbuyMD->list_task_content_hot_news();
					$task_even_calendar = $this->callbuyMD->list_task_content_hot_even_calendar();
					$data = array(
						'title' => $title,
						'description' => $description,
						'keywords' => $keywords,
						'iddanhmuc' => $idmenu, 
						'data_task_hotnews' => $task_hot_news,
						'datacontent' => $datacontent,
						'task_even_calendar' => $task_even_calendar,
						'data_getcontent_category' => $data_getcontent_category,
						
					);
					$this->parser->parse('header',$data);
					$this->parser->parse('slide',$data);
					$this->parser->parse('content/list',$data);
					$this->parser->parse('footer',$data);
				}
				
			}
		}
	}
	
	

	
/********************************************************************************/
/*****************END Class User*************************************************/
}
?>