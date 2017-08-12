<?php
	require("../model/ClassePagamento.php");
    $pagamento = new pagamento();
    $resultado=$pagamento -> mostrar_pagamento();
?>