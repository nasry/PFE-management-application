<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Admin</title>
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
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->

     
       <div id='cssmenu'>
          <center>
          <ul>
            <li><a href="#" onclick="toggle_visibility('list1');"><span>Diplomes</span></a></li>
            <li><a href="#" onclick="toggle_visibility('list2');"><span>Spécialitées</span></a></li>
            <li><a href="#" onclick="toggle_visibility('list3');"><span>Niveaux</span></a></li>
            <li><a href="#" onclick="toggle_visibility('list4');"><span>Modules</span></a></li>
            <li><a href="#" onclick="toggle_visibility('list5');"><span>Matiéres</span></a></li>
            <li><a href="#" onclick="toggle_visibility('list6');"><span>Epreuves</span></a></li>
          </ul>
          </center>
      </div>
     

    <br/> <br/><br/>

    
    <div id="list1" class="alist" style="display:block ;">
            
            <?php 
                include("include/diplome.php");
            ?>    
    </div>
    <div id="list2" class="alist" style="display:block ;">
            <?php 
                include("include/specialite.php");
            ?> 
    </div>
    <div id="list3" class="alist" style="display:block ;">
            <?php 
                include("include/niveaux.php");
            ?>
    </div>
    <div id="list4" class="alist" style="display:block ;">
           <?php 
                include("include/modules.php");
            ?>  
    </div>
    <div id="list5" class="alist" style="display:block ;">
            <?php 
                include("include/matieres.php");
            ?> 
    </div>
    <div id="list6" class="alist" style="display:block ;">
            <?php 
                include("include/epreuves.php");
            ?> 
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