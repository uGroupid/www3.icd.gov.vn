<?php
class Gallery extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('home_model', 'callbuyMD');	
				error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));	
				return redirect('http://www3.icd.gov.vn/quantri');
	}
	
	
	public function index(){
		
			$data_getcontent_gallery = $this->callbuyMD->data_getcontent_gallery();
			if($data_getcontent_gallery == NULL ){
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
				
				$title = "Thư Viện Ảnh  Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
				$description = "Thư Viện Ảnh  Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
				$keywords = "Thư Viện Ảnh  Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
				$task_hot_news = $this->callbuyMD->list_task_content_hot_news();
				$task_even_calendar = $this->callbuyMD->list_task_content_hot_even_calendar();
				$data = array(
					'title' => $title,
					'description' => $description,
					'keywords' => $keywords,
					'data_task_hotnews' => $task_hot_news,
					'task_even_calendar' => $task_even_calendar,
					'datacontent' => $data_getcontent_gallery,
					
				);
				$this->parser->parse('header',$data);
				$this->parser->parse('slide',$data);
				$this->parser->parse('content/gallery',$data);
				$this->parser->parse('footer',$data);
			}
	}
/********************************************************************************/
/*****************END Class User*************************************************/
}
?>