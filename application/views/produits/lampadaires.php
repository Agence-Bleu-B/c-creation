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
                <a href="<?php echo base_url('produits/lampadaires'); ?>" class="accordion-item accordion-item--default">
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
                <a href="<?php echo base_url('produits/appliques'); ?>" class="accordion-item">
                    <h2>Appliques</h2>
                    <div class="accordion-item-content">
                      <img src="http://www.maisonsdumonde.com/img/applique-en-metal-brosse-h-47-cm-usine-500-14-35-154646_4.jpg">
                    </div>
                </a>
            </div>
        </article>
        <!-- Grille nouveautés -->
        <article class="col-md-9">
            <h2 class="title_nouv">Les Lampadaires</h2>
            <ul class="row">
                <!-- Produit -->
                <li class="col-md-4 product_item">
                    <a href="#">
                        <p>Ref. 0071</p>
                        <img class="img-responsive" src="http://cdn.maisonsdumonde.com/img/lampe-de-bureau-en-metal-rose-h-38-cm-pix-500-9-33-150544_0.jpg">
                    </a>
                </li>
                <!-- Produit -->
                <li class="col-md-4 product_item">
                    <a href="#">
                        <p>Ref. 0071</p>
                        <img class="img-responsive" src="http://cdn.maisonsdumonde.com/img/suspension-blanche-en-metal-d-50-cm-finmark-500-6-9-138097_1.jpg">
                    </a>
                </li>
                <!-- Produit -->
                <li class="col-md-4 product_item">
                    <a href="#">
                        <p>Ref. 0070</p>
                        <img class="img-responsive" src="http://cdn.maisonsdumonde.com/img/applique-etirable-en-metal-grise-h-13-cm-lorient-500-6-0-148297_1.jpg">
                    </a>
                </li>
                <!-- Produit -->
                <li class="col-md-4 product_item">
                    <a href="#">
                        <p>Ref. 0070</p>
                        <img class="img-responsive" src="http://www.maisonsdumonde.com/img/lampe-en-metal-noir-h-41-cm-ikat-500-3-14-158766_1.jpg">
                    </a>
                </li>
                <!-- Produit -->
                <li class="col-md-4 product_item">
                    <a href="#">
                        <p>Ref. 0070</p>
                        <img class="img-responsive" src="http://cdn.maisonsdumonde.com/img/lampadaire-trepied-en-metal-cuivre-h-174-cm-conquerant-500-8-17-130602_1.jpg">
                    </a>
                </li>
                <!-- Produit -->
                <li class="col-md-4 product_item">
                    <a href="#">
                        <p>Ref. 0070</p>
                        <img class="img-responsive" src="http://cdn.maisonsdumonde.com/img/suspension-non-electrifiee-en-metal-bleu-clair-d-33cm-confluent-500-14-4-167940_1.jpg">
                    </a>
                </li>
            </ul>
            <div class="row pag_page">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li>
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
        </article>
    </section>
</div>
<!-- /container --> 