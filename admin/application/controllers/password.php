<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Password extends CI_Controller {

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
		if($this->session->userdata('logged_in')){
			$data['user']=$this->session->userdata('user');
			$data['error']="";
			$this->load->view('password',$data);
		}else{
			redirect('/login','reload');
		}
	}
	
	public function change()
	{
		if($this->session->userdata('logged_in')){
			$data['user']=$this->session->userdata('user');
			$this->load->database();
			if($_POST){
				$password=$_POST['oldpw'];
				$query = $this->db->query("SELECT * FROM user WHERE user ='".$this->session->userdata('user')."' AND password = PASSWORD('$password')");
				if($query->num_rows()!=1){
					$data['error']="原密码错误";
					$this->load->view('password',$data);
				}else{
					if($_POST['password']!=$_POST['cpassword']){
						$data['error']="两次输入密码不匹配";
						$this->load->view('password',$data);
					}else{
						$password=$_POST['password'];
						$t = gmdate("Y-m-d H:i:s", mktime() + 8 * 3600);
						$this->db->query("UPDATE user SET password=PASSWORD('$password'), time='$t' WHERE user='".$this->session->userdata('user')."'");
						$data['error']="修改成功";
						$this->load->view('password',$data);
					}
				}
			}
		}else{
			redirect('/login','reload');
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */