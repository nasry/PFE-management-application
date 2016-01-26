<?php

class Form extends CI_Controller {

	function index()
	{
		# on peut les charger automatiquement dans le fichier autoload dans le dossier config 
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Myform');
		}
		else
		{
			$this->load->view('Formsucces');
		}

	}

		public function username_check($str)
	{
		if ($str == 'Ashref')
		{
			$this->form_validation->set_message('username_check', 'The %s field can not be the word "Ashref" ');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
?>