<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <!-- Example row of columns -->

  <section class="home_elmt row">
        <!-- Accordeon Menu -->
        <article class="col-md-3">
            <div class="accordion">
                <a href="<?php echo base_url('produits/lampes'); ?>" class="accordion-item">
                    <h2>Lampes</h2>
                    <div class="accordion-item-content">
                      <img src="<?php echo img_url('accordeon/macbook-690276_1280.jpg'); ?>">

                    </div>
                </a>
                <a href="<?php echo base_url('produits/lampadaires'); ?>" class="accordion-item">
                    <h2>Lampadaires</h2>
                    <div class="accordion-item-content">
                       <img src="<?php echo img_url('accordeon/lounge-609383_1280.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/suspensions'); ?>" class="accordion-item">
                    <h2>Suspensions</h2>
                    <div class="accordion-item-content">
                      <img src="<?php echo img_url('accordeon/bright-1851267_1280-2.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/ampoules'); ?>" class="accordion-item accordion-item--default">
                    <h2>Ampoules</h2>
                    <div class="accordion-item-content">
                     <img src="<?php echo img_url('accordeon/ceiling-lamp-335975_1280.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/cordons'); ?>" class="accordion-item">
                    <h2>Cordons</h2>
                    <div class="accordion-item-content">
                       <img src="<?php echo img_url('accordeon/lighting-1565982_1920-2.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/pieces'); ?>" class="accordion-item">
                    <h2>Pièces détachées</h2>
                    <div class="accordion-item-content">
                       <img src="<?php echo img_url('accordeon/light-bulbs-1125016_960_720.jpg'); ?>">
                    </div>
                </a>
            </div>
        </article>
        
        <!-- Grille nouveautés -->
        <article class="col-md-9">
            <h2 class="title_nouv">Les Ampoules</h2>
             <!-- Produits -->
        <ul class="row">
                <?php for ($i=0; $i < 6 ; $i++) { ?>
                    
                    <li class="col-md-4 product_item">
                    <a href="<?php echo base_url('produits/detail');?>">
                        <p>Ref. 007<?php echo $i;?></p>
                        <img class="img-responsive" src="http://cdn.maisonsdumonde.com/img/lampe-de-bureau-en-metal-rose-h-38-cm-pix-500-9-33-150544_0.jpg">
                    </a>
                </li>
               <?php }?>

            </ul> 
          
          
          
        </article>
    </section>
</div>
<!-- /container --> 