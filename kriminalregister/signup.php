<?php

include( "config.php" );

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 32) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Din konto er blevet oprettet <a href=\"login.php\">Log dig selv på her.</a>";
                  } else {
                     $erreur = "Koden stemmer ikke over ens!";
                  }
               } else {
                  $erreur = "Den email er brugt.";
               }
            } else {
               $erreur = "Ugyldig email";
            }
         } else {
            $erreur = "Koden stemmer ikke over ens!";
         }
      } else {
         $erreur = "Ikke mere end 32 tegn.";
      }
   } else {
      $erreur = "Husk, at ufylde alle felter";
   }
}
?>
<html>
   <head>
      <title>DIN Politi styrker her</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Opret dig i databsen her</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Brugernavn  :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Username" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Email :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Email Address" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Bekræft Email :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirm Email" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Kodeord :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Password" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Bekræft Kodeord :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirm Password" id="mdp2" name="mdp2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Sign up" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>
