<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller
{
	public $data = array();

	 public function __construct()
        {
                parent::__construct();
                $this->load->model('Users_model');
                $this->load->helper(array('form', 'url'));
        }
	
	public function index()
	{

      if($this->session->userdata('is_logged_in'))
      {
      	
      	$data['users'] = $this->Users_model->get_users();
      	$this->load->view('admin/index',$data);

      } else{
		// echo 'hello login';exit;
		// redirect('admin/login');
		$this->load->view('includes/header');
		$this->load->view('admin/login');
		$this->load->view('includes/footer');

      }
      
  	}


  	// password encrption
  	function __encrip_password($password)
  	{
  		return md5($password);
  	}

  	function validate_credentials()
	{	

     
		$this->load->model('Users_model');

		$user_name = $this->input->post('user_name');


		$password = $this->__encrip_password($this->input->post('password'));


		$is_valid = $this->Users_model->validate($user_name, $password);
		//echo $is_valid;die();
		// echo 'is not valid';exit;
		if($is_valid)
		{
			$data = array(
				'user_name' => $user_name,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('admin');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
		}
	}	
    function signup()
	{
		$this->load->view('includes/header');
		$this->load->view('admin/signup_form');	
		$this->load->view('includes/header');

	}
	// function file_view()
	// {
	// 	$this->load->view('admin/file_view');
	// }


	function create_member(){
		/*form submit*/
    	if($this->input->post()){
    		$this->_save_member();
	    }
		$this->load->view('admin/signup_form' , $this->data);
	}

	private  function  _save_member(){
		$this->data['error']  = 'validation_error';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run())
		{		
			$fieName = '';
			if(isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])){
					$config = array(
					'upload_path' => "./uploads/",
					'allowed_types' => "gif|jpg|png|jpeg|pdf",
					'overwrite' => FALSE,
					'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					);
				     $this->load->library('upload', $config);	
				     if($this->upload->do_upload())
					 {
					    $data = $this->upload->data();
						$fieName = $data['file_name'];
					}else{
					  $this->data['error']  = $this->upload->display_errors();
					}	
			}

			$this->load->model('Users_model');
			
			if($query = $this->Users_model->create_member($fieName))
			{
				$this->session->set_flashdata('message', 'sign up success');
				redirect(base_url(). '/User/create_member');
				die;			
			}
		}
	}


	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
	function profile()
	{
		$this->load->view('admin/profile');
	}

	

}