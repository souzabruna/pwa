<?php
	require("../model/ClasseFornecedor.php");
    $fornecedor = new fornecedor();
    $resultado=$fornecedor -> mostrar_fornecedor();
?>