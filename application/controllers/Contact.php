<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data =$formData=array();

		//if contact form is submitted
		if($this->input->post('contactSubmit')){
			//Get form data
			$formData = $this->input->post();

			//Form field validation forms
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('subject','Subject','required');
			$this->form_validation->set_rules('message','Message','required');

			//Validate submitted form data
			if($this->form_validation->run()==true){
				//Define email data
				$mailData = array(
					'name'=>$formData['name'],
					'email' => $formData['email'],
					'subject' => $formData['subject'],
					'message' => $formData['message']
				);
				//Send email to site admin
				$send = $this->sendEmail($mailData);
				//Check email sending status
				if($send){
					//Unset form data
					$formData = array();
					$data['status'] = array(
						'type'=>'success',
						'msg'=>'Your Contact has been submitted successfully'
					);
				}else{
					$data['status'] = array(
						'type'=>'error',
						'msg'=>'Something happened try again later'
					);
				}
			}
		}

		//Pass POST data to view
		$data['postData'] = $formData;
		//Pass the data to view
		$this->load->view('includes/header');
		$this->load->view('contact',$data);
		$this->load->view('includes/footer');
	}

	private function sendEmail($mailData){
		//load the email library
		$this->load->library('email');

		//Mail config
		$to='pramitmajumdar23555@gmail.com';
		$from='admin@gmail.com';
		$fromName='Softland';
		$mailSubject = 'Contact Request Submiited by '.$mailData['name'];

		//Mail content
		$mailContent='
			<h2>Contact Request Submitted</h2>
			<p><b> Name: </b>'.$mailData['name'].'</p>
			<p><b> Email: </b>'.$mailData['email'].'</p>
			<p><b> Subject: </b>'.$mailData['subject'].'</p>
			<p><b> Message: </b>'.$mailData['message'].'</p>
		'; 

		$config['mailType'] ='html';
		$this->email->initialize($config);
		$this->email->to($to);
		$this->email->from($from,$fromName);
		$this->email->subject($mailSubject);
		$this->email->message($mailContent);

		//send email and return status
		return $this->email->send()?true:false;
	}
}
