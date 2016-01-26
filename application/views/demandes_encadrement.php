<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Demandes d'encadrement</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />

  
   	<?php 

      include("layouts/base_CSS.php") ;

   ?>



    
   

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top" onload="tables_visibility();">
  
  <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.html">
                   <img src="img/logo.png" alt="Metro Lab" />
               </a>
               <!-- END LOGO -->   
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
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
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->

     
     

    <br/> <br/><br/>
    
    
        <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget widget-tabs blue">
                          <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Demandes d'encadrement </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                          </div>
                            
                         <div class="widget-body" >
                             <div>
                              <div class="clearfix">
                               
                              </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                     <thead>
                                     <tr bgcolor="#86BCEB"  style="color:#FFFFFF" >
                                         <th style="width: 350px ;">Sujet</th>
                                         <th>Société</th>
                                         <th>Date début</th>
                                         <th>Durée</th>
                                         <th style="width: 80px ;">Détails</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                       <tr class="">
                                          <td>
                                              developpement d'une application web 
                                          </td>
                                          <td>Vermeg</td>
                                          <td>01-03-2015</td>
                                          <td>
                                              3 mois
                                          </td>
                                          <td>
                                            <a href="#" data-reveal-id="myModal_11" data-animation="fade">
                                              <button class="btn btn-primary"><i class="icon-search"></i></button>
                                            </a>
                                          </td>
                                      </tr>
                                     </tbody>
                                 </table>
                                 <div class="clearfix">
                                  <div id="myModal_11" class="reveal-modal">  
                                   <?php include("include/details_stage.php") ;  ?>
                                  </div>  
                              </div>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>
            <!-- END EDITABLE TABLE widget-->
            </div>
          </div>
        
    
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2015 PFA , FST.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.2.min.js"></script>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
	
    
  <!--script for this page-->
   <script src="js/form-component.js"></script>
  <!-- END JAVASCRIPTS -->

   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="js/editable-table.js"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
		   var divs = document.getElementsByClassName('widget blue');
		   for (var i = 1, c = divs.length ; i <= c ; i++) {
			   var currentTable = "#editable-sample_"+i ;
			   var currentTableEdit = "#editable-sample_new_"+i;
			   EditableTable.init(currentTable,currentTableEdit);
		}
       });
   </script>


  <script type="text/javascript">
      function toggle_visibility(id)
      {
          var list = document.getElementsByClassName("alist");
          for (var i = 0; i < list.length; i++)
          {
                list[i].style.display = 'none';
          }
          var e = document.getElementById(id);
          if(e.style.display == 'block')
          {
              e.style.display = 'none';
          }
          else
          {
              e.style.display = 'block';
          }
      }

</script>

<script type="text/javascript">
  function tables_visibility(){
    for (var i = 2; i <= 6 ;i++){
      var table = 'list'+i ;
      var e = document.getElementById(table);
          if(e.style.display == 'block')
          {
              e.style.display = 'none';
          }
          else
          {
              e.style.display = 'block';
          }
    }
  }
</script>

</body>
<!-- END BODY -->
</html>