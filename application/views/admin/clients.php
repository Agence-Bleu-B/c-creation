<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>CLIENTS</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
        <hr />
        <!-- contenu a partir d'ici -->
        <div class="row text-center pad-top">
            <?php 
            foreach ($clients_liste as $key => $value) {
              print_r($value); echo '<br>';
            } ?>
        </div>
        <!-- /. contenu  -->
         <!-- /. ROW  -->           
  </div>
     <!-- /. PAGE INNER  -->
</div>