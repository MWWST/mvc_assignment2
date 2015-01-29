<?php

class Surveys extends CI_Controller {

	public function index()
	
	{
		$this->load->view('survey');
	}

	public function process_form() {

		$allpost = $this->input->post();
		// var_dump($allpost);
		$this->session->set_userdata($allpost);
		redirect('/result');
	}

	public function result(){
		$ourdata = ($this->session->all_userdata());
	$this->load->view('success', $ourdata);
	// var_dump($ourdata);
	if($this->session->userdata('counter'))
		{
			$counter =$this->session->userdata('counter');
			$this->session->set_userdata('counter',$counter+1);

		}
		else {
			$this->session->set_userdata('counter',1);
		}

		$countdata = ($this->session->userdata('counter'));

	}

	public function goback(){
		
		redirect('default_controller');
		// var_dump($countdata);

	}

}




?>