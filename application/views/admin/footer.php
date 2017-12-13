<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- /. PAGE WRAPPER  -->
        </div>
<footer>
	<div class="row">
        <div class="col-lg-12" >
            &copy;  2017 c-creation.com | Design by: <a href="#"  target="_blank">www.bleu-b.com</a> 
        </div>
    </div>
</footer>
<!-- script -->
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo js_url("lity.min") ?>" charset="utf-8"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo js_url('admin');?>"></script>

<script type="text/javascript">$(document).ready(function(e){
        $(".img-check").click(function(){
        $(this).toggleClass("check");
      });
  });</script>
<?php if ($pagecours == 'produits') { ?>
  <script type="text/javascript">$(function(){
    $('#lampe').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#lampe li').each(function(i,index){
           $(this).attr('id', 'lampe_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
    $('#lampadaire').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#lampadaire li').each(function(i,index){
           $(this).attr('id', 'lampa_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
    $('#suspension').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#suspension li').each(function(i,index){
           $(this).attr('id', 'sus_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
    $('#applique').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#applique li').each(function(i,index){
           $(this).attr('id', 'app_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
    $('#plafonnier').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#plafonnier li').each(function(i,index){
           $(this).attr('id', 'pla_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
    $('#ampoule').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#ampoule li').each(function(i,index){
           $(this).attr('id', 'amp_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
    $('#cordon').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#cordon li').each(function(i,index){
           $(this).attr('id', 'cord_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
    $('#piece').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
        $('#piece li').each(function(i,index){
           $(this).attr('id', 'pie_'+i);
           function pair(i){
              chiffre=parseInt(i);
              return ((chiffre & 1)=='0')?true:false;
            }
            if(i != 0){
              if (pair(i) == true) { $(this).css('background', '#FFFFFF');}
              else{$(this).css('background', '#BCBCBC');}
            }
        });
        var data4 = $(this).sortable('toArray',{ attribute: 'ref'}) ;
        $.post( "<?php echo site_url('admin/ajaxOrder'); ?>",{ 'list[]': data4});
      }
    });
 // appel du plugin
    $( "#lampe,#lampadaire,#suspension,#applique,#plafonnier,#ampoule,#cordon,#piece" ).disableSelection();

});</script>
<?php } ?>
</body>
</html>
