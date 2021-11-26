<?php
session_start();

include( "config.php" );

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Prøv igen, forkerte oplysninger";
      }
   } else {
      $erreur = "Husk alle felter!";
   }
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body class="align">

  <div class="grid">

<form method="POST" action="" class="form login">

      <header class="login__header">
	    <img src="http://dangate.dk/wp-content/uploads/2018/02/politi.png" width=250 height=250/>
        <h3 class="login__title">Din politisytrke login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="email" name ="mailconnect" placeholder="eMail">
        </div>

        <div class="form__field">
          <input type="password" name="mdpconnect" placeholder="password">
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login" name="formconnexion">

        <p><span class="icon icon--info">?</span><a href="#">Har du glemt det kodeord?</a></p>
      </footer>

    </form>
<?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
  </div>

</body>
  
  
</body>
</html>
