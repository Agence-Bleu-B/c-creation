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
<?php if ($pagecours == "creation" || $pagecours == 'modifactu' ) {?>
	<script type="text/javascript" src="<?php echo js_url('tinymce/tinymce.min');?>"></script>
	<script>
	  tinymce.init({
	    selector: 'textarea',
	    height: 600,
	    plugins: 'link image code paste',
	    language: 'fr_FR',
	    branding: false,
	    relative_urls: false,
	    menubar: false,
	    toolbar: 'undo redo | styleselect | bold italic | link image',
	    paste_data_images: true
	  });
	</script>
<?php } ?>
<script type="text/javascript">$(document).ready(function(e){
        $(".img-check").click(function(){
        $(this).toggleClass("check");
      });
  });</script>
  <script type="text/javascript">$(function(){

    $('#suspension').sortable({
      items: "li:not(.dis)",
      update: function(event, ui) {
      	var data = $(this).sortable('serialize');
      	var data2 = data ;
      	for(var i = 0;i<data.length;i++){
      		
      	}
      	console.log(data);console.log(data2);
      }
    }); // appel du plugin
    $( "#suspension" ).disableSelection();

});</script>
</body>
</html>
