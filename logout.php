
<?php
session_start();
$_SESSION=array();
session_destroy();
header("location:Login.php")
?>


<html>

<p>Logout</p>

</html>