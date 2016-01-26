<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Login </title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />


   <?php 

      include("layouts/base_CSS.php") ;

   ?>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        
        <!-- END LOGO -->
    <div style="margin:auto;"><h2>Bienvenue</h2></div>
    </div>
    <div class="login-wrap">
        <div class="metro single-size blue">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Connexion</span>
            </div>
        </div>

            <?php echo form_open("login/verfier") ?>
              <div class="metro double-size green">
                <div class="input-append lock-input">
                    <input type="text"  name="pseudo"  placeholder="Pseudo">
               </div>  
                <font color="white"> <?php echo form_error('pseudo'); ?> </font>         
              </div>
              <div class="metro double-size yellow">
                <div class="input-append lock-input">
                    <input type="password" name="motDePasse"  placeholder="Mot de passe">
                </div>
                <font color="white"> <?php echo form_error('motDePasse'); ?> </font>
                <?php if (isset($message))
                 { ?>   
                              <h4 class="alert-heading"><?php echo $message ; ?></h4>                     
                 
                <?php } ?>
              </div>

              <div class="metro single-size terques login">
                <button type="submit" class="btn login-btn">
                    Entrer
                    <i class=" icon-long-arrow-right"></i>
                </button>
                 
        
        </div>
        
    </div>
</body>
<!-- END BODY -->
</html>