<?php
require_once ('ClasseConexao.php');

class Usuario
{
	
	private $insere;
	private $result;


	function __construct(){
      $objConnection = new Conexao();
   }


	public function inserir($nome,$cpf,$email,$senha,$telefone)
	{
		
		if (empty($nome) || empty($cpf) || empty($email) || empty($senha) || empty($telefone))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
       
		$insere= "insert into usuario(nome,cpf,email,senha,telefone) values ('$nome','$cpf','$email','$senha','$telefone')";
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
	public function Verificalogin($email,$senha)
	{
		$verificar_login="select * from usuario where email='$email' and senha='$senha';";
		$resultado_login=mysql_query($verificar_login);
		$valor=mysql_num_rows($resultado_login);
		if($valor == 1)
		{
			$linha=mysql_fetch_array($resultado_login);
			return "sucesso";
		}
		else
		{
			echo "<script type='text/javascript'>
			alert('usuário não cadastrado ou dados incorretos !');
			</script>";
			return "erro";
		}
	} 
	public function mostrar_usuario()
	{
		$mostrar="select * from usuario ORDER BY nome ASC;";
		$resultado=mysql_query($mostrar);
		return $resultado;
	}

}