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
    	$this->load->model('Service_Model');
    	$this->load->model('Contact_Model');
  	}
  	

	public function index()
	{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
			if(isset($_COOKIE['lang'])){
				if($_COOKIE['lang']=="zh"){
					$this->lang->load('home','chinese');
					$data['lang']="en";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
				}else if($_COOKIE['lang']=="en"){
					$this->lang->load('home','english');
					$data['lang']="zh";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
				}
			}else if (preg_match("/zh/i", $lang)) {
				$this->lang->load('home','chinese');
				setcookie("lang","zh", time()+3600*24*7*31,"/","localhost");
				$data['lang']="en";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
			}else{
				$this->lang->load('home','english');
				setcookie("lang","en", time()+3600*24*7*31,"/","localhost");
				$data['lang']="zh";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
			}
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
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
			if(isset($_COOKIE['lang'])){
				if($_COOKIE['lang']=="zh"){
					$this->lang->load('about','chinese');
					$data['lang']="en";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
				}else if($_COOKIE['lang']=="en"){
					$this->lang->load('about','english');
					$data['lang']="zh";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
				}
			}else if (preg_match("/zh/i", $lang)) {
				$this->lang->load('about','chinese');
				setcookie("lang","zh", time()+3600*24*7*31,"/","localhost");
				$data['lang']="en";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
			}else{
				$this->lang->load('about','english');
				setcookie("lang","en", time()+3600*24*7*31,"/","localhost");
				$data['lang']="zh";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
			}
			$data['title']=$this->lang->line('title');
		$data['home']=$this->lang->line('home');
		$data['introduction']=$this->lang->line('introduction');
		$data['service']=$this->lang->line('service');
		$data['example']=$this->lang->line('example');
		$data['member']=$this->lang->line('member');
		$data['contact']=$this->lang->line('contact');
		$data['title1']=$this->lang->line('title1');
		$data['title2']=$this->lang->line('title2');
		$data['title3']=$this->lang->line('title3');
		$this->load->view('about',$data);
	}
	
	public function services()
	{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
			if(isset($_COOKIE['lang'])){
				if($_COOKIE['lang']=="zh"){
					$this->lang->load('service','chinese');
					$data['lang']="en";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
				}else if($_COOKIE['lang']=="en"){
					$this->lang->load('service','english');
					$data['lang']="zh";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
				}
			}else if (preg_match("/zh/i", $lang)) {
				$this->lang->load('service','chinese');
				setcookie("lang","zh", time()+3600*24*7*31,"/","localhost");
				$data['lang']="en";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
			}else{
				$this->lang->load('service','english');
				setcookie("lang","en", time()+3600*24*7*31,"/","localhost");
				$data['lang']="zh";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
			}
			$data['title']=$this->lang->line('title');
		$data['home']=$this->lang->line('home');
		$data['introduction']=$this->lang->line('introduction');
		$data['service']=$this->lang->line('service');
		$data['example']=$this->lang->line('example');
		$data['member']=$this->lang->line('member');
		$data['contact']=$this->lang->line('contact');
		$data['title1']=$this->lang->line('title1');
		$data['more']=$this->lang->line('more');
		$data['all_Content'] = $this->Service_Model->get_All_Content();
		$this->load->view('services',$data);
	}
	
	public function projects()
	{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
			if(isset($_COOKIE['lang'])){
				if($_COOKIE['lang']=="zh"){
					$this->lang->load('service','chinese');
					$data['lang']="en";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
				}else if($_COOKIE['lang']=="en"){
					$this->lang->load('service','english');
					$data['lang']="zh";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
				}
			}else if (preg_match("/zh/i", $lang)) {
				$this->lang->load('service','chinese');
				setcookie("lang","zh", time()+3600*24*7*31,"/","localhost");
				$data['lang']="en";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
			}else{
				$this->lang->load('service','english');
				setcookie("lang","en", time()+3600*24*7*31,"/","localhost");
				$data['lang']="zh";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
			}
			$data['title']=$this->lang->line('title');
		$data['home']=$this->lang->line('home');
		$data['introduction']=$this->lang->line('introduction');
		$data['service']=$this->lang->line('service');
		$data['example']=$this->lang->line('example');
		$data['member']=$this->lang->line('member');
		$data['contact']=$this->lang->line('contact');
		$data['title1']=$this->lang->line('title1');
		$this->load->view('projects',$data);
	}
	
	public function teams()
	{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
			if(isset($_COOKIE['lang'])){
				if($_COOKIE['lang']=="zh"){
					$this->lang->load('team','chinese');
					$data['lang']="en";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
				}else if($_COOKIE['lang']=="en"){
					$this->lang->load('team','english');
					$data['lang']="zh";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
				}
			}else if (preg_match("/zh/i", $lang)) {
				$this->lang->load('team','chinese');
				setcookie("lang","zh", time()+3600*24*7*31,"/","localhost");
				$data['lang']="en";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
			}else{
				$this->lang->load('team','english');
				setcookie("lang","en", time()+3600*24*7*31,"/","localhost");
				$data['lang']="zh";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
			}
			$data['title']=$this->lang->line('title');
		$data['home']=$this->lang->line('home');
		$data['introduction']=$this->lang->line('introduction');
		$data['service']=$this->lang->line('service');
		$data['example']=$this->lang->line('example');
		$data['member']=$this->lang->line('member');
		$data['contact']=$this->lang->line('contact');
		$data['title1']=$this->lang->line('title1');
		$data['more']=$this->lang->line('more');
		$data['position1']=$this->lang->line('position1');
		$data['position2']=$this->lang->line('position2');
		$data['position3']=$this->lang->line('position3');
		$data['intro1']=$this->lang->line('intro1');
		$data['intro2']=$this->lang->line('intro2');
		$data['intro3']=$this->lang->line('intro3');
		$data['other']=$this->lang->line('other');
		$data['li1']=$this->lang->line('li1');
		$data['li2']=$this->lang->line('li2');
		$data['li3']=$this->lang->line('li3');
		$data['li4']=$this->lang->line('li4');
		$data['li5']=$this->lang->line('li5');
		$data['li6']=$this->lang->line('li6');
		$data['li7']=$this->lang->line('li7');
		$data['li8']=$this->lang->line('li8');
		$data['li9']=$this->lang->line('li9');
		$data['li10']=$this->lang->line('li10');
		$data['join']=$this->lang->line('join');
		$data['joinintro']=$this->lang->line('joinintro');
		$this->load->view('teams',$data);
	}
	
	public function contacts()
	{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); 
			if(isset($_COOKIE['lang'])){
				if($_COOKIE['lang']=="zh"){
					$this->lang->load('contact','chinese');
					$data['lang']="en";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
				}else if($_COOKIE['lang']=="en"){
					$this->lang->load('contact','english');
					$data['lang']="zh";
					$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
				}
			}else if (preg_match("/zh/i", $lang)) {
				$this->lang->load('contact','chinese');
				setcookie("lang","zh", time()+3600*24*7*31,"/","localhost");
				$data['lang']="en";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"en\">英文</a>";
			}else{
				$this->lang->load('contact','english');
				setcookie("lang","en", time()+3600*24*7*31,"/","localhost");
				$data['lang']="zh";
				$data['language']="<a href=\"#\" id=\"lang\" value=\"zh\">中文</a>";
			}
			$data['title']=$this->lang->line('title');
		$data['home']=$this->lang->line('home');
		$data['introduction']=$this->lang->line('introduction');
		$data['service']=$this->lang->line('service');
		$data['example']=$this->lang->line('example');
		$data['member']=$this->lang->line('member');
		$data['contact']=$this->lang->line('contact');
		$data['title1']=$this->lang->line('title1');
		$data['address']=$this->lang->line('address');
		$data['address1']=$this->lang->line('address1');
		$data['qq']=$this->lang->line('qq');
		$data['phone']=$this->lang->line('phone');
		$data['wechat']=$this->lang->line('wechat');
		$data['email']=$this->lang->line('email');
		$data['weibo']=$this->lang->line('weibo');
		$data['formtitle']=$this->lang->line('formtitle');
		$data['formname']=$this->lang->line('formname');
		$data['formemail']=$this->lang->line('formemail');
		$data['formphone']=$this->lang->line('formphone');
		$data['formmessage']=$this->lang->line('formmessage');
		$data['formclear']=$this->lang->line('formclear');
		$data['formsend']=$this->lang->line('formsend');
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