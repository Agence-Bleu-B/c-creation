<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>GESTION DES PRODUITS</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
              <!--bouton new-->
		  	<div class="col-md-12">
		  		<a href="#new" data-lity>
		  			<div class="btn btn-info" style="margin-bottom: 25px;">nouveau</div>
		  		</a>
		  	</div>
              <!--form new-->
            <div id="new" class="col-md-12 jumbotron lity-hide" style="width: 80%;overflow: scroll;">
              <div class="container-fluid">
                <div class="row">
                 <div class="col-xs-12">
                     <form method="post">
                         <label for="ref" >ref</label><br />
                         <input type="text" name="ref" id="ref" /><br />
                         <label for="nom">nom</label>
                         <input type="text" name="nom" id="nom" /><br />
                         <label for="categorie" >categorie</label><br />
                         <select name="categorie" id="categorie">
                             <option value="lampe">lampe</option>
                             <option value="lampadaire">lampadaire</option>
                             <option value="suspension">suspension</option>
                             <option value="ampoule">ampoule</option>
                             <option value="cordon">cordon</option>
                             <option value="piece">piece</option>
                         </select><br />
                         <label for="dispo">dispo</label>
                         <input type="text" name="dispo" id="dispo" /><br />
                         <label for="coloris">coloris</label>
                         <textarea name="coloris" id="coloris"></textarea><br />
                         <label for="dimensions">dimensions</label>
                         <textarea name="dimensions" id="dimensions"></textarea><br />
                         <input type="submit" value="Ok" />
                     </form>
                 </div>
                </div>
              </div>
            </div>
            <div class="panel-group col-md-12" id="collapse" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="collapse-heading-one">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#collapse" href="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
								Lampes
							</a>
						</h4>
					</div>
					<div id="collapse-one" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="collapse-heading-one">
						<div class="panel-body">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="col-md-1">ref</div>
                                    <div class="col-md-2">nom</div>
                                    <div class="col-md-2">coloris</div>
                                    <div class="col-md-2">dimensions</div>
                                    <div class="col-md-1">image</div>
                                    <div class="col-md-2">dispo</div>
                                    <div class="col-md-2">actions</div>
                                </div>
                                <?php foreach ($listLampes as $key =>$value)
								{ ?>
                                    <div class="col-md-12">
                                        <form>
                                            <input type="hidden" value="<?php echo $value['id'];  ?>" />
                                            <div class="col-md-1">
                                                <input type="text" value="<?php echo $value['ref'];  ?>" />
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" value="<?php echo $value['nom'];  ?>" />
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" value="<?php echo $value['coloris'];  ?>" />
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" value="<?php echo $value['dimension'];  ?>" />
                                            </div>
                                            <div class="col-md-1">
                                                <input type="text" value="<?php echo $value['image'];  ?>" />
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" value="<?php echo $value['dispo'];  ?>" />
                                            </div>
                                            <div class="col-md-1">
                                                <input type="submit" value="modifier" />
                                            </div>
                                        </form>
                                        <form>
                                            <div class="col-md-1">
                                                <input type="submit" value="supprimer" />
                                            </div>
                                        </form>
                                    </div>
                            </div><?php } ?>
                        </div>
					</div>
				</div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="collapse-heading-two">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#collapse" href="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                                Lampadaires
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-heading-two">
                        <div class="panel-body">
                            Morbi eget libero quis metus consectetur semper.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="collapse-heading-three">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#collapse" href="#collapse-three" aria-expanded="false" aria-controls="collapse-three">
                                Supensions
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-heading-three">
                        <div class="panel-body">
                            Suspendisse ullamcorper massa eget eleifend iaculis.
                        </div>
                    </div>
                </div>
			  	<div class="panel panel-default">
			  		<div class="panel-heading" role="tab" id="collapse-heading-four">
			  			<h4 class="panel-title">
			  				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#collapse" href="#collapse-four" aria-expanded="false" aria-controls="collapse-four">
			  					Ampoules
			  				</a>
			  			</h4>
			  		</div>
			  		<div id="collapse-four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-heading-four">
			  			<div class="panel-body">
			  				Suspendisse ullamcorper massa eget eleifend iaculis.
			  			</div>
			  		</div>
			  	</div>
			  	<div class="panel panel-default">
			  		<div class="panel-heading" role="tab" id="collapse-heading-five">
			  			<h4 class="panel-title" >
			  				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#collapse" href="#collapse-five" aria-expanded="false" aria-controls="collapse-five">
			  					Cordons
			  				</a>
			  			</h4>
			  		</div>
			  		<div id="collapse-five" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-heading-five">
			  			<div class="panel-body">
			  				Suspendisse ullamcorper massa eget eleifend iaculis.
			  			</div>
			  		</div>
			  	</div>
			  	<div class="panel panel-default">
			  		<div class="panel-heading" role="tab" id="collapse-heading-six">
			  			<h4 class="panel-title">
			  				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
			  					Pièces détachées
			  				</a>
			  			</h4>
			  		</div>
			  		<div id="collapse-six" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-heading-six">
			  			<div class="panel-body">
			  				Suspendisse ullamcorper massa eget eleifend iaculis.
			  			</div>
			  		</div>
			  	</div>
            </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>