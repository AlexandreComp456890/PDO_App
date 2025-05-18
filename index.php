<?php
    include 'dao.php';
    $sql = "SELECT * FROM pessoa";
    $result = $conn->query($sql);
?>
<DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <a href="create.php">Criar novos usuarios</a>
        <h2>Lista de Usuários</h2>

    </body>
</html>
<?php
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID: ". $row["CODIGO"] . " Nome: " . $row["NOME"] . " Email: " . $row["EMAIL"];
            echo " | <a href='update.php?id=" . $row["CODIGO"] ."'>Editar</a>";
            echo " | <a href='delete.php?id=" . $row["CODIGO"] ."'onclick= \"return confirm('Tem certeza imbecil?');\">Excluir</a>";
            echo "<br>";
        }
    }else{
        echo "Nenhum usuario encontrado.";
    }
$conn->close();
?>
