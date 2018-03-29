<!DOCTYPE html>
<html lang="fr -FR">

<head>
  <meta charset="UTF-8">
  <title>formulaire</title>
  <!--link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"-->

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">formulaire d'inscription</a></li>
        <!--li class="tab"><a href="#login">Log In</a></li-->
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Veuillez renseigner vos informations</h1>
          
          <form action="traitement.php" method="post">
          
          <div class="top-row">
            
            <div class="field-wrap">
              <!--label for="prenom">
                Prénom<span class="req">*</span>
              </label-->
              <input type="text" name="prenom" id="prenom" placeholder="Prénom*" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <!--label for="nom">
                Nom<span class="req">*</span>
              </label-->
              <input type="text" name="nom" id="nom" placeholder="Nom*" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <!--label for="adresse">
              Adresse<span class="req">*</span>
            </label-->
            <input type="text" name="adresse" id="adresse" placeholder="Adresse" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <!--label for="ville">
              Ville<span class="req">*</span>
            </label-->
            <input type="text" name="ville" id="ville" placeholder="Ville" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <!--label for="code">
              Code Postal<span class="req">*</span>
            </label-->
            <input type="text" name="code" id="code" placeholder="Code Postal" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="save" class="button button-block"/>Enregistrez</button>
          
          </form>

        </div>
        
        <!--div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div--> <!-- /form -->
  <!--script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script-->

  

    <script  src="js/index.js"></script>




</body>

</html>
