<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->helper('download');
		$this->load->library('email');
		$this->load->helper('form');
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
			if(isset($_COOKIE['lang'])){
				if($_COOKIE['lang']=="zh"){
					$this->lang->load('home','chinese');
				}else if($_COOKIE['lang']=="en"){
					$this->lang->load('home','english');
				}
			}else if (preg_match("/zh/i", $lang)) {
				$this->lang->load('home','chinese');
				setcookie("lang","zh", time()+3600*24*7*31,"/","localhost");
			}else{
				$this->lang->load('home','english');
				setcookie("lang","en", time()+3600*24*7*31,"/","localhost");
			}
    	$this->load->model('Service_Model');
    	$this->load->model('Contact_Model');
  	}
  	

	public function index()
	{
		$data['title']=$this->lang->line('title');
		$data['home']=$this->lang->line('home');
		$data['introduction']=$this->lang->line('introduction');
		$data['service']=$this->lang->line('service');
		$data['example']=$this->lang->line('example');
		$data['member']=$this->lang->line('member');
		$data['contact']=$this->lang->line('contact');
		$data['content1']=$this->lang->line('content1');
		$data['content2']=$this->lang->line('content2');
		$data['morebtn']=$this->lang->line('morebtn');
		$this->load->view('home',$data);
	}
	
	public function about()
	{
		$this->load->view('about');
	}
	
	public function services()
	{
		$data['all_Content'] = $this->Service_Model->get_All_Content();
		$this->load->view('services',$data);
	}
	
	public function projects()
	{
		$this->load->view('projects');
	}
	
	public function teams()
	{
		$this->load->view('teams');
	}
	
	public function contacts()
	{
		$data['success'] = "121212";
		$this->load->view('contacts',$data);
	}

	public function contact_info(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$content = $this->input->post('message');

		$this->Contact_Model->insert_user_questions($name,$email,$phone,$content);
		$this->load->view('contacts');
	}

	public function download($id){
		switch($id){
			case 7:
				$name = "博雅教育宣传资料.pdf";
				$alias = "BYXC";
				$data = file_get_contents("../Boya1/BoyaData/".$alias.".pdf"); // 读文件内容
				break;
			case 8:
				$name = "个人基本资料表.doc";
				$alias = "PersonalData";
				$data = file_get_contents("../Boya1/BoyaData/".$alias.".doc"); // 读文件内容
				break;
			case 9:
				$name = "PS素材收集表.doc";
				$alias = "PScollection";
				$data = file_get_contents("../Boya1/BoyaData/".$alias.".doc"); // 读文件内容
				break;
			default:break;

		}
		force_download($name, $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */