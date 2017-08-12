<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileImage" content="img/img-156x156.png">
     <meta name="msapplication-TileColor" content="#2F3BA2">

    <title> LEAD</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    
</head>

<body>

    <div class="brand">LEAD</div>
  
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-sm-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        
                        <div class="login">
						<h2>Login</h2>
                        <div align="center">

        <form name="UsuarioAdd" method="POST" action="index.php" >

            <table>

            <tr>
                <td>E-mail: </td> <td><input type="email" name="email" placeholder="email@email.com"></td>
            </tr>

            <tr>
                <td>Senha: </td> <td><input type="password" name="senha"></td>
            </tr>

            <tr>
                <td><input type="submit" value="entrar"></td>
            </tr>

            <td><a href="CadastroUser.php">Cadastre-se</a></td></td>

            </tr>

            </table>

        </form>
					</div>	
                            
                        </div>
                        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require("/../controller/VerificaLogin.php");
}
?>

                        
</body>

</html>
