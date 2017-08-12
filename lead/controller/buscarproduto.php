<?php
	require("../model/ClasseProdutos.php");
    $produto = new produto();
    $resultado=$produto -> mostrar_porcategoria();
?>