<?php 
		


			/**
			* 
			*/
			class Admin extends CI_Controller
			{
				public function index(){


					$this->accueil() ; 

				}


				public function accueil(){


					$this->load->view('AdminFinal') ;


				}

			}

?>