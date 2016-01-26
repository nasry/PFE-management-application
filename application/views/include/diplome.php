<!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget widget-tabs blue">
                          <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Diplomes </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                          </div>
                            <!--BEGIN RESPONSIVE NAV-->
                            <div class="bs-docs-example"  >

                                <div class="navbar" >
                                    <div class="navbar-inner"  >
                                        <div class="container">
                                            <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </a>
                                            <a href="#" class="brand">Détails</a>
                                            <div class="nav-collapse collapse navbar-responsive-collapse">
                                                <ul class="nav">
                                                    <li class="dropdown">
                                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Chercher dans <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Diplome</a></li>
                                                            <li><a href="#">Spécialité</a></li>
                                                            <li><a href="#">Niveaux</a></li>
                                                            <li><a href="#">Module</a></li>
                                                            <li><a href="#">Matière</a></li>
                                                            <li><a href="#">Epreuve</a></li>   
                                                        </ul>
                                                    </li>
                                                    
                                                     <li class="divider-vertical"></li>
                                                     <form action="#" class="navbar-search pull-left">
                                                    <input type="text" placeholder="Search" class="search-query input-medium">
                                                </form>
                                                <li class="divider-vertical"></li>
                                                    <li> <button class="btn " type="button">Chercher</button></li>
                                                     <li class="divider-vertical"></li>
                                                </ul>
                                                <ul class="nav pull-right">
                                                    <li>
                                                      <a href="#" data-reveal-id="myModal_1" data-animation="fade">
                                                        Ajouter un diplome <i class="icon-plus"></i>
                                                      </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END RESPONSIVE NAV-->
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
                                         <th>Matricule</th>
                                         <th>Nom du Diplome</th>
                                         <th style="width: 108px ;"></th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                       <tr class="">
                                          <td>1500</td>
                                          <td>Informatique</td>
                                          <td>
                                            <a href="#" data-reveal-id="myModal_11" data-animation="fade">
                                              <button class="btn btn-primary">
                                                <i class="icon-edit"></i>
                                              </button>
                                            </a>
                                              <button class="btn btn-primary">
                                                  <a class="delete" href="javascript:;"></a>
                                                  <i class="icon-trash"></i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr class="">
                                           <td>3000</td>
                                           <td>Chimie</td>
                                           <td>
                                            
                                              <a href="#" data-reveal-id="myModal_11" data-animation="fade">
                                              <button class="btn btn-primary">
                                                <i class="icon-edit"></i>
                                              </button>
                                              </a>
                                              <button class="btn btn-primary">
                                                  <a class="delete" href="javascript:;"></a>
                                                  <i class="icon-trash "></i>
                                              </button>
                                           </td>
                                      </tr> 
                                     </tbody>
                                 </table>
                                 <div class="clearfix">
                                  <div id="myModal_11" class="reveal-modal">  
                                   <?php include("modifier_diplome.php") ;  ?>
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