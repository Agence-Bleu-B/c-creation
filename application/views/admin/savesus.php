<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="collapse-heading-three">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#collapse" href="#collapse-three" aria-expanded="false" aria-controls="collapse-three">
                                Suspensions
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-heading-three">
                        <div class="panel-body">
                            <div id="element" class="row" >
                                <div class="col-md-12" style="background-color: grey;">
                                    <div class="col-md-1">ref</div>
                                    <div class="col-md-2">nom</div>
                                    <div class="col-md-2">dispo</div>
                                    <div class="col-md-1">image</div>
                                    <div class="col-md-2">actions</div>
                                </div>
                                <?php $n=0; foreach ($listSuspensions as $key =>$value){
                                if($n%2 == 0){
                                    $col = '#bcbcbc';
                                }
                                else{
                                    $col = 'white';
                                }
                                $n++;
                                 ?>
                                <!-- debut bloc afficahge -->
                                <div class="col-md-12" style="background-color: <?php echo $col; ?> ;margin-top: 5px;">
                                    <div class="col-md-1">
                                        <?php echo $value['ref'];  ?>
                                    </div>
                                    <div class="col-md-2">
                                        <?php echo $value['nom'];  ?>
                                    </div>
                                    <div class="col-md-2">
                                        <?php echo $value['dispo'];  ?>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#image<?php echo $value['id']; ?>" data-lity ><div class="btn btn-info" >voir</div></a>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#modif<?php echo $value['id']; ?>" data-lity ><div class="btn btn-info" >modifier</div></a>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#delete<?php echo $value['id']; ?>" data-lity ><div class="btn btn-danger" >supprimer</div></a>
                                    </div>
                                </div>
                                <!-- fin bloc affichage -->
                                  <!--form modif-->
                                <div id="modif<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="width: 80%;overflow: scroll;">
                                  <div class="container-fluid">
                                    <div class="row">
                                     <div class="col-xs-12">
                                         <form method="post" action="" >
                                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                             <label for="ref" >ref</label><br />
                                             <input type="text" name="ref" id="ref" value="<?php echo $value['ref']; ?>" /><br />
                                             <label for="nom">nom</label>
                                             <input type="text" name="nom" id="nom" value="<?php echo $value['nom']; ?>" /><br />
                                             <label for="categorie" >categorie</label><br />
                                             <select name="categorie" id="categorie">
                                                 <option <?php if($value['categorie']=='lampe'){ echo "selected";} ?> value="lampe">lampe</option>
                                                 <option <?php if($value['categorie']=='lampadaire'){ echo "selected";} ?> value="lampadaire">lampadaire</option>
                                                 <option <?php if($value['categorie']=='suspension'){ echo "selected";} ?> value="suspension">suspension</option>
                                                 <option <?php if($value['categorie']=='ampoule'){ echo "selected";} ?> value="ampoule">ampoule</option>
                                                 <option <?php if($value['categorie']=='cordon'){ echo "selected";} ?> value="cordon">cordon</option>
                                                 <option <?php if($value['categorie']=='piece'){ echo "selected";} ?> value="piece">piece</option>
                                             </select><br />
                                             <label for="matiere">matière</label>
                                             <input type="text" name="matiere" id="matiere" value="<?php echo $value['matiere']; ?>" /><br />
                                             <label for="nblumiere">nbre lumières</label>
                                             <input type="text" name="nblumiere" id="nblumiere" value="<?php echo $value['nblumiere']; ?>" /><br />
                                             <label for="ampoule">ampoule</label>
                                             <input type="text" name="ampoule" id="ampoule" value="<?php echo $value['ampoule']; ?>" /><br />
                                             <label for="culot">culot</label>
                                             <input type="text" name="culot" id="culot" value="<?php echo $value['culot']; ?>" /><br />
                                             <label for="puiss">puissance</label>
                                             <input type="text" name="puiss" id="puiss" value="<?php echo $value['puiss']; ?>" /><br />
                                             <label for="tension">tension</label>
                                             <input type="text" name="tension" id="tension" value="<?php echo $value['tension']; ?>" /><br />
                                             <label for="dispo">dispo</label>
                                             <input type="text" name="dispo" id="dispo" value="<?php echo $value['dispo']; ?>" /><br />
                                             <label for="style">style</label>
                                             <input type="text" name="style" id="style" /><br />
                                             <label for="ajustable">ajustable</label>
                                             <input type="text" name="ajustable" id="ajustable" /><br />
                                             <label for="coloris">coloris</label>
                                             <textarea name="coloris" id="coloris"><?php echo $value['coloris']; ?></textarea><br />
                                             <label for="dimension">dimensions</label>
                                             <textarea name="dimension" id="dimension"><?php echo $value['dimension']; ?></textarea><br />
                                             <input type="submit" name="modif" value="Modifier" />
                                         </form>
                                     </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- debut bloc photos -->
                                <div id="image<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
                                  <!-- form photo -->
                                  <form method="post" action="" enctype="multipart/form-data" >
                                    <img src="<?php echo base_url()."assets/images/produits/".$value["image"] ; ?>">
                                    <div><?php echo $value['image']; ?></div>
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                    <input type="file" name="photo">
                                    <div class="col-md-12" ><input type="submit" class="btn btn-default" style="margin-top: 20px;" name="changephoto" value="envoyer"></div>
                                  </form>
                                </div>
                                <!-- fin bloc photos -->
                                <!-- debut bloc delete -->
                                <div id="delete<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
                                  <form method="post" action="">
                                    <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                    <div class="col-md-12" >Voulez vous vraiment supprimer cette entrée ?</div>
                                    <div class="col-md-12" ><input type="submit" class="btn btn-default" name="delete" value="Supprimer"></div>
                                  </form>
                                </div>
                                <!-- fin bloc delete -->
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>