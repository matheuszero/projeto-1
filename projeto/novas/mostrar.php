     <?php
        $host = "localhost";
        $usuario = "";
        $senha = "";
        $bd = "";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM Cadastro_produtos";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT , , , , , , preco FROM ") or die(mysqli_error($strcon));
        $re = mysqli_fetch_array($name);
        while($dados = mysqli_fetch_array($resultado)): ?>
        
        <?php
        $codigo = $dados[''];
        $cor = $dados[''];
        $marca = $dados[''];
        $numero = $dados[''];
        $quantidade = $dados[''];
        $preco = $dados['preco'];
        echo "<tr>
                
                <td>".$marca."</td>
                <td>".$cor."</td>
                <td>".$numero."</td>
                <td>R$ ".$preco."</td>
                <td>.$setor.</td>
                <td>".$quantidade."</td>
                <td><a href='bd/venda.php?id=".$codigo."'><i class='fa fa-2x fa-shopping-cart sr-icons' title='Vender Produto'></i></a></td>
                
            </tr>";
        ?>
        <?php
        endwhile;
        mysqli_close($strcon);
        ?>