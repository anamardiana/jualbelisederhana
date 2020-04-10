<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>


<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>