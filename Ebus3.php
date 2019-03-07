<!DOCTYPE html>
<html>
<body>
<center>
    <h1><b><u>Purchase Receipt</u></b></h1>
    <br />
    <br />
    <style>
         body{
                    background-color: lightblue;
                    font-family: courier new;
                }
                
    </style>
<!--    //Starting session to get the variable from the last page -->
<?php
session_start();
$totalValue = $_POST['txtTotal'];      
$fullNameValue = $_POST['txtName'];
$phoneNumber=$_POST['txtNum'];
echo "The name is : ".$fullNameValue.".";
echo "<br></br>";
echo "Phone Number : ".$phoneNumber.".";
echo "<br></br>";
echo "The total value is $".$totalValue.".";


?>

<br/>
<br/>
<br/>
<button onclick= 'window.location.href="consulting.html"'>Back to Consulting Services</button>
<button onclick= 'window.location.href="Ebus1.php"'>To purchase another package click here!</button>


</center>
</body>
</html>



