<?php 



			/**
			* 
			*/
			class Pfe_aff extends CI_Controller
			{
				public function index(){


					$this->accueil() ; 

				}


				public function accueil(){


					$this->load->view('pfe_affectes') ;


				}

			}

?>