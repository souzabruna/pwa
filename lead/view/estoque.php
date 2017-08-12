<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    
</head>

<body>

            <table>
             <tr>
             <?php
                          require_once("../controller/buscarproduto.php");
                        ?>
              <?php
                       while($linha=mysql_fetch_array($resultado)) 
                            {
                        ?>
                                <td><?php echo $linha['id']?><?php echo $linha['nome']; ?></td>
                       
                          <?php  }
                        ?>
                        </tr>

            </table>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
