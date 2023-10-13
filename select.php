<?php
include "conexao.php";

$sql = "SELECT * FROM tb_enquete";
$result = mysqli_query($conexao, $sql);

if ($result) {
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
} else {
    echo json_encode(array('error' => 'Não foi possível buscar os dados.'));
}
?>
