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

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4 class="ref">Référence produit: </h4>   
                        </div>   
                        <div class="col-md-8">
                            <h4 class="ref" ><p class="ref" id="numref"><?php echo $detail[0]['ref']; ?></p></h4>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Coloris:</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['coloris']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Matière:</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['matiere']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Dimension:</h4>
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['dimension']; ?></p> 
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Nombre de lumières:</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['nblumiere']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Ampoule(s) fournie(s):</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['ampoule']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Type de culot:</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['culot']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Puissance max par lumière:</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['puiss']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Tension:</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['tension']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Ajustable:</h4> 
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['ajustable']; ?></p>   
                        </div> 
                    </div>

                    <div class="row details_content">
                        <div class="col-md-4">
                            <h4>Disponibilité:</h4>
                        </div>   
                        <div class="col-md-8">
                            <p><?php echo $detail[0]['dispo']; ?></p>
                        </div> 
                    </div>

                </div>

            </section>
             <div class="row">
                <?php if (!isset($_GET['P'])) { ?>
                   <a class="col-md-offset-2" href="<?php echo base_url('produits/'.$detail[0]['categorie'].'s');?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour produits</a> 
                <?php } else{ ?>
                    <a class="col-md-offset-2" href="<?php echo base_url('produits/'.$detail[0]['categorie'].'sP');?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour produits</a> 
                <?php }?>
             </div>
            
        </article>
    </section>
</div>
<!-- /container --> 