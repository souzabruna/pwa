<?php
require_once ('ClasseConexao.php');

class Fornecedor
{
	
	private $insere;
	private $result;

	function __construct(){
      $objConnection = new Conexao();
   }


	public function inserir($nome,$cnpj,$endereco,$email,$telefone)
	{
		
		if (empty($nome) || empty($cnpj) || empty($email) || empty($endereco) || empty($telefone))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
       
		$insere= "insert into marca(nome,cnpj,email,endereco,telefone) values ('$nome','$cnpj','$email','$endereco','$telefone')";
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
	public function mostrar_fornecedor()
	{
		$mostrar="select * from marca ORDER BY nome ASC;";
		$resultado=mysql_query($mostrar);
		return $resultado;
	}
}