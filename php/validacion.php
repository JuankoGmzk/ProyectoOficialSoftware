<?php
   include 'conexion.php';
   $Usuario = $_POST['Usuario'];
   $Contraseña = $_POST['Contraseña'];
   $query = "SELECT * FROM usuarios WHERE Usuario='$Usuario' AND Contraseña='$Contraseña'";
   $result = mysqli_query($conexion,$query) or die(mysqli_error());
   $num_row = mysqli_num_rows($result);
   $row = mysqli_fetch_array($result);
   if( $num_row >=1 ) {
   echo 'true';
   
   $_SESSION['Usuario']=$row['Usuario'];
       }
       else{
           echo 'false';
       }
 ?>
