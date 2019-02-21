<?php?>
<!--
To change this licence header, choose Licence Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

     <head>
         <title>Calculator</title>
             
<script language ="javascript" type="text/javascript">
                 <!--assigning values to the radio buttons-->
function subTotal() {
 //Enter in Prices Here
 var x = 1000; 
 var y = 2000;
 var p = 3000;
 
    if (document.getElementById('blockchainProgram').checked) {
     //Basic package is checked
     document.calculator.total.value = x;
     
        } else if (document.getElementById('autonomousProgram').checked) {
         // Pro package is checked
         document.calculator.total.value = y;
         
         } else if (document.getElementById('immersiveProgram').checked) {
         // Pro package is checked
         document.calculator.total.value = p;
    }
         
 }

<!--Calculations for discount and total-->
function calcDisc(){
var subTot = document.calculator.total.value;
var discTotal = ((subTot /100 *10))
document.calculator.discount.value = discTotal;
}

function calcTotal(){
var subTott = document.calculator.total.value;

var discTotal = document.calculator.discount.value;

var wholeTotal = (subTott - discTotal);

document.calculator.wholeTotal.value = wholeTotal;
}
    </script>  
    </head>

    
     <body>
            <H1><b><u>Select a Consulting Service</u></b></H1>

              <!-- Opening a HTML form -->
         <form name="calculator">
             
         <!--User fills out form here -->
         
         <br />
         <input type="radio" name="programType" id="blockchainProgram" value="Blockchain" />    Blockchain @ $1000
         <br />
         <input type="radio" name="programType" id="autonomousProgram" value="Autonomous" checked />    Autonomous Things (Robots) @ $2000
         <br />
         <input type="radio" name="programType" id="immersiveProgram" value="Immersive" checked />    Immersive Experience @ $3000
         
         <!-- Here Results will be displayed -->
         
         <br />
         Subtotal: <input type="text" name="total">
         <br>
         <input type="button" value="Subtotal" onclick="javascript:subTotal();">
         </br>
                  
         Discount: <input type="text" name="discount">
         <br>
         <input type="button" value="Discount" onclick="javascript:calcDisc();">
         </br>
         
         Total: <input type="text" name="wholeTotal">
         <br>
         <input type="button" value="Total" onclick="javascript:calcTotal();">
         
         
         </form>




     </body>

</html>
