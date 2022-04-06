<html>
<head>
<style>
body {
  background-image: url("rice2.jpg");
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
 

</style> 
   </head>
   
   <body>

<body style="background-color:powderblue;">


      <?php
         
         // define variables and set to empty values
         $forwardprimer = $reverseprimer = $primerid = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $forwardprimer = test_input($_POST["primer"]);
            $reverseprimer = test_input($_POST["primer"]);
            $primerid = test_input($_POST["primerid"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
     <h1 style="color:#f0f3f4"><center>RICE DATABASE</center> </h1> 
      

      
      <form method = "post" action = "barthii.php">

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
