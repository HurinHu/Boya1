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
    	$this->load->model('Service_Model');
  	}
  	


	public function index()
	{
		$this->load->view('home');
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