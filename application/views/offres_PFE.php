<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<?php 
    if(empty($this->session->userdata('admin')))
    {
      redirect('login', '');
    }
?>
<head>
   <meta charset="utf-8" />
   <title>Liste des offres de PFE</title>
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
                  echo "<h5>".$this->session->userdata('admin')['pseudo']."</h5>" ;
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
                <li><a href="<?php echo site_url('offres'); ?>" ><span>Offres encours</span></a></li>
                <li><a href="<?php echo site_url('Pfe_validees'); ?>" ><span>Offres validées</span></a></li>
              </ul>
              </center>
          </div>

            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
            
               </div>
            </div>
            <!-- END PAGE HEADER-->


            <!-- BEGIN PAGE CONTENT-->
                <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN BLANK PAGE PORTLET-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><b>Offres des stages PFE</b> </h4>
                         </div>
                         <div class="widget-body">

                            <?php if (isset($message)) { ?>
                            <div class="alert alert-block alert-success fade in">
                              <p>
                                  <h5> <?php echo $message ; ?> </h5>
                              </p>
                            </div>
                          <?php } ?>
                                                         

                             <div class=" tab-pane" id="portlet_tab2">
                                           
                                            <div class="space20"></div>
                                            <!-- BEGIN FILE SEARCH-->
                                            <?php 
                                                if(!empty($results))
                                                { 
                                                ?>
                                            <center>
                                            <table class="table table-hover file-search">
                                                <thead>
                                                <tr>
                                                    
                                                    <th>Plus de Détails</th>
                                                    <th>Sujet & Société</th>
                                                    <th>Date début</th>
                                                    <th>Durée</th>
                                                    <th>Valider</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                 echo form_open("offres/validePFE"); 
                                                 $i=0;

                                                  foreach ($results as $row) {
                                                    $i++;

                                                  ?>
                                                    <tr>
                                                        <td>
                                                            <a href="#" data-reveal-id="<?php echo $i  ?>" data-animation="fade">
                                                                <button class="btn btn-primary" type="button"><i class="icon-search" ></i></button>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <img src="<?php echo site_url('assets/img/avat11.jpg'); ?>" alt="">
                                                            <strong><?php echo $row->nom  ?></strong>
                                                            <?php echo $row->sujet  ?>
                                                        </td>
                                                        <td><?php echo $row->dateDeb  ?>  </td>
                                                        <td><?php echo $row->duree  ?></td>
                                                        <td><input type="checkbox" name="PFEvalide[]" value="<?php echo $row->num  ?>" /></td>
                                                    </tr>

                                                    <div id="<?php echo $i  ?>" class="reveal-modal">  
                                                       <div class="widget blue">
                                                          <div class="widget-title">
                                                              <h4><b><?php echo $row->nom  ?></b></h4>
                                                              <span class="tools">
                                                                  <a href="javascript:;" class="close-reveal-modal" ><i class="icon-remove-sign" ></i></a>
                                                              </span>            
                                                          </div>
                                                            <div class="widget-body">
                                                            <dt><img alt="" src="<?php echo site_url('assets/img/avat11.jpg'); ?>" ></dt>
                                                                  <dd></dd>
                                                                <dl class="dl-horizontal">
                                                                  
                                                                    <dt>Sujet</dt>
                                                                    <dd><?php echo $row->sujet  ?></dd></br>
                                                                 
                                                                    <dt>Description</dt>
                                                                     <dd><?php echo $row->description  ?></dd></br>
                                                                   
                                                                    <dt>Profil recherché</dt>
                                                                      <dd><?php echo $row->profil  ?></dd><br/>
                                                                      <dt>Contact</dt> 
                                                                                  <dd>Email : <a href="mailto:#"><?php echo $row->email  ?></a></dd>
                                                                                  <dd>Site web :<a href='<?php echo $row->siteweb  ?>'> <?php echo $row->siteweb  ?></a></dd>
                                                                                  <dd>Telephone : <?php echo $row->telephone  ?></dd>
                                                                                  <dd>Adresse : <?php echo $row->adresse  ?></dd>

                                                                </dl>
                                                            </div>
                                                          </div>
                                                        </div>

                                                  <?php
                                                   }
                                                ?>
                                                <tr><td></td><td></td><td></td><td></td><td></td></tr>
                                                </tbody>
                                            </table>
                                            </center>
                                            <?php 
                                                }
                                                else
                                                {
                                                ?>

                                                  <div class="alert alert-block alert-error fade in">
                                                  <p>
                                                    <h5>Il n'y a aucune offre de stage</h5>
                                                  </p>
                                                 </div>
                                                <?php
                                                }
                                                ?>
                                            <!-- END FILE SEARCH-->
                                            <div class="space20"></div>
                                            <center><button class="btn  btn-primary" type="submit">Valider</button></center>
                                        </div>
                         </div>
                     </div>
                     <!-- END BLANK PAGE PORTLET-->
                 </div>


             </div>
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