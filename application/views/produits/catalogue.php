<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <!-- Example row of columns -->

  <section class="home_elmt row">
        <!-- Grille des catégories -->
        <article class="col-md-12">
            <h2 class="title_nouv">Nos Produits</h2>
             <!-- Produits -->
             <div class="row" id="lienCatalogue">
             <div class="col-md-offset-4 col-md-4">
               <a  class="thumbnail" href="assets/pdf/Catalogue_CCREATION.pdf" target="_blank">Notre catalogue en PDF</a>
             </div>
              
            </div>

            <div class="row">

              <div class="col-md-4">
                <a href="<?php echo base_url('produits/lampes'); ?>" class="thumbnail">
                  <img src="<?php echo img_url('accordeon/macbook-690276_1280.jpg'); ?>">
                  <h2>lampes</h2> 
                  
                </a>
              </div>

              <div class="col-md-4">
                <a href="<?php echo base_url('produits/lampadaires'); ?>" class="thumbnail">
                  <img src="<?php echo img_url('accordeon/lounge-609383_1280.jpg'); ?>">
                  <h2>lampadaires</h2> 
                </a>
              </div>

              <div class="col-md-4">
                <a href="<?php echo base_url('produits/suspensions'); ?>" class="thumbnail">
                  <img src="<?php echo img_url('accordeon/bright-1851267_1280-2.jpg'); ?>">
                  <h2>suspensions</h2> 
                </a>
              </div>

            </div>
            <div class="row">


              

              <div class="col-md-4" >
                <a href="<?php echo base_url('produits/appliques'); ?>" class="thumbnail" >
                  <img src="<?php echo img_url('accordeon/light-bulbs-1125016_960_720-2.jpg'); ?>">
                  <h2>Appliques</h2> 
                </a>
              </div>

              <div class="col-md-4" >
                <a href="<?php echo base_url('produits/plafonniers'); ?>" class="thumbnail" >
                  <img src="<?php echo img_url('accordeon/light-bulbs-1125016_960_720-2.jpg'); ?>">
                  <h2>Plafonniers</h2> 
                </a>
              </div>

              <div class="col-md-4">
                <a href="<?php echo base_url('produits/ampoules'); ?>" class="thumbnail">
                  <img src="<?php echo img_url('accordeon/ceiling-lamp-335975_1280.jpg'); ?>">
                  <h2>ampoules</h2> 
                </a>
              </div>

            </div>
            <div class="row">

               

               <div class="col-md-offset-2 col-md-4">
                <a href="<?php echo base_url('produits/cordons'); ?>" class="thumbnail">
                  <img src="<?php echo img_url('accordeon/lighting-1565982_1920-2.jpg'); ?>">
                  <h2>cordons</h2> 
                </a>
              </div>

               <div class="col-md-4" >
                <a href="<?php echo base_url('produits/pieces'); ?>" class="thumbnail" >
                  <img src="<?php echo img_url('accordeon/light-bulbs-1125016_960_720-2.jpg'); ?>">
                  <h2>pièces détachées</h2> 
                </a>
              </div>

            </div>
            
            




         
           
        </article>
    </section>
</div>
<!-- /container --> 