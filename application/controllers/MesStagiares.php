<?php 



			/**
			* 
			*/
	class MesStagiares extends CI_Controller
	{
		public function index()
		{
			$numSess = $this->session->userdata('enseignant')['num'] ;
         	
         	$this->db->select('et.*');
         	$this->db->from('Etudiant as et , Encadrement as en');
			$this->db->where('( en.nume = '.$numSess.' AND en.etat = 1 ) AND (en.numb1 = et.numero_inscri OR en.numb2 = et.numero_inscri)' );
			$query 			 = $this->db->get();
			$rows   		 = $query->result();
			$data   		 = array();
			$data['results'] = $rows ;
			
			$this->load->view('mes_stagiaires',$data) ; 

		}



	}

?>