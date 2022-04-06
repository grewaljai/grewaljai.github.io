<html>
<head>
<style>
body {
  background-image: url("");
}
.dropbtn {
 background-color:  #fbfcfc ;
 color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color:  #d7bde2 ;
  min-width: 190px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:  #d1f2eb ;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
 
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #d1f2eb;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style> 
   </head>
   
   <body>

<body style="background-color:powderblue;">


      <?php
         
         // define variables and set to empty values
         $forwardprimer = $reverseprimer = $primerid = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $forwardprimer = test_input($_POST["primer1"]);
            $reverseprimer = test_input($_POST["primer2"]);
            $primerid = test_input($_POST["id"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
  
     <h1 style="color:#f0f3f4"><center>RICE DATABASE</center> </h1> 
      
<p style="color:pink;">Rice  also known as Oryza sativa (Asian rice). Ii  is the most widely consumed staple food  in Asia and Africa. It is the agricultural commodity with the third-highest worldwide production 741.5 million tonnes in 2014 .
Nutrient content of rice  per 100g portion,Protein 7.1(g),Energy 1,528 (KJ),Fat 0.66(g), Carbohydartes 80(g), Fiber 1.3(g), Sugar 0.12(g), Water 12(g).</p>
      
      <form method = "post" action = "sativa.php">

<table width="60%" border="0"align="center">
        
     

            <tr>
            
               <td><font color="    #f0f3f4    ">FORWARD PRIMER</td> 
               <td><input type = "text" name = "primer1"></td>
            </tr>
            
            <tr>
               <td><font color="    #f0f3f4    ">REVERSE PRIMER</td>
               <td><input type = "text" name = "primer2"></td>
            </tr>
            
            <tr>
               <td><font color="   #f0f3f4  "> PRIMER ID</td>
               <td><input type = "text" name = "id"></td>
            </tr>
            
            
  
  <br><br>
  

 <tr>
            
               <td>
                  <input type = "submit" name = "submit" value = "Submit" align="center"> 

                  
               </td>
            </tr>
         </table>
      </form>
      
      <?php
         


         echo $FORWARD;
         echo "<br>";
         
         echo $REVERSE;
         echo "<br>";
        
      ?>
  
<form>
  <form action="indexhome.php" method="get">
 <input type="button" value="Go back!" onClick="history.go(-1);">
</form>

   </body>
</html>
