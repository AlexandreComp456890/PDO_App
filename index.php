<?php
    include 'pdo.php';
    $sql = "SELECT * FROM pessoa";
    $result = $pdo->query($sql);
?>
<DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <a href="create.php">Criar novos usuarios</a>
        <h2>Lista de Usuários</h2>

    </body>
</html>
<?php
    echo "<table>";
    echo "<tr><th>Id</th><th>Nome</th><th>Email</th><th>Opções</th></tr>";
    while($row = $result->fetch(PDO::FETCH_OBJ)){
        echo "<tr><td>". $row->CODIGO ."</td>"."<td>" . $row->NOME. "</td>" . "<td>" . $row->EMAIL. "</td>";
        echo "<td><a href='update.php?id=" . $row->CODIGO ."'>Editar</a>";
        echo " | <a href='delete.php?id=" . $row->CODIGO ."'onclick= \"return confirm('Tem certeza imbecil?');\">Excluir</a></td>";
        echo "</tr>";
    }
$pdo = null;
?>
