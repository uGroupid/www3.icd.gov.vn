<?php

/*---------------------- Tools Administrator System website -------------------*/
/*......Deverloper by Handesk Safe Hengkeang.com Phone 093.233.7122............*/ 
/*******************************************************************************/
/*-----------------------------------------------------------------------------*/
class Dashboard extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('home_model', 'callbuyMD');	
		//$this->load->library('session');
        $this->load->helper('url');
		// $loggedIn = $this->session->userdata('logged_in');
		// if($loggedIn == NULL){
			// return redirect( echo base_url());
		// }return true;		
	}


	public function logout(){
		
		$this->session->sess_destroy();
			redirect(base_url()); 
	}
	public function output($data = null)
	{
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
	}
	public function index(){
		//$data  = array();
		$this->manager_video();
		
	}
	
	
  
	
	
  public function document(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_document');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Văn Bản Tài Liệu ');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('date_issued','Ngày ban hành');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Tệp Tin');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('number_symbol','Số/ Ký hiệu');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('sub_menu','loại văn Bản');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_vi','Tiêu Đề Văn Bản Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_en','Tiêu Đề Văn Bản Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('sub_menu','loại văn Bản');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Nội dung tiếng việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Nội dung tiếng Anh');
    /*Funtion Hkeanginc .VN*/ $xcrud->no_editor('keywords,description');
    /*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_vi');
    /*Funtion Hkeanginc .VN*/	$xcrud->validation_required('sub_menu');
    /*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active');
    
    /*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img');
    /*Funtion Hkeanginc .VN*/	$xcrud->validation_required('sub_menu');
    /*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active');
    
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'file', true, array( 'path' => '../uploads/file/',));
    /*Funtion Hkeanginc .VN*/	 $xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc','name_vi','subcate = 32');
    /*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}

  public function upload_lib_images(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_album_images');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Album  Hình Ảnh ');
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_csv();
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('date_upload');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_album_images');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('date_upload','Ngày Upload Ảnh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_album_images','Mô Tả Ảnh');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/gallery/',));
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
  	public function lichsukien(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_lichsukien');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Lịch Sự Kiện');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_lichsukien_vi','Tên Tiêu Đề LSK VN ');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_lichsukien_en','Tên Tiêu Đề LSK ENG ');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction_vi','Mô Tả Thời gian Địa Điểm');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction_en','Mô Tả Thời gian Địa Điểm');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('datelichsukien','Ngày Diễn Ra Sự Kiện');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Lịch sự kiện Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Lịch sự kiện Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('content_vi','Nội Dung');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('content_en','Nội Dung');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('introduction_en','Tóm Tắt Nội Dung');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('introduction_vi','Tóm Tắt Nội Dung');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('introduction_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('datelichsukien');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/lichsukien',));
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('introduction_en,title_conent_vi,introduction_vi,title_conent_en');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		
			/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
  public function manager_video(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_video');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Video');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_video','Tiêu Đề Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Giới Thiệu Về Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('linkyoutube',' Link youtube');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('id_menu',' Danh Mục');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('active',' Tình trạng');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_video','Tiêu Đề Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('introduction','Mô Tả Giới Thiệu Về Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('linkyoutube',' Link Youtube (Example: https://www.youtube.com/watch?v=qXKd7uuehlw)');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('id_menu','Danh Mục Video');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_video');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('linkyoutube');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id_menu');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('keywords,description,introduction');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('id_menu','tbl_danhmuc','id_danhmuc','name_vi');
		
	/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	} public function Our_video(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_video');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('id_menu',22);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Video của chúng tôi');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_video','Tiêu Đề Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Giới Thiệu Về Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('linkyoutube',' Link youtube');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('id_menu',' Danh Mục');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('active',' Tình trạng');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_video','Tiêu Đề Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('introduction','Mô Tả Giới Thiệu Về Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('linkyoutube',' Link Youtube (Example: https://www.youtube.com/watch?v=qXKd7uuehlw)');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('id_menu','Danh Mục Video');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_video');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('linkyoutube');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id_menu');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('keywords,description,introduction');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('id_menu','tbl_danhmuc','id_danhmuc','name_vi');
		
	/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function Video_consult(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_video');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('id_menu',23);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Video của chúng tôi');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_video','Tiêu Đề Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Giới Thiệu Về Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('linkyoutube',' Link youtube');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('id_menu',' Danh Mục');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('active',' Tình trạng');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_video','Tiêu Đề Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('introduction','Mô Tả Giới Thiệu Về Video');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('linkyoutube',' Link Youtube (Example: https://www.youtube.com/watch?v=qXKd7uuehlw)');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('id_menu','Danh Mục Video');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_video');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('linkyoutube');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id_menu');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('keywords,description,introduction');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('id_menu','tbl_danhmuc','id_danhmuc','name_vi');
		
	/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
public function manager_slideshow(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_slideshow');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị SlideShow Trang Chủ');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_slideshow_vi','Tên Tiêu Đề Slide Show VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_slideshow_en','Tên Tiêu Đề Slide Show EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('active','Trạng Thái');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề slideshow Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề slideshow Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('img','Hình Ảnh');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('content_vi','Nội Dung');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('content_en','Nội Dung');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('introduction','Tóm Tắt Nội Dung');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array('path' => '../uploads/slideshow',));
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}

  public function OUR_EVENTS(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',10);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Nội dung sự kiện của chúng tôi');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 2");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 10','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function CULTURE(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',11);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Nội dung văn hoá');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,introduction_en,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 3");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 11','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function SPORT(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',12);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Nội dung thể thao');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 3");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 12','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function Travel(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',13);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Nội dung du lịch');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 3");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 13','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function FAMILY(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',20);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Nội dung Gia đình');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 3");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 20','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function UPCOMING_EVENTS(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',9);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('SỰ KIỆN SẮP DIỄN RA');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 2");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 9','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function THE_DECREE(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',16);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Tài Liệu Các nghị định');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 32");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 16','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function The_decision(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',17);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Tài Liệu Các quyết định');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 32");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 17','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function Other_documents(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',18);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Tài Liệu Văn bản khác');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 32");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 18','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function CULTURAL_CENTER_OF_VIETNAM_OVERSEAS(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',27);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Nội dung TTVH Việt nam ở nước ngoài');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 26");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 27','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function WORLD_SAY_ABOUT_VIETNAM(){
     
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu', 25);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Nội dung THẾ GIỚI NÓI VỀ VIỆT NAM');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 24");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 25','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function Legal_documents(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',15);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Tài Liệu Văn bản pháp quy');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 32");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 15','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function Profile_Leadership_Department(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',7);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Hồ Sơ Lãnh Đạo Bộ Văn Hoá Thể Thao Và Du lịch');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 1");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 7','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function The_structure_of_the_Ministry_of_Culture_Sports_and_Tourism(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',6);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Giới Thiệu Cơ Cấu và Tổ Chức Bộ Văn Hoá Thể Thao Và Du Lịch');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		/*Funtion Hkeanginc .VN*/ $xcrud->unset_add()->unset_csv()->unset_remove();
                              $xcrud->unset_limitlist();
                              $xcrud->unset_numbers();
                              $xcrud->unset_pagination();
                              $xcrud->unset_search();
                              $xcrud->unset_print();
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 1");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 6','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function Structure_The_Department_of_International_Cooperation(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',5);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Giới Thiệu Tổng Quan về Cục Hợp Tác Quốc Tế');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		/*Funtion Hkeanginc .VN*/ //$xcrud->unset_add()->unset_csv()->unset_remove();
                              $xcrud->unset_limitlist();
                              $xcrud->unset_numbers();
                              $xcrud->unset_pagination();
                              $xcrud->unset_search();
                              $xcrud->unset_print();
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 1");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 5','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
  	public function Leaders_of_Department_of_International_Cooperation(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_nhansu_phongban');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Nhân Sự Phòng Ban');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('name_phongban',1);
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_csv();
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name_phongban');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('nhan_su');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('name_phongban','tbl_phongban','id','name_phongban');
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}public function Profile_HR_departments(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_nhansu_phongban');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Nhân Sự Phòng Ban');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('name_phongban','Tên Phòng Ban');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('nhan_su','Nhân Sự');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('name_phongban !=',1);
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_csv();
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name_phongban');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('nhan_su');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('name_phongban','tbl_phongban','id','name_phongban');
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function quan_ly_phongban(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_phongban');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Phòng Ban');
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_csv();
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name_phongban');
	
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
    public function discussion_question(){
			/*Funtion Hkeanginc .VN*/ $xcrud = Xcrud::get_instance();
			/*Funtion Hkeanginc .VN*/ $xcrud->table('tbl_discussion_question');
      /*Funtion Hkeanginc .VN*/	$xcrud->table_name('Trao đổi hỏi đáp');
			/*Funtion Hkeanginc .VN*/ $xcrud->create_action('publish', 'publish_discussion_question'); // action callback, function publish_action() in functions.php
			/*Funtion Hkeanginc .VN*/ $xcrud->create_action('unpublish', 'unpublish_discussion_question');
			/*Funtion Hkeanginc .VN*/ $xcrud->button('#', 'unpublished', 'icon-close glyphicon glyphicon-remove', 'xcrud-action', 
										array(  // set action vars to the button
										'data-task' => 'action',
										'data-action' => 'publish',
										'data-primary' => '{id}'), 
										array(  // set condition ( when button must be shown)
										'active',
										'!=',
										'1')
										);
			/*Funtion Hkeanginc .VN*/ $xcrud->button('#', 'published', 'icon-checkmark glyphicon glyphicon-ok', 'xcrud-action', array(
										'data-task' => 'action',
										'data-action' => 'unpublish',
										'data-primary' => '{id}'), array(
										'active',
										'=',
										'1'));
			/*Funtion Hkeanginc .VN*/	 $xcrud->unset_add()->unset_csv()->unset_sortable();
			/*Funtion Hkeanginc .VN*/	$xcrud->label('title','Tiêu Đề Câu Hỏi')->label('introduction','Chi Tiết Câu Hỏi');
			/*Funtion Hkeanginc .VN*/	$xcrud->label('active','Trạng Thái Đăng')->label('user_post','Người Đặt Câu Hỏi');
			/*Funtion Hkeanginc .VN*/	$xcrud->label('date_contact','Ngày Đăng');
			
			/*Funtion Hkeanginc .VN*/	$xcrud->columns('title,introduction,user_post,date_contact,active');
			/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
	}	public function report_contact(){
			
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_contact');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Báo cáo liên hệ');
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_add()->unset_edit()->unset_csv()->unset_sortable();
		/*Funtion Hkeanginc .VN*/	$xcrud->label('name','Họ Và Tên Yêu Cầu');
		/*Funtion Hkeanginc .VN*/	$xcrud->order_by('date_contact','desc');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('message','Tin Thông Báo');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('date_contact','Ngày Liên Hệ');
			/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
		public function config_footer(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_config_footer');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Lý Cấu Hình Footer');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('name_footer','nội dung chân trang');
		/*Funtion Hkeanginc .VN*/	$xcrud->unset_add();
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_csv();
									$xcrud->unset_remove();
									$xcrud->unset_csv();
									$xcrud->unset_limitlist();
									$xcrud->unset_numbers();
									$xcrud->unset_pagination();
									$xcrud->unset_print();
									$xcrud->unset_search();
									$xcrud->unset_sortable();
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name_footer');
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
		public function lienketlink(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_site_link');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Liên Kết Trang');
			/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/lienketklink',));
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_csv();
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('id');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('link');
		$xcrud->unset_add();
		$xcrud->unset_remove();
		$xcrud->unset_csv();
		$xcrud->unset_limitlist();
		$xcrud->unset_numbers();
		$xcrud->unset_pagination();
		$xcrud->unset_print();
		$xcrud->unset_search();
		$xcrud->unset_title();
		$xcrud->unset_sortable();
	/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function config_contact(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_config_contact');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Lý Cấu Hình Liên Hệ');
			$xcrud->unset_add();
		  $xcrud->unset_remove();
		  $xcrud->unset_csv();
		  $xcrud->unset_limitlist();
		  $xcrud->unset_numbers();
		  $xcrud->unset_pagination();
		  $xcrud->unset_print();
		  $xcrud->unset_search();
		  $xcrud->unset_sortable();
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title','Tiêu Đề  Liên Hệ');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('contact','Mô Tả Giới Thiệu Về  Liên Hệ');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('linkmap',' Link Maps');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title','Tiêu Đề  Liên Hệ');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Từ Khoá  seo');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('contact','Mô Tả Giới Thiệu Về  Liên Hệ');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('linkmap',' Link Youtube (Example: https://www.map.google.com/watch?v=qXKd7uuehlw)');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('contact');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('linkmap');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('keywords,description');
			/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
public function News_images(){
			
		/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_content');
		/*Funtion Hkeanginc .VN*/	$xcrud->where('sub_menu',31);
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Tin Tức bằng hình ảnh');
		/*Funtion Hkeanginc .VN*/	$xcrud->columns('title_conent_vi,introduction,mem_subche,sub_menu,active');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_vi','Tên Bài Viết VI');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('title_conent_en','Tên Bài Viết EN');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('keywords','keywords')->label('active','Trạng Thái');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('description','description')->label('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('introduction','Mô Tả Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_vi','Bài Viết Tiếng Việt');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('content_en','Bài Viết Tiếng Anh');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('img','Hình Ảnh Bài Viết');
		/*Funtion Hkeanginc .VN*/	$xcrud->label('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_vi','Tiêu Đề Bài Viết Tiếng Việt Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('title_conent_en','Tiêu Đề Bài Viết Tiếng Anh Mục Chứa Tiêu Đề Hiển Thị');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('keywords','Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('description','Nội Dung Từ Khoá Tìm Kiếm');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('active','Trạng Thái Có Cho Phép hoạt Động Hay Không');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('sub_menu','Danh Mục Con');
		/*Funtion Hkeanginc .VN*/	$xcrud->field_tooltip('mem_subche','Danh Mục Chính');
		
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('active')->validation_required('description');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('keywords')->validation_required('introduction');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('title_conent_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('content_vi');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('img')->validation_required('mem_subche');
		
		/*Funtion Hkeanginc .VN*/   $xcrud->no_editor('description,keywords');
		/*Funtion Hkeanginc .VN*/	$xcrud->change_type('img', 'image', true, array( 'path' => '../uploads/content',));
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('mem_subche','tbl_danhmuc','id_danhmuc','name_vi',"tbl_danhmuc.id_danhmuc = 30");
		/*Funtion Hkeanginc .VN*/	$xcrud->relation('sub_menu','tbl_danhmuc','id_danhmuc',array('name_vi',),'tbl_danhmuc.id_danhmuc = 31','','',' ','','subcate','mem_subche');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('active','tbl_active','id_active','name');
		/*Funtion Hkeanginc .VN*/	 $xcrud->relation('tin_hot_category','tbl_active_newscatelog','id','active');
		
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}
	public function setting_category(){
    	/*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_config_footer');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị Footer');
									$xcrud->unset_add();
		/*Funtion Hkeanginc .VN*/   $xcrud->unset_csv();
									$xcrud->unset_remove();
									$xcrud->unset_csv();
									$xcrud->unset_limitlist();
									$xcrud->unset_numbers();
									$xcrud->unset_pagination();
									$xcrud->unset_print();
									$xcrud->unset_search();
									$xcrud->unset_title();
									$xcrud->unset_sortable();
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name_footer');
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
		
	}

  public function user_profile(){

    /*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_user');
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị User');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('id_pem','Quyền Người Dùng');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('nameuser','Tài Khoản Đăng Nhập');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('passwords','Mật Khẩu');
    /*Funtion Hkeanginc .VN*/	$xcrud->where('id_pem !=',1);
									$xcrud->unset_csv();
									$xcrud->unset_limitlist();
									$xcrud->unset_numbers();
									$xcrud->unset_pagination();
									$xcrud->unset_print();
									$xcrud->unset_search();
									$xcrud->unset_sortable();
    /*Funtion Hkeanginc .VN*/	$xcrud->columns('nameuser,id_pem'); 
    /*Funtion Hkeanginc .VN*/ $xcrud->change_type('passwords', 'password', 'md5', array('minlength'=>6,'placeholder'=>'Nhập mật khẩu lớn hơn 6 kí tự'));
    /*Funtion Hkeanginc .VN*/	$xcrud->relation('id_pem','tbl_pemuser','id_pem','name_pem','id_pem != 1');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name_footer');
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
  } 


public function profile(){
     $IdProfiles = $this->session->userdata('id_user');
     $id_pem = $this->session->userdata('id_pem');
    /*Funtion Hkeanginc .VN*/	Xcrud_config::$editor_url =  base_url().'assets/xcrud/ckeditor/ckeditor.js';
		/*Funtion Hkeanginc .VN*/	$xcrud = Xcrud::get_instance();
		/*Funtion Hkeanginc .VN*/	$xcrud->table('tbl_user');
    
		/*Funtion Hkeanginc .VN*/	$xcrud->table_name('Quản Trị User');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('id_pem','Quyền Người Dùng');
    /*Funtion Hkeanginc .VN*/	$xcrud->where('id_user', $IdProfiles );
    /*Funtion Hkeanginc .VN*/	$xcrud->label('nameuser','Tài Khoản');
    /*Funtion Hkeanginc .VN*/	$xcrud->label('nameuser','Tài Khoản');
    /*Funtion Hkeanginc .VN*/	$xcrud->where('id_pem',$id_pem);
     /*Funtion Hkeanginc .VN*/	$xcrud->fields('passwords'); 
									$xcrud->unset_remove();
									$xcrud->unset_add();
									$xcrud->unset_csv();
									$xcrud->unset_limitlist();
									$xcrud->unset_numbers();
									$xcrud->unset_pagination();
									$xcrud->unset_print();
									$xcrud->unset_search();
									$xcrud->unset_sortable();
    /*Funtion Hkeanginc .VN*/	$xcrud->columns('nameuser,id_pem'); 
    /*Funtion Hkeanginc .VN*/ $xcrud->change_type('passwords', 'password', 'md5', array('minlength'=>6,'placeholder'=>'Nhập lớn hơn 6 kí tự'));
    /*Funtion Hkeanginc .VN*/	 $xcrud->relation('id_pem','tbl_pemuser','id_pem','name_pem','id_pem != 1');
		/*Funtion Hkeanginc .VN*/	$xcrud->validation_required('name_footer');
		/*Funtion Hkeanginc .VN*/	$data['content'] = $xcrud->render();
		
		$this->parser->parse('header',$data);
		$this->parser->parse('admin_view',$data);
		$this->parser->parse('footer',$data);
  }
	
	
  /* end code system */
	
}
?>