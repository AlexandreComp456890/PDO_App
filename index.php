<?php
    include './PHP/pdo.php';
    $sql = "SELECT * FROM pessoa";
    $result = $pdo->query($sql);
?>
<DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./Style/style.css">
    <body>
        <a class='btn btn-outline-light' role='button' href="./PHP/create.php">Criar novos usuarios</a>
        <h2>Lista de Usuários</h2>
    </body>
</html>
<?php
    if (isset($_GET['successU']) && $_GET['successU'] == 1) {
        echo "<div style='color: green; font-weight: bold;'>Dados atualizados com sucesso!</div>";
    }
    if (isset($_GET['successD']) && $_GET['successD'] == 1) {
        echo "<div style='color: green; font-weight: bold;'>Usuário deletado com sucesso!</div>";
    }
    if (isset($_GET['successC']) && $_GET['successC'] == 1) {
        echo "<div style='color: green; font-weight: bold;'>Novo usuário criado com sucesso!</div>";
    }
    echo "<table>";
    echo "<tr><th>Id</th><th>Nome</th><th>Nome Social</th><th>CPF</th><th>Email</th><th>Endereço</th><th>Sexo</th><th>Opções</th></tr>";
    while($row = $result->fetch(PDO::FETCH_OBJ)){
        echo "<tr><td>". $row->CODIGO ."</td>"."<td>" . $row->NOME. "</td>" . "<td>" . $row->NOME_SOCIAL. "</td>" . "<td>" . $row->CPF. "</td>" . "<td>" . $row->EMAIL. "</td>" .
        "<td>" . $row->ENDERECO. "</td>" . "<td>" . $row->SEXO. "</td>";
        echo "<td><a class='btn btn-outline-light' role='button' href='PHP/update.php?codigo=" . $row->CODIGO ."'>Editar</a>";
        echo " <a class='btn btn-outline-light' role='button' href='PHP/delete.php?codigo=" . $row->CODIGO ."'onclick= \"return confirm('Tem certeza imbecil?');\">Excluir</a></td>";
        echo "</tr>";
    }
$pdo = null;
?>
