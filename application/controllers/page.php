<?php
class Page extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('home_model', 'callbuyMD');	
		// return redirect('http://www3.icd.gov.vn/quantri');
				
	}
	public function check_login(){
		$username = $this->input->post('username');
		$passwords = $this->input->post('password');
		$mahoa = md5($passwords);

		$check_logins = $this->callbuyMD->check_login_user($username,$mahoa);
		
		if($check_logins == true){
				foreach($check_logins as $row){}
				$newdata = array(
				'id_user' 	 		 => $row['id_user'],
				'nameuser'    		 => $row['nameuser'],
				'id_pem'      => $row['id_pem'],
				'logged_in'		 => TRUE
				);
				$this->session->set_userdata($newdata);
				redirect("/quantri");
			
		}else{
			redirect("/login");
		}
		
	}
	public  function to_slug($str) {
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
	public function url(){
		$string = "Quyết Định Số 366/QĐ-BVHTTDL Ngày 25/02: Bảo Tàng Lịch Sử Quốc Gia Tổ Chức Trưng Bày Triển Lãm “Văn Hóa Đông Sơn” Tại Malaysia";
		$name = $this->to_slug($string);
		echo $name;
	}
	public function content($title,$idmenu){
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
				$datacontent = $this->callbuyMD->tbl_getcontent($value_header_data_item['id_danhmuc']);
				$title = $value_header_data_item['name_vi'];
				$description = $value_header_data_item['description'];
				$keywords = $value_header_data_item['keywords'];
				$contresurt = $this->callbuyMD->tbl_countcontent($value_header_data_item['id_danhmuc']);
				$display = 5;
				$start = 0;
				$page = ceil($contresurt/$display); // tổng số trang.
			 
					$data = array(
						'title' => $title,
						'description' => $description,
						'keywords' => $keywords,
						'iddanhmuc' => $idmenu, 
						'datacontent' => $datacontent,
						'datacount' => $page,
					);
				$this->parser->parse('header',$data);
				$this->parser->parse('slide',$data);
				$this->parser->parse('content/list',$data);
				$this->parser->parse('footer',$data);
			}
		}
	}
	
	public function contents($idmenu,$title,$start){

			
				$this->load->helper("url");
				$this->load->library("pagination");
				$config['base_url'] = base_url('index.php/page/contents/6'); 
				$config['total_rows'] = $this->callbuyMD->tbl_countcontentse($idmenu); 
				$config['per_page'] = 5; 
				$config['uri_segment'] = 6; 
				$this->pagination->initialize($config); 
				$data['data'] = $this->callbuyMD->tbl_getcontentse($idmenu,$start);
			
		  
			
				
					// $data = array(
						// 'title' => $title,
						// 'description' => $description,
						// 'keywords' => $keywords,
						
						// 'datacontent' => $datacontent,
						// 'datacount' => $page,
					// );
				// $this->parser->parse('header',$data);
				// $this->parser->parse('slide',$data);
				$this->parser->parse('content/test',$data);
				// $this->parser->parse('footer',$data);
			
	}
	
	
	public function jyahoo(){
		$data = array('');
		$this->parser->parse('jdata_yahoo',$data);
	}
	
/********************************************************************************/
/*****************END Class User*************************************************/
}
?>