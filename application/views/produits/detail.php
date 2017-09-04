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
                      <img src="http://www.maisonsdumonde.com/img/lampe-vintage-en-metal-vert-pastel-h-45-cm-500-15-36-149768_2.jpg">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/lampadaires'); ?>" class="accordion-item">
                    <h2>Lampadaires</h2>
                    <div class="accordion-item-content">
                      <img src="http://www.maisonsdumonde.com/img/lampadaire-trepied-en-bois-et-coton-noir-h-156-cm-karlsen-500-10-0-154693_8.jpg">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/suspensions'); ?>" class="accordion-item">
                    <h2>Suspensions</h2>
                    <div class="accordion-item-content">
                      <img src="http://www.maisonsdumonde.com/img/suspension-en-metal-d-45-cm-diamond-copper-500-16-2-151333_5.jpg">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/Plafonniers'); ?>" class="accordion-item">
                    <h2>Plafonniers</h2>
                    <div class="accordion-item-content">
                      <img src="http://cdn.maisonsdumonde.com/images/cache//4/8/-483b8a3dd36a6517d93e37ab5f369b70_w735_h735.jpg">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/appliques'); ?>" class="accordion-item accordion-item--default">
                    <h2>Appliques</h2>
                    <div class="accordion-item-content">
                      <img src="http://www.maisonsdumonde.com/img/applique-en-metal-brosse-h-47-cm-usine-500-14-35-154646_4.jpg">
                    </div>
                </a>
            </div>
        </article>
        <!-- Grille nouveautés -->
        <article class="col-md-8">
            <h2 class="title_nouv"> Lorem Ipsum</h2>
            <ul class="row">
                <!-- image détail -->
                <div class="col-md-6 product_item">
                    <a href="#">
                        
                        <img class="img-responsive" id="img-detail" src="http://cdn.maisonsdumonde.com/img/lampe-de-bureau-en-metal-rose-h-38-cm-pix-500-9-33-150544_0.jpg" >
                    </a>
                </div>

                <!-- texte détail-->
                <div class="col-md-6">
                    <h4 class="ref">Référence produit: </h4>
                    <p class="ref" id="numref">0071</p>
                  

                    <h4>
                    Description:    
                    </h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nam laoreet ut enim non finibus. Duis erat nibh, gravida quis volutpat ac, feugiat id nisl.
                        Duis vel molestie arcu, sit amet ornare quam. Praesent nec augue quis enim sollicitudin semper ac ut mauris.
                        Pellentesque volutpat metus quam, id finibus eros lobortis et. Suspendisse quis gravida ipsum, sit amet hendrerit nisl.
                        Morbi ipsum enim, volutpat sed scelerisque nec, fermentum sit amet justo. Quisque malesuada eu arcu at mollis.
                        Praesent porttitor nisi mi, vitae mollis dui faucibus et. Nunc pharetra efficitur tortor sed vestibulum. 
                    </p>

                </div>


                <div class='col-md-4'>
                    
                    <h4 class="tarif">
                        Tarif :
                    </h4>
                    <p class="tarif" id="prix-tarif">
                        60€ TTC
                    </p>
                </div>
                
              

            </ul>
        </article>
    </section>
</div>
<!-- /container --> 