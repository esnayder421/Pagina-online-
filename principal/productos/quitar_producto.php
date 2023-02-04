<?php
session_start();
    if (isset($_GET['id'])){
        $id = $_GET['id'];
         
      
       
          foreach ($_SESSION['carrito'] as $indice=>$productos ) {
            
            if ($id==$productos['id_producto']) {
            
              unset($_SESSION['carrito'][$indice]); 
              
            }
           
            

        }  
       
        
            
        
    }           
  
     
   header("Location: pago_carrito.php");
?>