<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Choisir un binome</title>
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
                            <h4><i class="icon-reorder"></i> Choisir un binome </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                          </div>
                            
                         <div class="widget-body" >
                             <div>
                              <div class="clearfix">
                                 <div id="myModal_1" class="reveal-modal">  
                                   <?php include("ajouter_diplome.php") ;  ?>
                                 </div>  
                              </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample_1">
                                     <thead>
                                     <tr bgcolor="#86BCEB"  style="color:#FFFFFF" >
                                         <th style="width: 75px ;" ></th>
                                         <th>Nom</th>
                                         <th>Prenom</th>
                                         <th style="width: 118px ;"></th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                       <tr class="">
                                          <td> <img src="<?php echo site_url('assets/img/avatar1.jpg'); ?>"/> </td>
                                          <td>Nasri</td>
                                          <td>Achref</td>
                                          <td>
                                            <button class="btn btn-primary">Ajouter <i class="icon-plus"></i></button>
                                          </td>
                                      </tr>
                                      <tr class="">
                                           <td> <img src="<?php echo site_url('assets/img/avatar2.jpg'); ?>"/> </td>
                                           <td>Hermessi</td>
                                           <td>Marwen</td>
                                           <td>
                                              <button class="btn btn-primary">Ajouter <i class="icon-plus"></i></button>
                                           </td>
                                      </tr> 
                                     </tbody>
                                 </table>
                                 <div class="clearfix">
                                  <div id="myModal_11" class="reveal-modal">  
                                   <?php include("profil_hermessi.php") ;  ?>
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
   <?php 
      include("layouts/base_Js.php") ;
   ?>
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