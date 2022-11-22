<?php
ob_start();
//include header.php file
include ('header.php');
?>

<?php
/*include product detail*/
    include('Template/_product.php');
/*include product detail*/

/* include featured product */
    include ('Template/_related-product.php');
/* include featured product */


?>

<?php
//include footer.php file
include ('footer.php');
?>