<?php?>
<!--
To change this licence header, choose Licence Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>Calculator</title>
        <script language="javascript" type="text/javascript">
            function packageTotal()
            // Enter prices here
            var x =1000;
            var y = 2000;
            var z = 3000;
            
            if (document.getElementById("basicprogram").checked) (
               
            document.calculator.total.value=b;
                        
             ) else if (document.getElementById("proprogram").checked)(
             //Pro Package
            document.calculator.total.value=p;
            )     
    
        </script>
    </head>
    
    <body>
        <!--opening a html form -->
        <form name="calculator">
            <br/>
            <input type="radio" name="programType" id="basicProgram" value="basic" />Basic
            <input type="radio" name="programType" id="proProgram" value="Pro" />Pro
            
            
            <br/>
            
            Your total price is: <input type="text" name="total">
            
            <input type="button" value="submit" onclick="javascript:packageTotal();"
            
        </form>
        
        
        
    </body>
</html>
