<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
include "header2.php";
$n=$_POST['p'];

    echo "$n";
?>


