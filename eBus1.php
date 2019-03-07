<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    
    <style>
        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: green; 
  color: white; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}

  .button2 {
  background-color: white; 
  color: red; 
  border: 2px solid #FF0000;
  }
  .button2:hover {
  background-color: #f44336;
  color: white;
}
  
  .button3 {
  background-color: #CCCC00; 
  color: white; 
  border: 2px solid #FFFF00;
  text-color: black;
}
.button3:hover {
  background-color: #FFFFFF;
  color: #999900;
}
  td {
 font-family: verdana;
 font-size: 20px       
  }  
  body {
  background-color: lightblue;
  
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
        
    </style>
    
    
    
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                <h1><center>Shop Calculator</h1></center>
        <hr />
        <center><h1>Select a Consulting Service</h1></center>
           
        <center>
                    <table cellspacing="10">
            <tr>
                            <td>Blockchain @$1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" required=""/></td>
            </tr>
            <tr>
                            <td>Autonomous Things (Robots) @$2000</td>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" required=""/></td>
                        </tr>             
            <tr>
                            <td>Immersive Experience @$3000</td>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" required=""/></td>
                        </tr>            
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b><h1>Amount</h1></b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly required="" /></td>
        </tr>
        <tr>
                    <td>-Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly required=""/></td>
        </tr>
                <tr>
                    <td>+VAT @20%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly required=""/></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly required="" /></td>
                </tr>
            </table>
        </center>
 
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" class="button button1" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" class="button button2" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" class="button button3" onclick="" value="Proceed"/>
        </center>
    </form>
</div>
     
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var Autonomous = parseFloat(document.getElementById('Autonomous').value);
            var Immersive = parseFloat(document.getElementById('Immersive').value);
         
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('Blockchain').checked) {
                document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calculation(subAmount);
             
            }
        else if (document.getElementById('Autonomous').checked) {
                document.intCalc.txtSubTot.value = Autonomous;
                subAmount = Autonomous;
                 calculation(subAmount);
            
            }
        else if (document.getElementById('Immersive').checked) {
                document.intCalc.txtSubTot.value = Immersive;
                subAmount = Immersive;
                 calculation(subAmount);
            }
        } 
     
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .10);
           var vatCalc = parseFloat(subTotal * .20);
           var total = parseFloat(subTotal - discCalc + vatCalc);
        
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc;
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
       
        }
//   

    </script>
 
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
    
    <script>
    function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
    
    </script>
    
</form>

</body>

</html>
