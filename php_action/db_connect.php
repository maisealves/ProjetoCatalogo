<?php

        //host
         $servername = "localhost";
        //usuario
         $username = "root";
        //senha
         $password = "";
        //database
         $db_name = "catalogo_virtual";
         
   
            $connnect =  mysqli_connect($servername, $username, $password, $db_name);
             
              if(mysqli_connect_errno()):
                  echo "Erro ao se conectar com o banco".mysqli_connect_error();
              endif;
              
?>