<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <!-- Example row of columns -->

  <section class="home_elmt row">
       <article class="col-sm-offset-3 col-sm-4 col-md-4 col-md-offset-3" id="formulaire_co">
         <form method="post" action="">
            
            <h5>Login</h5>
            <input class="input_form" type="text" name="login">
            <h5>Mot De Passe</h5>
            <input class="input_form" type="password" name="mdp">

            <div id="sub_co">
                <input type="submit" value="Connexion" name="conect">
            </div>
             
        </form>
        <p class="rappel"><a href="<?php echo base_url('contact'); ?>">Pour obtenir votre indentifiant et votre mot de passe contactez-nous.</a></p>
       </article>


        
        
    </section>
</div>
<!-- /container --> 