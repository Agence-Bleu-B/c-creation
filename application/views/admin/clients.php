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
                <a href="#new" data-lity ><div class="btn btn-info" style="margin-bottom: 25px;" >nouveau</div></a>
            </div>
            <!-- debut bloc new textes -->
            <div id="new" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/clients'); ?>">
                <div class="col-md-12" >login</div>
                <div class="col-md-12" >
                    <input type="text" name="login" style="width: 100%;margin-bottom: 15px;" >
                </div>
                <div class="col-md-12" >mot de passe</div>
                <div class="col-md-12" >
                    <input type="text" name="mdp" style="width: 100%;margin-bottom: 15px;" >
                </div>
                <div class="col-md-12" >
                    <input type="submit" class="btn btn-default" name="new" value="Créer">
                </div>
              </form>
            </div>
            <div class="col-md-12" >
            <!-- fin bloc new textes -->
            <?php 
            foreach ($clients_liste as $key => $value) { ?>
                <div class="col-md-2" >
                    <a href="<?php echo '#'.$value['id'] ;?>" data-lity >
                        <div class="btn btn-default" style="margin-bottom: 25px;" ><?php echo $value['login']; ?></div>
                    </a>
                </div>
            <?php } ?>
            </div>
            <?php
            foreach ($clients_liste as $key => $value) { ?>
            <div id="<?php echo $value['id'] ;?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/clients'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ;?>">
                <div class="col-md-12" >login</div>
                <div class="col-md-12" >
                    <input type="text" name="login" value="<?php echo $value['login'] ;?>" style="width: 100%;margin-bottom: 15px;" >
                </div>
                <div class="col-md-12" >mot de passe</div>
                <div class="col-md-12" >
                    <input type="text" name="mdp" value="<?php echo $value['mdp'] ;?>" style="width: 100%;margin-bottom: 15px;" >
                </div>
                <div class="col-md-12" >
                    <input type="submit" class="btn btn-default" name="modif" value="Modifier">
                </div>
              </form>
              <form method="post" action="<?php echo site_url('admin/clients'); ?>">
                <div class="col-md-12" >
                  <input type="hidden" name="id" value="<?php echo $value['id'] ;?>">
                  <input type="submit" name="sup" class="btn btn-default" value="Supprimer"> 
                </div>             
              </form>
            </div>
            <?php } ?>
        </div>
        <!-- /. contenu  -->
         <!-- /. ROW  -->           
  </div>
     <!-- /. PAGE INNER  -->
</div>