<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<?php 
    if(empty($this->session->userdata('admin')) and empty($this->session->userdata('etudiant')))
    {
      redirect('login', '');
    }
?>
<head>
   <meta charset="utf-8" />
   <title>Liste des PFE déposés </title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />


   <?php 

      include("layouts/base_CSS.php") ;

   ?>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
            <div class="container-fluid pull-right">
               <!-- BEGIN LOGO -->
                 <?php 
                 if(!empty($this->session->userdata('admin')))
                 {
                  echo "<h5>".$this->session->userdata('admin')['pseudo']."</h5>" ;
                 }
                 elseif(!empty($this->session->userdata('etudiant')))
                   echo "<h5>".$this->session->userdata('etudiant')['pseudo']."</h5>" ;
               ?>
               <a href="<?php echo site_url('login/logout'); ?>"> <button class="btn " type="button">Deconnexion</button> </a>
               <!-- END LOGO -->   
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->



   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">

              <div id='cssmenu'>
                <center>
                <ul>
                <?php
                if (!empty($this->session->userdata('admin')))
                {
                ?>
                  <li><a href="<?php echo site_url('offres'); ?>" ><span>Offres encours</span></a></li>
                <?php
                }elseif(!empty($this->session->userdata('etudiant')))
                {
                ?>
                <li><a href="<?php echo site_url('etudiant'); ?>" ><span>Espace Etudiant</span></a></li>
                <?php
                }
                ?>
                  <li><a href="<?php echo site_url('Pfe_validees'); ?>" ><span>Offres validées</span></a></li>
                </ul>
                </center>
              </div>
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- on aura le menu ici -->
               </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
                
                     <!-- BEGIN BLANK PAGE PORTLET-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4></i> <b>Offres de stages PFE</b> </h4> 
                         </div>
                         <div class="widget-body">
                             <div class="tab-pane" id="portlet_tab4">
                                            
                                            <div class="space20"></div>
                                            <!--BEGIN PRODUCT SEARCH-->

                                          <?php
                                            if(! empty ($results) )
                                            {
                                              foreach ($results as $row)
                                              {
                                              ?>
                                              <div class="row-fluid product-search" >
                                                <div style="float:left;" ><img alt="" src="<?php echo site_url('assets/img/avat11.jpg'); ?>" ></div>  
                                                  <div class="span10 product-text">
                                                    
                                                    <div class="portfolio-text-info">
                                                        <h4><?php echo $row->nom  ?></h4>

                                                        <dl class="dl-horizontal">
                                                          
                                                          <dt>Sujet</dt>
                                                          <dd><i> <?php echo $row->sujet  ?></i> </dd><br/>
                                                          
                                                          <dt>Descritpion</dt>
                                                          <dd><?php echo $row->description  ?></dd>
                                                          <br/>
                                                          
                                                          <dt>Profil recherché</dt>
                                                          <dd><?php echo $row->profil ?> </dd>
                                                          <br/>

                                                          <dt>Contact</dt>
                                                          <dd>Email : <a href="mailto:#"><?php echo $row->email  ?></a></dd>
                                                          <dd>Site web :<a href='<?php echo $row->siteweb  ?>'> <?php echo $row->siteweb  ?></a></dd>
                                                          <dd>Telephone : <?php echo $row->telephone  ?></dd>
                                                          <dd>Adresse : <?php echo $row->adresse  ?></dd>
                                                        </dl> 
                                                       
                                                        <?php 
                                                        if (!empty($this->session->userdata('admin')))
                                                        {
                                                        echo form_open("Pfe_validees/affecter") ?> 
                                                        <font color="red"> <?php echo form_error('numb1'); ?> </font>
                                                        <b>Affectez à :</b> <input  type="number" name="numb1" placeholder="num insc binome 1" size="4" class=" span2 m-ctrl-meduim" requiered/> 
                                                                    <input  type="number" name="numb2" placeholder="num insc binome 2" size="4" class=" span2 m-ctrl-medium"/>
                                                                    <input  type="hidden" name="numpfe" value="<?php echo $row->num  ?>" />
                                                                    
                                                                    <button class="btn  btn-primary " type="submit">Affecter</button>
                                                        <?php echo form_close(''); 
                                                        }
                                                        ?>
                                                      </div>
                                                    </div>       
                                                  </div>
                                                  <?php 
                                                  }
                                                }
                                                else
                                                {
                                                  ?>
                                                  <div class="alert alert-block alert-error fade in">
                                                  <p>
                                                    <h5>Il n'y a aucune offre de stage validée jusqu'a maintenant</h5>
                                                  </p>
                                                 </div>
                                                  <?php
                                                }
                                                  ?>
                                           
                                          
                                            
                                           
                                            <!--END PRODUCT SEARCH-->
                                            <div class="space20"></div>

                                            

                                        </div>
                         </div>
                     </div>
                     <!-- END BLANK PAGE PORTLET-->
               
            <!-- END PAGE CONTENT-->
         </div>
         
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="assets/js/jquery-1.8.3.min.js"></script>
   <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <!--common script for all pages-->
   <script src="assets/js/common-scripts.js"></script>
   <script src="assets/js/index.js"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>