<?php
    include 'pdo.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $dataArray = array($_POST["codigo"] ,$_POST["nome"], $_POST["nsocial"], 
                $_POST["cpf"], $_POST["email"], $_POST["endereco"], $_POST["sexo"]);

        $stmt = $pdo->prepare("UPDATE pessoa SET nome= ?, nome_social= ?, cpf= ?, email= ?, endereco= ?, sexo= ? WHERE codigo= ?");
        
        $stmt->bindParam(1,$dataArray[1]);
        $stmt->bindParam(2,$dataArray[2]);
        $stmt->bindParam(3,$dataArray[3]);
        $stmt->bindParam(4,$dataArray[4]);
        $stmt->bindParam(5,$dataArray[5]);
        $stmt->bindParam(6,$dataArray[6]);

        $stmt->bindParam(7,$dataArray[0]);

        try {
            if ($stmt->execute()) {
                header("Location: http://localhost:81/CRUD?successU=1");    //Tráz de volta para a pagina index.php com o valor atualizado.
                exit();
            } else {
                echo "<h2>Erro ao alterar o usuário. Deu cagaço!</h2>";
            }
        } catch (PDOException $e) {
            echo "<h2>Erro: " . $e->getMessage(). "</h2>";
        }
        
    }else if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];

        $sql = "SELECT * FROM pessoa WHERE codigo = $codigo";
        $result = $pdo->query($sql);
        $usuario = $result->fetch(PDO::FETCH_OBJ);
    }else{
        echo "<h2>Nada encontrado!</h2>";
    }
?>

<DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../Style/style.css">
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <form method="post" action="">
            Código: <input type="text" readonly name="codigo" value="<?php echo $usuario->CODIGO; ?>"><br>
            Nome: <input type="text" name="nome" value="<?php echo $usuario->NOME; ?>"><br>
            Nome social: <input type="text" name="nsocial" value="<?php echo $usuario->NOME_SOCIAL; ?>"><br>
            CPF: <input type="text" name="cpf" value="<?php echo $usuario->CPF; ?>"><br>
            Email: <input type="email" name="email" value="<?php echo $usuario->EMAIL; ?>"><br>
            Endereço: <input type="text" name="endereco" value="<?php echo $usuario->ENDERECO; ?>"><br>
            Sexo: 
            <label>
                <input type="radio" name="sexo" value="M" <?php if ($usuario->SEXO == 'M') echo 'checked'; ?>>
                Masculino
            </label>

            <label>
                <input type="radio" name="sexo" value="F" <?php if ($usuario->SEXO == 'F') echo 'checked'; ?>>
                Feminino
            </label>
            <label>
                <input type="radio" name="sexo" value="O" <?php if ($usuario->SEXO == 'O') echo 'checked'; ?>>
                Outro
            </label><br>

            <input class='btn btn-outline-light' type="submit" value="Atualizar">
        </form>
        <form action="../index.php" method="get">
            <button class='btn btn-outline-light' type="submit">Voltar</button>
        </form>
    </body>
</html>
