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
                <a href="<?php echo base_url('produits/Suspensions'); ?>" class="accordion-item">
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
                <a href="<?php echo base_url('produits/Appliques'); ?>" class="accordion-item accordion-item--default">
                    <h2>Appliques</h2>
                    <div class="accordion-item-content">
                      <img src="http://www.maisonsdumonde.com/img/applique-en-metal-brosse-h-47-cm-usine-500-14-35-154646_4.jpg">
                    </div>
                </a>
            </div>
        </article>
        <!-- Grille nouveautés -->
        <article class="col-md-9">
            <h2 class="title_nouv">Trouvez votre magasin</h2>
            <div class="col-sm-12 avt-rech"><p>Avant de vous déplacer, contactez le magasin afin de vérifier la disponibilité de votre produit </p></div>
            <div id="tip"> </div>
            <div class="text-center col-sm-8"id="cmap"></div>
            <div class="col-sm-4"id="listmag">
                <div class="col-sm-12 text-center description"><p>Département: 01</p><hr class="hr-mag"></div>
                <!-- bloc magasin -->
                <div class="col-sm-12 text-center bloc-mag">
                    <p class="mag_titre">Brico dépot</p>
                    <p class="text-center" >ville</p>
                    <p class="text-center">
                        <img src="http://www.bricodepot.fr/docroot/images/header/logo_bricodepot.png">
                    </p>
                    <div class="info">
                        <p><i class="fa fa-address-book" aria-hidden="true"></i> : 42 rue du test</p>
                        <p><i class="fa fa-phone-square" aria-hidden="true"></i> tel : 09000000</p>
                        <p><i class="fa fa-fax" aria-hidden="true"></i> fax : 09000000</p>
                        <p><i class="fa fa-at" aria-hidden="true"></i> : www.site@web.fr</p> 
                    </div>
                    <hr class="hr-mag">
                </div>
                <!-- fin bloc magasin -->
                 <div class="col-sm-12 text-center bloc-mag">
                    <p class="mag_titre">Brico dépot</p>
                    <p class="text-center" >ville</p>
                    <p class="text-center">
                        <img src="http://www.bricodepot.fr/docroot/images/header/logo_bricodepot.png">
                    </p>
                    <div class="info">
                        <p><i class="fa fa-address-book" aria-hidden="true"></i> : 42 rue du test</p>
                        <p><i class="fa fa-phone-square" aria-hidden="true"></i> tel : 09000000</p>
                        <p><i class="fa fa-fax" aria-hidden="true"></i> fax : 09000000</p>
                        <p><i class="fa fa-at" aria-hidden="true"></i> : www.site@web.fr</p> 
                    </div>
                    <hr class="hr-mag">
                </div>
                <div class="col-sm-12 text-center bloc-mag">
                    <p class="mag_titre">Brico dépot</p>
                    <p class="text-center" >ville</p>
                    <p class="text-center">
                        <img src="http://www.bricodepot.fr/docroot/images/header/logo_bricodepot.png">
                    </p>
                    <div class="info">
                        <p><i class="fa fa-address-book" aria-hidden="true"></i> : 42 rue du test</p>
                        <p><i class="fa fa-phone-square" aria-hidden="true"></i> tel : 09000000</p>
                        <p><i class="fa fa-fax" aria-hidden="true"></i> fax : 09000000</p>
                        <p><i class="fa fa-at" aria-hidden="true"></i> : www.site@web.fr</p> 
                    </div>
                    <hr class="hr-mag">
                </div>
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
            <script type="text/javascript" src="<?php echo js_url('france_dpt'); ?>"></script>
            <script type="text/javascript" src="<?php echo js_url('cmap'); ?>"></script>
        </article>
    </section>

</div>
<!-- /container --> 