<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
                .header {
  background-color: #F1F1F1;
  text-align: center;
  padding: 20px;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: lightblue;
}


.header {
  background-color: lightblue;
  padding: 20px;
  text-align: center;
}


.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 18px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
nav {
  float: left;
  width: 25%;
  height: 570px; /* only for demonstration, should be removed */
  background: #615d6c;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}   

p {
    font-family: verdana;
    font-size: 15px
    
        
}
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
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button1:hover {
  background-color: #008CBA;
  color: white;
}

      
            
        </style>
        <meta charset="UTF-8">
        <title>Mulcahy LTD Consulting Home Page</title>
    </head>
    <body>
         <div class="header">
  <h1>Mulcahy LTD Consulting Services</h1>
</div>
          <div class="topnav">
  <a href="http://localhost:8000/ConsultHomePage.php">About Consulting</a>
  <a href="http://localhost:8000/eBus1.php">Services</a>
  <a href="http://localhost:8000/Welcome.php">Back to Welcome Page</a>
</div>
        <h2>About Us</h2><br>
        <p>Mulcahy LTD helps transform the world's most important businesses into vigorous, agile organizations that anticipate the unpredictable, adapt rapidly to disruption and outcompete their opposition. We work with clients who do not hide from the future but want to define it, clients with high potential and high ambition, determined to adapt and become enduring winners.</p>
        <a <button class="button button1" href="http://localhost:8000/ConsultingServices.php" >Learn more</button></a>
            
            <?php
        // put your code here
        ?>
    </body>
</html>
