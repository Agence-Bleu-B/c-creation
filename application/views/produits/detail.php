<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <!-- Example row of columns -->

  <section class="home_elmt row">
        <!-- Grille nouveautés -->
        <article class="col-md-12">
            <h2 class="title_nouv"><?php print_r($detail); ?></h2>
            <section class="row">
                <!-- image détail -->
                <div class="col-md-4 col-md-offset-2 product_item">
                    
                        
                        <img class="img-responsive" id="img-detail" src="http://cdn.maisonsdumonde.com/img/lampe-de-bureau-en-metal-rose-h-38-cm-pix-500-9-33-150544_0.jpg" >
                    
                </div>

                <!-- texte détail-->
                <div class="col-md-6" id="texte-detail">
                <ul>
                    <li><h4 class="ref">Référence produit: </h4>
                    <p class="ref" id="numref"></p></li>
                    
                    <li>
                        <h4>Coloris</h4>
                        <ul>
                            <li>
                                Doré satiné
                            </li>
                        </ul>
                    </li>
                    

                    <li>
                        <h4>Dimension:</h4>
                        <ul>
                            <li>Dia : 24cm</li>
                            <li>Ht : 20-80cm</li>
                            <li>1*E27/60W</li>
                        </ul>
                    </li>

                    <li>
                        <h4>Disponibilité</h4>
                        <ul>
                            <li>De suite.</li>   
                        </ul>
                    </li>

                    <li>
                        <h4 class="tarif">Tarif :</h4>
                    <p class="tarif" id="prix-tarif">
                        60€ TTC
                    </p>
                    </li>       
            </ul>
                </div>

            </section>
             <div class="row">
                        <a class="col-md-offset-2" href="<?php echo base_url('produits/lampes');?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour produits</a>
                     </div>
            
        </article>
    </section>
</div>
<!-- /container --> 