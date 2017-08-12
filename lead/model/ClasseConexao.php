<?php

class Conexao
{
   function __construct(){
      $this->Conectar();
   }

	function Conectar()
	{
		$link=mysql_connect('localhost','root','');
	   if(!$link)	
	   {
	     die ('Não foi possível conectar ao Banco' . mysql_error());
	   }
	   if ( !mysql_select_db('bancoprojetolpw', $link))
	   {
	     echo "falha ao selecionar o banco de dados";
	   }
	}

}

?>
