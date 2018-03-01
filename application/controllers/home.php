<?php
class Home extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('home_model', 'callbuyMD');	
		$loggedIn = $this->session->userdata('logged_in');
		if($loggedIn == NULL){
			return redirect('http://www3.icd.gov.vn/login');
		}return true;
				
	}
	
	public function index(){
		// $title = "Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
		// $description = "Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
		// $keywords = "Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
		// $get_data_setion_images_home = $this->callbuyMD->get_data_setion_images_home();
		// $get_data_home_sukienchungtoi = $this->callbuyMD->get_data_home_sukienchungtoi();
		// $get_data_home_sukienchungtoi_vn = $this->callbuyMD->get_data_home_sukienchungtoi_vn();
		// $get_data_home_sukienchungtoi_qt = $this->callbuyMD->get_data_home_sukienchungtoi_qt();
		return redirect('http://www3.icd.gov.vn/quantri');
		// $task_hot_news = $this->callbuyMD->list_task_content_hot_news();
		// $calendar = $this->calendar();
		// $data = array(
		// 'title' => $title,
		// 'description' => $description,
		// 'get_data_setion_images_home' => $get_data_setion_images_home,
		// 'get_data_home_sukienchungtoi' => $get_data_home_sukienchungtoi,
		// 'get_data_home_sukienchungtoi_vn' => $get_data_home_sukienchungtoi_vn,
		// 'get_data_home_sukienchungtoi_qt' => $get_data_home_sukienchungtoi_qt,
		// 'data_task_hotnews' => $task_hot_news,
		// 'calendar' => $calendar,
		// 'keywords' => $keywords,
		// );
		// $this->parser->parse('header',$data);
		// $this->parser->parse('slide',$data);
		// $this->parser->parse('index_home',$data);
		// $this->parser->parse('footer',$data);
		
	}
	

	 function url_sub($str) {
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
	} 
	public function calendar(){
		
		$config_calendar = array(
			'start_day' => 'monday',
			'show_next_prev' => FALSE, // FALSE
			'day_type'     => 'short',
		);
		$config_calendar['template'] = '

			{table_open}<table class="table" >{/table_open}

			{heading_row_start}<tr>{/heading_row_start}

			{heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
			{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
			{heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

			{heading_row_end}</tr>{/heading_row_end}

			{week_row_start}<tr>{/week_row_start}
			{week_day_cell}<th>{week_day}</th>{/week_day_cell}
			{week_row_end}</tr>{/week_row_end}

			{cal_row_start}<tr>{/cal_row_start}
			{cal_cell_start}<td class="day_tables" >{/cal_cell_start}
			{cal_cell_start_today}<td >{/cal_cell_start_today}
			{cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

			{cal_cell_content}<a class="day_tables_highlight" href="{content}">{day}</a>{/cal_cell_content}
			{cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

			{cal_cell_no_content}{day}{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

			{cal_cell_blank}&nbsp;{/cal_cell_blank}

			{cal_cell_other}{day}{cal_cel_other}

			{cal_cell_end}</td>{/cal_cell_end}
			{cal_cell_end_today}</td>{/cal_cell_end_today}
			{cal_cell_end_other}</td>{/cal_cell_end_other}
			{cal_row_end}</tr>{/cal_row_end}

			{table_close}</table>{/table_close}
	';
		if($this->load->library('calendar',$config_calendar) == true){
			$time_day = time();
			$month_day = date('Y-m',$time_day);
			$getdata_lichsukien = $this->callbuyMD->getdata_lichsukien($month_day);
			$data = $this->query_caclua($getdata_lichsukien);
			$year_time_calendar = date("Y",$time_day);
			$month_time_calendar = date("m",$time_day);
			return $this->calendar->generate($year_time_calendar,$month_time_calendar,$data);
		}
		
		
	}
	
	function query_caclua($query_calendar){
		$gdata_calendar = array();
		foreach($query_calendar as $row){
			$day = (int)substr($row->datelichsukien,8,2);
			$url = $this->url_sub($row->title_lichsukien_vi);
			$gdata_calendar[(int)$day] = base_url().'calendar/dic/'.$url .'/'.$row->datelichsukien .'.icd';
		}
		return $gdata_calendar;
	} 
	

	
	
	
/********************************************************************************/
/*****************END Class User*************************************************/
}
?>