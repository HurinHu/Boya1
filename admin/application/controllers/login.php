<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index()
	{
		$data['error']="";
		$this->load->view('login',$data);
	}
	public function auth(){
		if($_POST){
			$this->load->model('login_model');
			$result=$this->login_model->check($_POST['user'],$_POST['password']);
			if(empty($result)){
				$data['error']="账号或密码错误";
				$this->load->view('login',$data);
			}else{
				$login = array(
                   'user'  => $_POST['user'],
                   'password'  => md5($_POST['password']),
                   'logged_in' => TRUE
               );
               $this->session->set_userdata($login);
				redirect('','reload');
			}
		}else{
			$this->load->view('login');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */