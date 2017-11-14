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
		  	<div class="col-md-12">
		  		<a href="#new" data-lity>
		  			<div class="btn btn-info" style="margin-bottom: 25px;">nouveau</div>
		  		</a>
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
							<style>td{border: 1px solid black;}</style>
                            <table class="col-md-12">
								<tr>
									<td>ref</td>
                                    <td>nom</td>
                                    <td>coloris</td>
                                    <td>dimensions</td>
                                    <td>image</td>
                                    <td>dispo</td>
                                    <td>actions</td>
								</tr>
							<?php foreach ($listLampes as $key =>$value)
								{ ?>
                                <tr>
                                    <td></td>
                                </tr>
							<?php } ?>
                            </table>
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