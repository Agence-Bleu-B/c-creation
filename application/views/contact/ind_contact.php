<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <!-- Example row of columns -->
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2 class="title_nouv">contactez nous</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row contform">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form>
                    <div class="row">
                        <div class="col-md-12">
                        <!--champ nom-->
                            <div class="form-group">
                                <label for="name">
                                    Nom</label>
                                <input type="text" class="form-control" id="name" placeholder="Votre Nom" name="name_sender" required="required" />
                            </div>

                        <!--champ adresse-->

                            <div class="form-group">
                                <label for="email">
                                   Adresse Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" id="email" placeholder="Votre Email" name="mail_sender" required="required" /></div>
                            </div>

                        <!--champ sujet-->

                            <div class="form-group">
                                <label for="subject">
                                    Sujet</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choississez:</option>
                                    <option value="service">Renseignement</option>
                                    <option value="suggestions">Suggestions</option>
                                    <option value="compte">Création de compte</option>
                                    <option value="product">SAV</option>
                                </select>
                            </div>

                        <!--champs message-->

                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                    placeholder="Message"></textarea>
                            </div>

                        </div>

                    <!--boutons d'envoi-->


                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" id="btnContactUs">
                                Envoyer</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                <legend><img src="<?php echo img_url('logos/logo_forme.png'); ?>"><p></p></legend>
                <address>
                    <strong> BOUDET SAS</strong><br>
                    22350 CAULNES<br>
                    <abbr title="Phone">
                        tel:</abbr>
                    02 96 83 92 89
                </address>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /container --> 