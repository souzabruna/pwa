<?php
require_once ('ClasseConexao.php');

class Pagamento
{
	
	private $insere;
	private $result;


	function __construct(){
      $objConnection = new Conexao();
   }


	public function inserir($nome)
	{
		
       
		$insere= "insert into fpagamento(nome) values ('$nome')";
		$result=mysql_query($insere);
   
		if($result)
		{
			return "sucesso";
		}
		else
		{
			mysql_error();
		}
	} 
	public function mostrar_pagamento()
	{
		$mostrar="select * from fpagamento ORDER BY nome ASC";
		$resultado=mysql_query($mostrar);
		return $resultado;
	}
}