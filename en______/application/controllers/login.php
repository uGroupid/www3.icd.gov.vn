<?php
class Login extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('home_model', 'callbuyMD');	
		$loggedIn = $this->session->userdata('logged_in');
		// if($loggedIn == NULL){
			// return redirect('http://www3.icd.gov.vn/login');
		// }return true;
				
	}
	
	public function index(){
		$title = "Hệ Thống Quản Trị Website Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
		$description = "Hệ Thống Quản Trị Website Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
		$keywords = "Hệ Thống Quản Trị Website Cục Hợp tác quốc tế của Bộ Văn hóa Du lịch và Thể thao";
		$data = array(
		'title' => $title,
		'description' => $description,
		'keywords' => $keywords,
		);
		//$this->parser->parse('header',$data);
		$this->parser->parse('login/login_view',$data);
		//$this->parser->parse('footer',$data);
		
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
/********************************************************************************/
/*****************END Class User*************************************************/
}
?>