<html>
    <head>
        <title>EBusiness 3</title>
        <style>
             body {
  background-color: lightblue;
  }
  
  p{
      font-family: verdana;
      font-size: 25px;
      color: white;
      text-align: center;
  }
  h1{
      font-family: verdana;
      
  }
            
        </style>
    </head>
    
    <body>
    <center><b> <h1>Purchase Receipt</h1></b></center>
    <p>
  <?php
       
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        ?>
        </p>
    </body>
    </html>


