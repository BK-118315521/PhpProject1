<!DOCTYPE html>
<html>
<body>
<!--    //Starting session to get the variable from the last page -->
<?php
session_start();
$totalValue=$_POST['txtTotal'];      
echo "The total value is $".$totalValue.".";
?>
           
</body>
</html>



