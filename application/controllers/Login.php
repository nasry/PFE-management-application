<?php

class Login extends CI_Controller {

	function index()
	{
		$this->load->view('login');
	}

	public function verfier()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pseudo', 'pseudo utilisateur', 'required');
		$this->form_validation->set_rules('motDePasse', 'mot de passe', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$pseudo 	= $this->input->post('pseudo');
			$motDePasse = $this->input->post('motDePasse');
			
			
			$this->db->select('*');
			$this->db->from('Administateur');
			$this->db->where('pseudo',$pseudo);
			$query = $this->db->get();
			$row = $query->row_array();
			
			if(! empty($row)) //Si administrateur 
			{
				if($row['motDePasse']== $motDePasse)
				{
					$this->session->set_userdata('admin',$row);
					redirect('offres', '');
				}
				else
				{
					$data['message'] = ' Informations incorrectes ';
   					$this->load->view('login.php',$data);
				}
			}
			else
			{
				$this->db->select('*');
				$this->db->from('Etudiant');
				$this->db->where('pseudo',$pseudo);
				$query = $this->db->get();
				$row = $query->row_array();
				if(!empty($row)) //Si Etudiant
				{
					if($row['motDePasse']== $motDePasse)
					{
						$this->session->set_userdata('etudiant',$row);
						redirect('etudiant', '');
					}
					else
					{
						$data['message'] = ' Informations incorrectes ';
   						$this->load->view('login.php',$data);
					}

				}
				else
				{
					$this->db->select('*');
					$this->db->from('Enseignant');
					$this->db->where('pseudo',$pseudo);
					$query = $this->db->get();
					$row = $query->row_array();
					if(!empty($row)) //Si Enseignant
					{
						if($row['motDePasse']== $motDePasse)
						{
							$this->session->set_userdata('enseignant',$row);
							redirect('mesDemandesEnc', '');

						}
						else
						{
							$data['message'] = ' Informations incorrectes ';
   							$this->load->view('login.php',$data);
						}
					}
					else
					{
							$data['message'] = ' Informations incorrectes ';
   							$this->load->view('login.php',$data);
					}

				}
			}

		}
	}

	public function logout()	
	{
		$this->session->sess_destroy();
		redirect('login', '');
	}

		
}
?>