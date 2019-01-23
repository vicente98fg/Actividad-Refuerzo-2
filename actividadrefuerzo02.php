<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="ar02.css" />
</head>
<body>
    
 <ul>

  <?php

   $array = array("Inicio","Blog","Videos","Contacto");
    foreach ($array as $valor) {
     echo "<li>$valor</li>";
   }
   
  ?>

 </ul>


</body>
</html>
