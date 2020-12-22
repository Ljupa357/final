<?php
include 'header.php';
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["IDnumber"] = " Ljupco Domazetov 4209";

echo "Session variables are set.";



print_r($_SESSION);
?>

</body>
</html>