<?php

include("../db/conect.php");
//include serviu para incluir um codigo da pagina conect para essa pagina sem ter que copialo inteiro 
if(isset)
//isset serve para verificar se a variavel que sta sendo usada o if em questão realmente existe e se não da um valor null 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bem Vindo</h2>

    <p> Usuario Logado:

    <?php echo $_SESSION["usuario"];?>
    
    </p>
    <h2>Inserir Novo Usuario</h2>
     <form method="POST">

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">cadastrar</button>
    </form>

    <a href="logout.php">Sair</a>
</body>
</html>