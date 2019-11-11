<?php
//echo "hj";die;
//echo phpinfo();die;
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
      	parent::__construct();
      	$this->load->model('home_model');
		
    }

    function index(){
    	$data['latest_blog']=$this->home_model->latest_blog();
    	$this->load->view('common/Home',$data);
    }

   
   

	public function contact_us()
	{	
     	//echo "hjhj";die;
		//echo "<pre>";print_r($_POST);die;
		$data = array();
		
        $this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Full Name', 'required');
		$this->form_validation->set_rules('phone', 'Contact', 'required');
		
		if($this->form_validation->run() == FALSE){	
		
			if(validation_errors())
			{
				$data["error"] = validation_errors();
					echo "<pre>";print_r($data);die;
			}else{
				$data["error"] = "";
			}
			if($_POST){			
				$data["email"]      = $this->input->post('email');
				$data["username"]   = $this->input->post('Username');			
				$data["phone"]      = $this->input->post('PhoneNumber');
				$data["subject"]        = $this->input->post('subject');
				$data["message"]   = $this->input->post('message');
			
			}else{
			
			
			}
		}else{
			//echo "fgfg";die;
			$this->session->set_flashdata('success', 'Message has been send successfully');
			$this->home_model->insertcontact();
			redirect('home/contact_us');
		}
		
		$this->load->view('common/Contactus',$data);
	}
	public function Page()
	{	
		$this->load->view('PrivacyPolicy');
	}

	function about(){
		$this->load->view('common/about');
	}
	function vision(){
		$this->load->view('common/vision');
	}
	function our_mision(){
		$this->load->view('common/our_mision');
	}
	function career(){
		$this->load->view('common/career');
	}	
	
	function web_development(){
		$this->load->view('common/web_development');
	}
	function web_design(){
		$this->load->view('common/web_design');
	}
	function digital_marketing(){
		$this->load->view('common/digital_marketing');
	}
	function mobile_application(){
		$this->load->view('common/mobile_application');
	}
	function msp_services(){
		$this->load->view('common/msp_services');
	}
  
	function  workstations_and_point_of_sale_systems(){
		$this->load->view('common/workstations_and_point_of_sale_systems');
	}
	function employee_productivity(){
		$this->load->view('common/employee_productivity');
	}
	function security_and_monitoring(){
		$this->load->view('common/security_and_monitoring');
	}
	
	function network_infrastructure(){
		$this->load->view('common/network_infrastructure');
	}
	
	function inbound_call_center_services(){
		$this->load->view('common/inbound_call_center_services');
	}
	function outbound_call_center(){
		$this->load->view('common/outbound_call_center');
	}
	function live_chat(){
		$this->load->view('common/live_chat');
	}
	
	function industries(){
		$this->load->view('common/industries');
	}
	function blog(){
		$this->load->view('common/blog');
	}
	
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
 }




