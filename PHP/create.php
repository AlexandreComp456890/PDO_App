<?php
    include 'pdo.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $dataArray = array($_POST["nome"], $_POST["nsocial"], $_POST["cpf"], 
                $_POST["email"], $_POST["endereco"], $_POST["sexo"],);

        $stmt = $pdo->prepare("INSERT INTO pessoa(nome, nome_social, cpf, email, endereco, sexo) VALUES(?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1,$dataArray[0]);
        $stmt->bindParam(2,$dataArray[1]);
        $stmt->bindParam(3,$dataArray[2]);
        $stmt->bindParam(4,$dataArray[3]);
        $stmt->bindParam(5,$dataArray[4]);
        $stmt->bindParam(6,$dataArray[5]);

        try {
            if ($stmt->execute()) {
                header("Location: http://localhost:81/CRUD?successC=1");    //Tráz de volta para a pagina index.php com o valor atualizado.
                exit();
            } else {
                echo "<h2>Erro ao inserir usuário.</h2>";
            }
        } catch (PDOException $e) {
            echo "<h2>Erro: " . $e->getMessage() . "</h2>";
        }
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
            <label for="nome">Nome: </label>
            <input type="text" name="nome" required><br>

            <label for="Social">Nome Social: </label>
            <input type="text" name="nsocial" required><br>

            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" required><br>

            <label for="email">Email: </label>
            <input type="email" name="email" required><br>

            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" required><br>

            <label for="sexo">Sexo: </label>
            <label>
                <input type="radio" id="masculino" name="sexo" value="M">
                Masculino
            </label>
            <label>
                <input type="radio" id="feminino" name="sexo" value="F">
                Feminino
            </label>
            <label>
                <input type="radio" id="outro" name="sexo" value="O">
                Outro
            </label><br>
            

            <input type="submit" class='btn btn-outline-light' value="Cadastrar">
        </form>
        <form action="../index.php" method="get">
            <button class='btn btn-outline-light' type="submit">Voltar</button>
        </form>
    </body>
</masculino>