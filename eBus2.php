<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate The mobile number session variable to a text box
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
   body {
  background-color: lightblue;
  }
  td {
 font-family: verdana;
 font-size: 20px       
  }  
  
  .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}



input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
      
        </style>
        <title>eBusiness 2</title>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10"
                            <tr>
                            <td><b></b></td>
                        <h1><b><center>Enter Your Details Below</center></b></h1>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required=""/></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" required=""/></td>
                        </tr>
                        <tr>
                            <td>PIN:</td>
                            <td><input type="password" id="txtPassword" maxlength="4" name="txtPassword" value="" required=""/></td>
                        </tr>
                        <tr>
                          
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
              
                <center>
                    <input type="submit" name="btnContinue" id="btnContinue" class="button" onclick="" value="Proceed with Purchase" /> 
                </center>
        </div>
      </form>
      </body>
            </html>
