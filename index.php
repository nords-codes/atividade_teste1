
<?php

  include("../db/conect.php")
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com php</title>
</head>
<body>
    <h2>Login com php</h2>

    <form method="POST">

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Entrar </button>
    </form>

    <?php
    if(isset($erro)){
        echo $erro;
    }

    ?>

</body>
</html>