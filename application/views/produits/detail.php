<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <!-- Example row of columns -->

  <section class="home_elmt row">
        <!-- Grille nouveautés -->
        <article class="col-md-12">
            <h2 class="title_nouv"><?php echo $detail[0]['nom']; ?></h2>
            <section class="row">
                <!-- image détail -->
                <div class="col-md-4 col-md-offset-2 product_item">
                    
                        
                        <img class="img-responsive" id="img-detail" src="<?php echo img_url('produits/'.$detail[0]['image'])?>" >
                    
                </div>

                <!-- texte détail-->
                <div class="col-md-6" id="texte-detail">
                <ul>
                    <li><h4 class="ref">Référence produit: </h4>
                    <p class="ref" id="numref"><?php echo $detail[0]['ref']; ?></p></li>
                    
                    <li>
                        <h4>Coloris</h4>
                        <ul>
                            <li>
                                <?php echo $detail[0]['coloris']; ?>
                            </li>
                        </ul>
                    </li>
                    

                    <li>
                        <h4>Dimension:</h4>
                        <ul>
                            <li><?php echo $detail[0]['dimension']; ?></li>
                        </ul>
                    </li>

                    <li>
                        <h4>Disponibilité</h4>
                        <ul>
                            <li><?php echo $detail[0]['dispo']; ?></li>   
                        </ul>
                    </li>
    
            </ul>
                </div>

            </section>
             <div class="row">
                        <a class="col-md-offset-2" href="<?php echo base_url('produits/'.$detail[0]['categorie'].'s');?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour produits</a>
                     </div>
            
        </article>
    </section>
</div>
<!-- /container --> 