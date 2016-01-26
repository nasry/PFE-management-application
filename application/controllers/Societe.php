<?php 

	class Societe extends CI_Controller
	{


		public function index(){

			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

			#validation champs PFE
			$this->form_validation->set_rules('sujetPFE', 'sujet PFE', 'required');
			$this->form_validation->set_rules('descriptionPFE', 'description PFE', 'required');
			$this->form_validation->set_rules('profilPFE', 'profil cherché', 'required');
			$this->form_validation->set_rules('datePFE', 'date debut pfe ', 'required');
			$this->form_validation->set_rules('dureePFE', 'durée PFE ', 'required');

			#validation champs societe
			$this->form_validation->set_rules('nomSoc', 'nom societe', 'required');
			$this->form_validation->set_rules('descriptionSoc', 'description societe', 'required');
			$this->form_validation->set_rules('telSoc', 'numero telphone', 'required');
			$this->form_validation->set_rules('emailSoc', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('siteSoc', 'site web', 'required');
			$this->form_validation->set_rules('adresseSoc', 'adresse', 'required');
		

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('espace_societe');
			}
			else
			{

				$dataSoc = array(
               'nom' 			=>	$this->input->post('nomSoc'),
               'description' 	=> 	$this->input->post('descriptionSoc'),
               'telephone' 		=>  $this->input->post('telSoc'),
               'email' 			=>  $this->input->post('emailSoc'),
               'adresse' 		=>  $this->input->post('adresseSoc'),
               'siteweb' 		=> 	$this->input->post('siteSoc')
            	);
				$this->db->insert('Societe', $dataSoc);

				#get ID de la societe
				$this->db->select_max('num');
				$query = $this->db->get('Societe');

				$dataPFE = array(
               'sujet' 			=> $this->input->post('sujetPFE'),
               'description' 	=> $this->input->post('descriptionPFE'),
               'profil' 		=> $this->input->post('profilPFE'),
               'dateDeb'		=> $this->input->post('datePFE'),
               'duree' 			=> $this->input->post('dureePFE'),
               'num_soc' 		=> $query->row()->num
            	);
				$this->db->insert('Pfe_deposes', $dataPFE);  

				//Transfering data to Model
				$data = array();
				$data['message'] = 'Votre demande est bien enregistrer';
				$this->load->view('espace_societe',$data);
			}
			 

		}


		

	}

?>