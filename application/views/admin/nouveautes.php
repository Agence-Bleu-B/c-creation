<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>NOUVEAUTES</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
          <form method="post" action="" >
          <?php $i = 0;
          foreach ($list_nouv as $key => $value) { ?>
            <div class="col-md-4 product_item">
              <?php echo $value['nom'];?><br>
              <input type="text" value="<?php echo $value['ref'] ; ?>" name="<?php echo $i ; ?>" >
            </div>
          <?php $i++; }?>
            <input type="submit" name="modif" value="Modifier">
          </form>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>