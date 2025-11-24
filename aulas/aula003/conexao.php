<?php 
   $hostlocal= "localhost";
   $usuariolocal = "root";
   $senhalocal = "";
   $nomedb = "pessoas";

   $mysqli =  new mysqli($hostlocal,  $usuariolocal,  $senhalocal,    $nomedb );

   if($mysqli -> connect_errno){
   die("Falha ao conectar");
   }
   else{
    echo"conectado com sucesso ao banco";
   }

?>