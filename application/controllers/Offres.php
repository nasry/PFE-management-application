<?php 



			/**
			* 
			*/
			class Offres extends CI_Controller
			{
				public function index()
				{

					$this->db->select('p.* , s.nom , s.telephone, s.email , s.adresse , s.siteweb');
					$this->db->from('Pfe_deposes as p , Societe as s');
					$this->db->where('validee',0);
					$this->db->where('p.num_soc = s.num');
					
					$query = $this->db->get();
					$data 	= array();
					$data['results']	= $query->result();

					$this->load->view('offres_PFE',$data) ;

				}

				public function validePFE()
				{	
					$data 	= array();
					$data 	= $this->input->post('PFEvalide');
					
					if(! empty($data))
					{
						foreach ($data as $value)
						{
							$this->db->where('num', $value);
							$this->db->update('Pfe_deposes',array('validee' => 1 )); 
						}
						$msg = ' PFE bien validé ';
					}
					else
					{
						$msg= ' Vous avez selectionné aucun PFE  ';
					}
					
					$this->afficher($msg);
				}

				public function afficher($msg)
				{

					$this->db->select('p.* , s.nom');
					$this->db->from('Pfe_deposes as p , Societe as s');
					$this->db->where('validee',0);
					$this->db->where('p.num_soc = s.num');
					
					$query = $this->db->get();
					$data 	= array();
					$data['results']	= $query->result();
					$data['message']	= $msg;
					$this->load->view('offres_PFE',$data) ;

				}




			}

?>