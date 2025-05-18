# PDO Simple Select Application

Atividade de Programação Web, desenvolver uma conexão PHP Data Objects (PDO) com base dos links 
<a href="https://www.devmedia.com.br/introducao-ao-php-pdo/24973?authuser=0">DevMedia</a>, 
<a href="https://www.php.net/manual/pt_BR/book.pdo.php?authuser=0">Site Official PHP</a>,
<a href="https://www.w3schools.com/php/php_mysql_connect.asp?authuser=0">W3Schools</a> e 
aplicações em sala de aula feitas no método Data Access Object (DAO).

## Exercícios

<h4>
1.a) Leia o artigo de P.D.O e responda: Qual a diferença de um D.A.O que o professor fez em sala de aula para um P.D.O?
</h4>
Um Data Access Object (DAO) é um padrão de software que define a interface para o acesso de dados, que isola a lógica de acesso da lógica de negócios, sendo muitas vezes, mais proximo do Modelo em MVC. Já o PHP Data Objects (PDO) é uma extensão de linguagem PHP, uma biblioteca por assim dizer, que oferece uma interface consistente para trabalhar com múltiplos bancos de dados, sendo mais flexível e escalável conforme a evolução do projeto.
<h4>
1.b) Agora que você entendeu o conceito. Adapte o código DAO.php implementado em sala de aula pelo professor para um PDO.php (não esqueça de atualizar acessos para todos os arquivos do CRUD).
</h4>
Implementação nesse repositório

## Instalação
<ol>
    <li>Para rodar esse programa você terá que ter <a href="https://www.php.net/downloads.php">PHP</a> e/ou <a href="https://www.apachefriends.org/pt_br/download.html">XAMPP</a> instalado em sua maquina;</li>
    <li>Assim que feita a instalação, vá para a pasta <b>etc/php</b> e encontre o arquivo <b>php.ini;</b></li>
    <li>Encontre as seguintes linhas;</li><br>


```bash
; extension=php_pdo.dll
; extension=php_pdo_mysql.dll
```
<li>Remova o marcador de comentário ( ; );</li><br>

```bash
extension=php_pdo.dll
extension=php_pdo_mysql.dll
```
<li>Vá até a pasta <b>etc/xampp/htdocs</b>, crie uma nova pasta e clone este repositório;</li><br>

```bash
# Example

cd path/to/xampp/htdocs
mkdir newFolder
cd newFolder

git clone https://github.com/AlexandreComp456890/PDO_App.git
```
</ol>

## Conteudo

<ul>
    <li>pdo.php - Cotém o código de conexão;</li>
    <li>index.php - Pagina principal.</li>
</ul>

