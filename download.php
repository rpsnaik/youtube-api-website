<?php

   $id = $_GET['url'];

?>

<script type="text/javascript">
	setTimeout(function(){
       <?php  header('Location: http://en.fetchfile.net/?url='.$id);  ?>
	},0);
</script>