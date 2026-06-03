<br>

<h2>usuarios cadastrados</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Usuario</th>
    <th>Senha</th>
</tr>
</table>

<?php
$sqlUsuario = "SELECT * FROM users";

$resultadoUsuario = $conn -> query($sqlUsuario);
//query funciona para transportar algo nessa aplicação usamos para passar o resultado de usuarios para o banco na aba de usuarios
while($linha = $resultadoUsuario -> fetch_assoc()){
    //o fetche_assoc que funciona para associar uma linha do banco de dados para uma arrey para acessar os dados de forma mais simples no codigo usamos ele para que pudesse puxas asinormações do banco e jogasse na tabela
    "<tr>
        <th>". $linha["id"] . "</th>
        <th>". $linha["username"] . "</th>
        <th>". $linha["password"] . "</th>
        </tr>"
}
?>