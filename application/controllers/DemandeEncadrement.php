<?php 



			/**
			* 
			*/
			class DemandeEncadrement extends CI_Controller
			{
				public function index(){


					$this->accueil() ; 

				}


				public function accueil(){


					$this->load->view('demandes_encadrement') ;


				}

			}

?>