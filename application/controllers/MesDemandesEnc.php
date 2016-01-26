<?php 



			/**
			* 
			*/
			class MesDemandesEnc extends CI_Controller
			{
				public function index()
				{
					$numSess = $this->session->userdata('enseignant')['num'] ;
                 	$this->db->select('et.*');
                 	$this->db->from('Etudiant as et , Encadrement as en');
					$this->db->where('( en.nume = '.$numSess.' AND en.etat = 0 ) AND (en.numb1 = et.numero_inscri )' );
					$query 			 = $this->db->get();
					$rows   		 = $query->result();
					$data   		 = array();
					$data['results'] = $rows ;
					
					$this->load->view('mes_demandes_encadrement',$data) ; 

				}

				public function accepterEtudiant()
				{	
					$numSess = $this->session->userdata('enseignant')['num'] ;
					$data 	= array();
					$data 	= $this->input->post('etudiantAccepter');
					
					if(! empty($data))
					{
						foreach ($data as $value)
						{
							$this->db->where('numb1', $value);
							$this->db->update('Encadrement',array('etat' => 1 )); 
						}
						$msg = ' Etudiant accepté ';
					}
					else
					{
						$msg= ' Vous avez selectionné aucun etudiant  ';
					}
					
					$this->afficher($msg);
				}

				public function afficher($msg)
				{
					$numSess = $this->session->userdata('enseignant')['num'] ;
					$this->db->select('et.*');
                 	$this->db->from('Etudiant as et , Encadrement as en');
					$this->db->where('( en.nume = '.$numSess.' AND en.etat = 0 ) AND (en.numb1 = et.numero_inscri )' );
					$query 			 = $this->db->get();
					$rows   		 = $query->result();
					$data   		 = array();
					$data['results'] = $rows ;
					$data['message']	= $msg;
					$this->load->view('mes_demandes_encadrement',$data) ;

				}



			}

?>