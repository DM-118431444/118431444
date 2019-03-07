<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Mulcahys Consulting Services</title>
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
  width: 18%;
  height: 570px; /* only for demonstration, should be removed */
  background: #615d6c;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: circle;
  padding: 0;
}    
.btn-group .button {
  background-color: lightblue; /* Green */
  border: 1px solid green;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width: 200px;
  display: block;
}

.btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: #3e8e41;
}
            
            
        </style>
        
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
    
        
        <div class="header">
  <h1>Mulcahys Consulting Services</h1>
</div>
     <div class="topnav">
  <a href="http://localhost:8000/ConsultingServices.php">About Consulting</a>
  <a href="http://localhost:8000/eBus1.php">Services</a>
  <a href="http://localhost:8000/Welcome.php">Back to Welcome Page</a>
      
</div>
         <nav>
             
    <ul>
            <div class="btn-group">
  <button onclick="Function1()" class="button">Learn about Blockchain</button>
  <button onclick="Function2()" class="button">Learn about Autonomous Things</button>
  <button <a onclick="Function3()" class="button">Learn about Immersive experience</button>
  
</div>
       
    </ul>
  </nav>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        
     
        
        <script>
        function Function1() {
  document.getElementById("demo1").innerHTML = "A blockchain, is a growing list of records, called blocks, which are linked using cryptography. Each block contains a cryptographic hash of the previous block, a timestamp, and transaction data By design, a blockchain is resistant to modification of the data. It is an open, distributed ledger that can record transactions between two parties efficiently and in a verifiable and permanent way For use as a distributed ledger, a blockchain is typically managed by a peer-to-peer network collectively adhering to a protocol for inter-node communication and validating new blocks. Once recorded, the data in any given block cannot be altered retroactively without alteration of all subsequent blocks, which requires consensus of the network majority. Although blockchain records are not unalterable, blockchains may be considered secure by design and exemplify a distributed computing system with high Byzantine fault tolerance. Decentralized consensus has therefore been claimed with a blockchain";
  document.getElementById("demo2").innerHTML = "";
  document.getElementById("demo3").innerHTML = "";
  
}
      function Function2() {
  document.getElementById("demo2").innerHTML = " Autonomous things  is an emerging term for the technological developments that are expected to bring computers into the physical environment as autonomous entities without human direction, freely moving and interacting with humans and other objects. Self-navigating drones are the first AuT technology in deployment. It is expected that the first mass-deployment of AuT technologies will be the autonomous car, generally expected to be available around 2020. Other currently expected AuT technologies include home robotics (e.g., machines that provide care for the elderly, infirm or young), and military robots ";
  document.getElementById("demo1").innerHTML = "";
  document.getElementById("demo3").innerHTML = "";
}
      function Function3() {
  document.getElementById("demo3").innerHTML = "Immersion into virtual reality is a perception of being physically present in a non-physical world. The perception is created by surrounding the user of the VR system in images, sound or other stimuli that provide an engrossing total environment. ";
  document.getElementById("demo2").innerHTML = "";
  document.getElementById("demo1").innerHTML = "";
}
        
        function Function4() {
            
        }
        </script>
        
        
        <a href="https://blockgeeks.com/guides/what-is-blockchain-technology/">Click to learn more about Blockchain</a><br>
        <a href="https://insights.thirdrepublic.com/autonomous-things-what-they-why-matter-today/">Click to learn more about Autonomous Things</a><br>
        <a href="https://simplicable.com/new/immersive-experience">Click to learn more about Immersive experience</a><br>
        <?php
        // put your code here
        ?>
    </body>
</html>
