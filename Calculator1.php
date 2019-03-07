<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
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
 var x = 2;
 var y = 10;
 var p = x * y * 100;
 var b = y * 100;
 var d = 3000
 
    if (document.getElementById('basicProgram').checked) {
     //Basic package is checked
     document.calculator.total.value = b;
    
        } else if (document.getElementById('proProgram').checked) {
         // Pro package is checked
         document.calculator.total.value = p;
            
             } else if (document.getElementById('immProgram').checked) {
                // Imm package is checked
                 document.calculator.total.value = d;
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
              <!-- Opening a HTML form -->
         <form name="calculator">
            
         <!--User fills out form here -->
        
         <br />
         <input type="radio" name="programType" id="basicProgram" value="Basic" />Blockchain @ 1000
         <br>
         <br>
         <input type="radio" name="programType" id="proProgram" value="Pro" checked /> Autonomous Chain @ 2000
         <br>
         <br>
         <input type="radio" name="programType" id="immProgram" value="Imm" checked /> Immersive Experience @ 3000
         <br>
         <br>
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
         <input type="button" value="Total" onclick="javascript:calcVat();">
         
         <br>
         <br>
         VAT: <input type="text" name="VAT">
         <br>
         <input type="button" value="VAT" onclick="javascript:calcTotal();">
         <br><br>
        
        
         </form>




     </body>

</html>
