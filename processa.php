<?php
include "conexao.php";

if(isset($_POST['button-processa'])){
    
    $apertado = $_POST['button-processa'];
    $sql = "UPDATE `tb_enquete` SET `$apertado`= (SELECT $apertado tb_enquete) +1";
    $result = mysqli_query($conexao,$sql);
    header('Location: index.php?voto');
    
}
else{
    echo "nao foi";
}

?>