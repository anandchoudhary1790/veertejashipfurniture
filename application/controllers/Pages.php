<?php 
class Pages extends CI_Controller
{
	public $data = array();

	public function __construct(){
	    parent::__construct();
	    $this->load->model('Pages_model');
	    $this->load->model('Cms_Pages_model');
	    $this->load->helper(array('form', 'url'));  
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');

	}
	public function add_page(){
		if($this->input->post()){
		 $this->_save_page();
	    }
		$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/add_page');
	    $this->load->view('includes/footer_inner');
	}
	public function _save_page(){

		$this->data['error']  = 'validation_error';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('page_title', 'Page Title', 'trim|required');
		$this->form_validation->set_rules('page_short_description', 'Page Description', 'trim|required');
		$this->form_validation->set_rules('page_description', 'Page Description', 'trim|required');
		
		if($this->form_validation->run())
		{	
			$data = 'imagenotavailable.png';	
			if(isset($_FILES['page_img']['name']) && !empty($_FILES['page_img']['name'])){
					$config = array(
					'upload_path' => "./uploads/",
					'allowed_types' => "gif|jpg|png|jpeg|pdf",
					'overwrite' => FALSE,
					'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					);
				     $this->load->library('upload', $config);	
				     if($this->upload->do_upload('page_img'))
					{
					    $data = $this->upload->data('file_name'); 
					}else{
					  $this->data['error']= $this->upload->display_errors(); 
					}	
			}
			$this->load->model('Cms_Pages_model');
			if($query = $this->Cms_Pages_model->save_page($data))
			{
				$this->session->set_flashdata('message', 'Page record saved successfully');
				redirect(base_url(). 'Pages/add_page');
			}
		}
		$this->load->view('admin/add_page' , $this->data);
	}
	public function logo(){
		$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/logo');
		$this->load->view('includes/footer_inner');
	}
	public function upload_logo(){
		if(isset($_FILES['logo_img']['name']) && !empty($_FILES['logo_img']['name'])){
			$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => FALSE,
			'max_size' => "2048000", 
			);
	        $this->load->library('upload', $config);	
		      if($this->upload->do_upload('logo_img')){
				    $data = $this->upload->data('file_name');
					//$fieName = $data['name'];
				}else{
				  $this->data['error']  = $this->upload->display_errors();
				}	
			}
		$this->load->model('Pages_model');
		if($query = $this->Pages_model->save_logo($data)){
			$this->session->set_flashdata('message', 'logo successfully updated');
			redirect(base_url(). 'admin/logo');
		}
		$this->load->view('admin/logo' , $this->data);
	}
	public function slider()
	{
		if($this->input->post()){
		 $this->_save_slider();
	    }
		$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/slider');
		$this->load->view('includes/footer_inner');

	}
	public function _save_slider()
	{
		$this->data['error']  = 'validation_error';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('slider_title', 'Slider Title', 'trim|required');
		$this->form_validation->set_rules('slider_tag_line', 'Slider Tag Line', 'trim|required');
		$this->form_validation->set_rules('slider_description', 'Slider Description', 'trim|required');
		
		if($this->form_validation->run())
		{		
			if(isset($_FILES['slider_img']['name']) && !empty($_FILES['slider_img']['name'])){
					$config = array(
					'upload_path' => "./uploads/",
					'allowed_types' => "gif|jpg|png|jpeg|pdf",
					'overwrite' => FALSE,
					'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					);
				     $this->load->library('upload', $config);	
				     if($this->upload->do_upload('slider_img'))
					{
					    $data = $this->upload->data('file_name');
					}else{
					  $this->data['error']  = $this->upload->display_errors();
					}	
			}
			$this->load->model('Cms_Pages_model');
			if($query = $this->Cms_Pages_model->save_slider($data))
			{
				$this->session->set_flashdata('message', 'Slider record saved successfully');
				redirect(base_url(). 'Pages/slider');
			}
		}
		$this->load->view('admin/slider' , $this->data);

	}
	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('about');
		$this->load->view('templates/footer');
	}
	public function portfolio()
	{
		$this->load->view('templates/header');
		$this->load->view('portfolio');
		$this->load->view('templates/footer');
	}
	public function service()
	{
		$this->load->view('templates/header');
		$this->load->view('service');
		$this->load->view('templates/footer');
	}
	public function pricing()
	{
		$this->load->view('templates/header');
		$this->load->view('pricing');
		$this->load->view('templates/footer');
	}
	public function blog()
	{
		$this->load->view('templates/header');
		$this->load->view('blog');
		$this->load->view('templates/footer');
	}
	public function contact()
	{
		$this->load->view('templates/header');
		$this->load->view('contact');
		$this->load->view('templates/footer');
	}
    public function add_portfolio_category()
    {
    	if($this->input->post()){
		 $this->_save_portfolio_category();
	    }
    	$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/add_portfolio_category');
		$this->load->view('includes/footer_inner');
    }
    public function _save_portfolio_category()
    {
    	$this->data['error']  = 'validation_error';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('project_cat', 'Project Category', 'trim|required');
		
		if($this->form_validation->run())
		{		
			$this->load->model('Cms_Pages_model');
			if($query = $this->Cms_Pages_model->save_portfolio_category($data))
			{
				$this->session->set_flashdata('message', 'project category  saved successfully');
				redirect(base_url(). 'Pages/add_portfolio_category');
			}
		}
		$this->load->view('admin/add_portfolio_category' , $this->data);
    }
	public function add_portfolio()
	{
		if($this->input->post()){
			$this->_save_portfolio();
		}
		$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/add_portfolio');
		$this->load->view('includes/footer_inner');
	}
	public function _save_portfolio()
	{
		$this->data['error']  = 'validation_error';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('project_cat', 'Project Category', 'trim|required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'trim|required');
		$this->form_validation->set_rules('project_description', 'Project Description', 'trim|required');
		
		if($this->form_validation->run())
		{		
			if(isset($_FILES['project_img']['name']) && !empty($_FILES['project_img']['name'])){
					$config = array(
					'upload_path' => "./uploads/portfolio/",
					'allowed_types' => "gif|jpg|png|jpeg|pdf",
					'overwrite' => FALSE,
					'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					);
				     $this->load->library('upload', $config);	
				     if($this->upload->do_upload('project_img'))
					{
					    $data = $this->upload->data('file_name');
					}else{
					  $this->data['error']  = $this->upload->display_errors();
					}	
			}
			$this->load->model('Cms_Pages_model');
			if($query = $this->Cms_Pages_model->save_portfolio($data))
			{
				$this->session->set_flashdata('message', 'Portfolio record saved successfully');
				redirect(base_url(). 'Pages/add_portfolio');
			}
		}
		$this->load->view('admin/add_portfolio' , $this->data);
	}
	// public function add_blog(){
	// 	if($this->input->post()){
	// 		$this->_save_blog();
	// 	}
	// 	$this->load->view('includes/header_in');
	// }
	public  function delete_page()
	{
		$id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->delete('cms_pages'); 
	    redirect(base_url().'Pages/view_page?msg=your page record successfully deleted.');

	}
	public function view_page()
	{
		$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/view_page');
		$this->load->view('includes/footer_inner');
	}
	public function edit_page()
	{
		$id = $this->uri->segment(3);
		echo $id;
		$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/edit_page');
		$this->load->view('includes/footer_inner');
	}
	public function change_status()
	{
		if(isset($_GET['status']) && isset($_GET['id']))
		{
			
			$status = $_GET['status'];
			if($status==0)
			{
				$status=1;
			}
			elseif($status==1)
			{
				$status=0;
			}
			$id = $_GET['id'];
		}
		$this->db->set('page_status', $status);
		$this->db->where('id', $id);
		$this->db->update('cms_pages');
		
		// gives UPDATE mytable SET field = field+1 WHERE id = 2
	    redirect(base_url().'Pages/view_page?status='.$status);
		$this->load->view('includes/header_inner');
		$this->load->view('includes/sidebar');
		$this->load->view('admin/view_page');
		$this->load->view('includes/footer_inner');
	}
}