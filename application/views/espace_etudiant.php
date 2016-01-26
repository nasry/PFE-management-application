<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php 
    if( empty($this->session->userdata('etudiant')))
    {
      redirect('login', '');
    }
?>
<head>
   <meta charset="utf-8" />
   <title>Espace Etudiant</title>
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
            <div class="container-fluid pull-right">
               <!-- BEGIN LOGO -->
                 <?php 
                  echo "<h5>".$this->session->userdata('etudiant')['pseudo']."</h5>" ;
               ?>
               <a href="<?php echo site_url('login/logout'); ?>"> <button class="btn " type="button">Deconnexion</button> </a>
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

             <div id='cssmenu'>
                <center>
                <ul>
                  <li><a href="<?php echo site_url('etudiant'); ?>" ><span>Espace Etudiant</span></a></li>
                  <li><a href="<?php echo site_url('Pfe_validees'); ?>" ><span>Offres validées</span></a></li>
                </ul>
                </center>
              </div>
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->

     
     

    <br/> <br/><br/>
    
                     <!-- BEGIN EDITABLE TABLE widget-->
                     
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget widget-tabs blue">
                          <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Espace Etudiants </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                          </div>
                            
                         <div class="widget-body" >

                             

                         <?php if (isset($message1))
                         {
                         ?>
                            <div class="alert alert-block alert-error fade in">
                              <p>
                                  <h5><?php echo $message1 ?></h5>
                              </p>
                            </div>
                          <?php
                          }
                          ?>

                           <?php
                                if( isset($binome) )
                                {
                                ?>
                                  <div class="alert alert-block alert-succes fade in">
                                    <p>
                                      <h5><?php echo $binome ?></h5>
                                    </p>
                                </div>
                                <?php
                                }
                                
                                ?>
                                


                                <?php
                                if( isset($enc) )
                                {
                                ?>
                                      <?php  if ($accepte == 0)
                                        {
                                        ?>
                                              <div class="alert alert-block alert-success fade in">
                                                <p>
                                                  <h5><?php echo $message  ;?></h5>
                                                </p>
                                              </div>
                                              <div class="alert alert-block alert-success fade in">
                                                  <p>
                                                    <h5> Votre demande d'encadrement est bien envoyer à <?php echo $resul['nom']." ".$resul['prenom'] ; ?></h5>
                                                  </p>
                                              </div>
                                        <?php 
                                          }
                                          else
                                          {
                                         ?>
                                                <div class="alert alert-block alert-success fade in">
                                                <p>
                                                  <h5><?php echo $message." "   ;?></h5>
                                                </p>
                                              </div>
                                              </br> <h5>Votre encadrant :</h5>
                                               <div class="space15"></div>
                                             <table class="table table-striped table-hover table-bordered" >
                                                 <thead>
                                                 <tr bgcolor="#86BCEB"  style="color:#FFFFFF" >
                                                   <th style="width: 75px ;" ></th>
                                                     <th>Nom</th>
                                                     <th>Prenom</th>
                                                     <th style="width: 50px ;"></th>
                                                 </tr>
                                                 </thead>
                                                 <tbody>
                                                   <tr class="">
                                                      <td> <img src="<?php echo site_url('assets/img/avat12.jpg'); ?>"/> </td>
                                                      <td><?php echo $resul['nom']; ?></td>
                                                      <td><?php echo $resul['prenom'] ; ?></td>
                                                      <td>
                                                        
                                                         <a href="<?php echo site_url('progress'); ?>">
                                                            <button class=" btn popovers btn btn-primary" data-trigger="hover" data-placement="bottom" data-content="contacter">
                                                                <i class="icon-comments-alt"></i>
                                                            </button>
                                                          </a>
                                                      </td>
                                                  </tr>
                                                 
                                                 </tbody>
                                             </table>

                                         <?php
                                          }
                                         ?>
                                <?php
                                }
                                ?>

                                 

                         <?php if (isset($message2))
                         {
                         ?>
                            <div class="alert alert-block alert-success fade in">
                              <p>
                                  <h5><?php echo $message2 ?></h5>
                              </p>
                            </div>



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
                                     <?php
                                        $i=0;
                                        foreach ($results as $row)
                                        {
                                          $i++;
                                        ?>
                                             <tr class="">
                                                <td> <img src="<?php echo site_url('assets/img/avat12.jpg'); ?>"/> </td>
                                                <td><?php echo $row->nom  ?></td>
                                                <td><?php echo $row->prenom  ?></td>
                                                <td>
                                                 
                                                   <?php echo form_open("etudiant/demandeEncadrement"); ?>
                                                      <input type="hidden" name="numb1" value="<?php echo $info['numb1']  ?>">
                                                      <input type="hidden" name="numb2" value="<?php echo $info['numb2']  ?>"> 
                                                      <input type="hidden" name="nume" value="<?php echo $row->num  ?>"> 
                                                      <button   type="submit" class=" btn popovers btn btn-primary" data-trigger="hover" data-placement="bottom" data-content="Demande d'encadrement">
                                                          <i class="icon-envelope "></i>
                                                      </button>
                                                      <a href="#" data-reveal-id="<?php echo $i  ?>" data-animation="fade">
                                                        <button class=" btn popovers btn btn-primary" data-trigger="hover" data-placement="bottom" data-content="Profil">
                                                            <i class="icon-align-left"></i>
                                                        </button>
                                                       </a>
                                                      <?php echo form_close(''); ?>
                                                       
                                                    
                                                </td>
                                            </tr>

                                              <div id="<?php echo $i  ?>" class="reveal-modal">  
                                   
                                    <div class="widget blue">
                                          <div class="widget-title">
                                              <h4><b>Profil</b></h4>
                                              <span class="tools">
                                                      <a href="javascript:;" class="close-reveal-modal" ><i class="icon-remove-sign" ></i></a>
                                                  </span>
                                                          
                                          </div>
                                          <div class="widget-body">
                                              
                                                <dl class="dl-horizontal">
                                                 
                                                 <dt><img alt="" src="<?php echo site_url('assets/img/avat11.jpg'); ?>" ></dt>
                                                <dd></dd>
                                                </dl>
                                              <dl class="dl-horizontal">
                                                  <dt>Nom</dt>
                                                  <dd><?php echo $row->nom  ?></dd>
                                                 
                                                  <dt>Prenom</dt>
                                                   <dd><?php echo $row->prenom  ?></dd>
                                                 
                                                  <dt>Grade</dt>
                                                     <dd><?php echo $row->grade  ?> </dd>

                                                    <dt>Email</dt>
                                                    <dd><a href="mailto:#"><?php echo $row->email ?></a></dd>
                                                    <dt>N° Téléphone</dt>
                                                    <dd><?php echo $row->telephone  ?></dd>
                                              </dl>

                                          </div>
                                      </div>

                                  </div>  

                                        <?php
                                        }
                                        ?>
                                      
                                     </tbody>
                                 </table>
                                 <div class="clearfix">
                                
                              </div>
                             </div>



                          <?php
                          }
                          ?>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>
            <!-- END EDITABLE TABLE widget-->
           

           
        
    
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

