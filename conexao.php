<?php
define('HOST', '108.179.252.45:3306');
define('USUARIO', 'laudos39_admin');
define('SENHA', 'EcGAZ)u?V2SH');
define('DB', 'laudos39_enquete');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>