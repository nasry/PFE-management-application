<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Espace société</title>
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
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.html">
                   <img src="assets/img/logo.png" alt="Metro Lab" />
               </a>
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
                             <h4><i class="icon-reorder"></i><b> Déposer votre offre de stage PFE </b></h4>
                         </div>
                         <div class="widget-body" style="background:#E8EDEF;">

                         <?php if (isset($message)) { ?>
							<div class="alert alert-block alert-success fade in">
                              <p>
                                  <h5> Votre demande a été bien enregistrer</h5>
                              </p>
                          </div>
						 <?php } ?>

                         	<?php echo form_open("societe") ?>

                             <div class="portlet-body">
                                 <div class="invoice-date-range span12 form">  
                                 </div>
                                 <div class="space15"></div>
                                 <div class="row-fluid">
                                     <div class="span6 billing-form">
                                         <legend><h4>Informations sur le stage PFE</h4></legend>
                                         <div class="space10"></div>                              
                                             <div class="control-group ">
                                                 <label class="control-label"><b>Sujet</b></label>
                                                 <input type="text"  name="sujetPFE" value="" size="16" placeholder='' class=" span8" >
                                                  <font color="red"> <?php echo form_error('sujetPFE'); ?> </font>
                                             </div>

                                             <div class="control-group">
                                                <label class="control-label"><b>Description</b></label>
                                                  <div class="controls">
                                                    <textarea class="span8 "  name="descriptionPFE" placeholder='plus de détails ...' rows="3"></textarea>
                                                    <font color="red"> <?php echo form_error('descriptionPFE'); ?> </font>
                                                  </div>
                                             </div>
                                             <div class="control-group">
                                                <label class="control-label"><b>Profil recherché</b></label>
                                                  <div class="controls">
                                                    <textarea class="span8" name="profilPFE" placeholder='les compéthences ...' rows="3"></textarea>
                                                    <font color="red"> <?php echo form_error('profilPFE'); ?> </font>
                                                  </div>
                                             </div>
                                             <div class="control-group">
                                               <label class="control-label"><b>Date début</b></label>
                                               <input  type="text" name="datePFE" placeholder="aaaa-mm-jj" size="16" class=" span5 m-ctrl-medium">
                                               <font color="red"> <?php echo form_error('datePFE'); ?> </font>
                                             </div>
                                            <div class="control-group">
                                               <label class="control-label"><b>Durée</b></label>
                                               <input  type="number" name="dureePFE" placeholder="nombre de mois" size="16" class="span5">
                                               <font color="red"> <?php echo form_error('dureePFE'); ?> </font>
                                             </div>
                                     </div>

                                     <div class="span6 billing-form">
                                         <legend><h4>Informations sur la société</h4></legend>
                                         <div class="space10"></div>
                                         
                                             <div class="control-group ">
                                                 <label class="control-label"><b> Nom </b></label>
                                                 <input type="text" name="nomSoc" value="" placeholder='nom de la société' size="16" class=" span8">
                                                 <font color="red"> <?php echo form_error('nomSoc'); ?> </font>
                                             </div>
                                             <div class="control-group">
                                                <label class="control-label"><b>Description</b></label>
                                                  <div class="controls">
                                                    <textarea class="span8" name="descriptionSoc" placeholder='description de la société ..' rows="3"></textarea>
                                                    <font color="red"> <?php echo form_error('descriptionSoc'); ?> </font>
                                                  </div>
                                             </div>
                                             <div class="control-group ">
                                                 <label class="control-label"><b>Téléphone</b></label>
                                                 <input type="text" name="telSoc" value="" size="16" class=" span8">
                                                 <font color="red"> <?php echo form_error('telSoc'); ?> </font>
                                             </div>
                                             <div class="control-group ">
                                                 <label class="control-label"><b>Email</b></label>
                                                 <input type="text"  name="emailSoc" value="" size="16" class=" span8">
                                                 <font color="red"> <?php echo form_error('emailSoc'); ?> </font>
                                             </div>
                                             <div class="control-group ">
                                                 <label class="control-label"><b>Site web</b></label>
                                                 <input type="text" name="siteSoc" value="" size="16" class=" span8">
                                                 <font color="red"> <?php echo form_error('siteSoc'); ?> </font>
                                             </div>
                                             <div class="control-group ">
                                                 <label class="control-label"><b>Adresse</b></label>
                                                 <textarea class="span8" name="adresseSoc" placeholder='' rows="2"></textarea>
                                                 <font color="red"> <?php echo form_error('adresseSoc'); ?> </font>
                                             </div>
                                             <div class="control-group">                                    
                                	</div>
                                         

                                     </div>
                                 </div>
                                 
                                 <div class="row-fluid">
                                     <div class="span12">        
                                         <div class="row-fluid text-center">
                                             <button class="btn  btn-primary" type="submit">Valider</button>
                                         </div>
                                     </div>
                                 </div>
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
   <?php 

      include("layouts/base_Js.php") ;

   ?>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>