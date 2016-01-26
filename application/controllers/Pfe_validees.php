<?php 



			/**
			* 
			*/
			class Pfe_validees extends CI_Controller
			{
				public function index()
				{

					$this->db->select('p.* , s.nom,s.telephone, s.email , s.adresse , s.siteweb');
					$this->db->from('Pfe_deposes as p , Societe as s');
					$this->db->where('validee',1);
					$this->db->where('affectee',0);
					$this->db->where('p.num_soc = s.num');
					
					$query = $this->db->get();
					$data 	= array();
					$data['results']	= $query->result();
					$this->load->view('pfe_validees',$data) ;
				}

				public function affecter()
				{
					$this->load->library('form_validation');
					$this->form_validation->set_rules('numb1', 'numero binome 1', 'required');

					if ($this->form_validation->run() == FALSE)
					{
						$this->index();
					}
					else
					{
						$data = array(
               			'numb1'   => $this->input->post('numb1'),
               			'numb2'   => $this->input->post('numb2') == null ? 0 : $this->input->post('numb2'),
               			'numpfe'  => $this->input->post('numpfe')
            			);
						$this->db->insert('Binome', $data); 

						$this->db->where('num', $this->input->post('numpfe'));
						$this->db->update('Pfe_deposes',array('affectee' => 1 )); 

						$this->index();
					}
				}

			}

?>