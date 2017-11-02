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
            <div class="col-md-12" >
                <a href="#new" data-lity >nouveau</a>
            </div>
            <!-- debut bloc new textes -->
            <div id="new" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" ></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ></textarea></div>
                <div class="col-md-12" ><input type="submit" class="btn btn-default" name="new" value="Créer"></div>
              </form>
            </div>
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