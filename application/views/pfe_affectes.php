<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Liste des PFE affectés</title>
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
                   <!-- on aura le menu ici -->
               </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
                <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN BLANK PAGE PORTLET-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><b>PFE affectés</b> </h4>
                         </div>
                         <div class="widget-body">


                             

                             <div class="tab-pane" id="portlet_tab2">
                                           
                                            <div class="space20"></div>
                                            <!-- BEGIN FILE SEARCH-->
                                            <table class="table table-hover file-search">
                                                <thead>
                                                <tr>
                                                    <th>Valider</th>
                                                    <th>Sujet & Société</th>
                                                    <th>Date début</th>
                                                    <th>Date fin</th>
                                                    <th>Demande d'encadrement</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="radio" name="optionsRadios1" value="option1" /></td>
                                                    <td>
                                                        <img src="assets/img/product11.jpg" alt="">
                                                        <strong>Vermeg</strong>
                                                        developpement d'une application web
                                                    </td>
                                                    <td>01.01.2012  </td>
                                                    <td>12.05.2013</td>
                                                    <td>choisir une liste d'encadrents ?</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="optionsRadios1" value="option2" /></td>
                                                    <td>
                                                        <img src="assets/img/product22.jpg" alt="">
                                                        <strong>Telnet</strong>
                                                        developpement d'une application web
                                                    </td>
                                                    <td>01.01.2012  </td>
                                                    <td>12.05.2013</td>
                                                    <td>choisir une liste d'encadrents ?</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="optionsRadios1" value="option3" /></td>
                                                    <td>
                                                        <img src="assets/img/product33.jpg" alt="">
                                                        <strong>Rosafi Holding</strong>
                                                        developpement d'une application web
                                                    </td>
                                                    <td>01.01.2012  </td>
                                                    <td>12.05.2013</td>
                                                    <td>choisir une liste d'encadrents ?</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="optionsRadios1" value="option4" /></td>
                                                    <td>
                                                        <img src="assets/img/product11.jpg" alt="">
                                                        <strong>Vermeg</strong>
                                                        developpement d'une application web
                                                    </td>
                                                    <td>01.01.2012  </td>
                                                    <td>12.05.2013</td>
                                                    <td>choisir une liste d'encadrents ?</td>
                                                </tr>
                                                <tr><td></td><td></td><td></td><td></td><td></td></tr>
                                                </tbody>
                                            </table>
                                            <!-- END FILE SEARCH-->
                                            <div class="space20"></div>
                                            <center><button class="btn  btn-primary" type="button">Valider</button></center>
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