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
          	<?php for ($i=0; $i < count($list_nouv); $i++) { ?>
                    
                    
                    
                        
                        <p class="col-md-4 product_item"><?php echo $list_nouv[$i]['nom'];?></p>
                    
              
               <?php }?>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>