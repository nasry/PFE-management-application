<?php 

			
				

			/**
			* 
			*/
			class Etudiant extends CI_Controller
			{

				public function index()
				{

					$numSess = $this->session->userdata('etudiant')['numero_inscri'] ;
					$this->db->select('b.* , p.* , s.nom');
					$this->db->from('Binome as b , Pfe_deposes as p, Societe as s');
					$this->db->where('b.numpfe = p.num');
					$this->db->where('p.num_soc = s.num');
					$this->db->where('b.numb1 = '.$numSess.' OR b.numb2 ='.$numSess);

					$query = $this->db->get();
					$row = $query->row_array();
					
					if(empty($row)) // l administrateur n'as pas encore enregistreer son demande
					{
						$msg = array();
						$msg['message1']= "Vous n'êtes pas encore affecté à aucun stage  l'administrateur n'a pas traité encore votre demande ";
						$this->load->view('espace_etudiant',$msg) ;	
					}
					else //  l'administrateur a enregistrer son demande
					{
						// on verifi s'il a effectuer un demande d'encadrement ou non

							$this->db->select('*');
							$this->db->from('Encadrement');
							$this->db->where('numb1 = 1024563 OR numb2 = 1024563 ');
							$query = $this->db->get();
							$enc = $query->row_array();
							if(empty($enc)) // l'etudiant n'a pas encore fait le demande d'encadrement
							{
								$this->db->select('*');
								$this->db->from('Enseignant');
								$query 				= $this->db->get();
								$data 				= array();
								$data['results']	= $query->result();
								
								$data['message2']	= "Vous êtes affecté à la société <b>".$row['nom']."</b> pour le sujet <b>".$row['sujet']."</b> vous devez choisir un encadrant de la liste ci-dessous :";
	                            $data["info"] 		= $row ;

	                            if($row['numb1'] <> 0 and $row['numb2'] == $numSess)
	                            {
	                             	$binomeID = $row['numb1'] ;
	                             	$this->db->select('*');
	                             	$this->db->from('Etudiant');
									$this->db->where('numero_inscri = '.$binomeID );
									$query 	= $this->db->get();
									$bin 	= $query->row_array();
									$data['binome'] = " Votre binome est ".$bin['nom']." ".$bin['prenom']  ;
	                            }
	                            elseif ($row['numb2'] <> 0 and $row['numb1'] == $numSess)
	                            {
	                             	$binomeID = $row['numb2'] ;
	                             	$this->db->select('*');
	                             	$this->db->from('Etudiant');
									$this->db->where('numero_inscri = '.$binomeID );
									$query 	= $this->db->get();
									$bin 	= $query->row_array();
									$data['binome'] = " Votre binome est ".$bin['nom']." ".$bin['prenom']  ;
	                            }
                            	$this->load->view('espace_etudiant',$data) ;
                            }
                            else //l'etudiant a fait son demande d'encadrement
                            {
                            	//information sur l'encadrent que l'etudiant lui envoyer une demande
                            	$this->db->select('*');
								$this->db->from('Enseignant');
								$this->db->where('num = '.$enc['nume'] );
								$query 				= $this->db->get();
								$infoEncad 			= $query->row_array();
								
								$encad  			= array();
								$encad['enc']		= $enc ;
								$encad['resul']		= $infoEncad ;
								$encad['message']	= "Vous êtes affecté à la société <b>".$row['nom']."</b> pour le sujet <b>".$row['sujet'];

								// on verifier si l'encadrant a accepter la demande de l'etudiant	
								if( $enc['etat'] == 0 ) // encadrent n'a pas encore accepter la demande
								{
									$encad['accepte'] = 0 ;
									$this->load->view('espace_etudiant',$encad) ;
								}
								elseif( $enc['etat'] == 1 ) // l'encadrant a  accepter la demande
								{
										$encad['accepte'] = 1 ;
										$this->load->view('espace_etudiant',$encad) ;
								}	
								
                            }
						
					}
					
				}
				public function demandeEncadrement()
				{

					$dataEnc = array(
			               'numb1' 		=>	$this->input->post('numb1'),
			               'numb2' 		=> 	$this->input->post('numb2'),
			               'nume' 		=>  $this->input->post('nume'),
	            	);
	            	if($dataEnc['numb1'] <> null and $dataEnc['numb2'] <> null and $dataEnc['nume'] <> null)
					$this->db->insert('Encadrement', $dataEnc);
					$this->index();
				}

			}

?>