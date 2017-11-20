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
        <?php
        foreach ($list_nouv as $key => $value) { ?>
          <div class="col-md-4 product_item">
            <?php echo $value['nom'];?>
          </div>
        <?php }?>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>