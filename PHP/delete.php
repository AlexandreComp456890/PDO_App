<?php   
    include 'pdo.php';
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["codigo"])){
        $id = $_GET["codigo"];

        $stmt = $pdo->prepare("DELETE FROM pessoa WHERE CODIGO = ?");
        $stmt->bindParam(1, $id);
        $stmt->execute();

        try {
            if ($stmt->execute()) {
                header("Location: http://localhost:81/CRUD?successD=1");    //Tráz de volta para a pagina index.php com o valor atualizado.
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
        <form action="../index.php" method="get">
            <button class='btn btn-outline-light' type="submit">Voltar</button>
        </form>
    </body>
</html>