<?php
    require("conexion.php");
    $link =  retornarConexion();

    $respuesta = mysqli_query($link,"SELECT * FROM usuario WHERE email = " ."'" . $_POST['email']."'"."AND password ="."'" . $_POST['password']."'");
    $row_cnt = mysqli_num_rows ($respuesta);

    if($row_cnt!=0){
        echo "ok";    
    }else{
        echo "onkt";
    }

?>