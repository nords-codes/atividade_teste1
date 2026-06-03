<?php

    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    $conn = new mysqli($host,$user,$pass,$db);

    if($conn->connect_error){
        die("Erro na Conexão");
    }else{
        echo ("<p> DB: ok </p>");
        //o echo funciona como um log no java script ele serve para mostrar as coisas no site como no exemplo que usamos para mostrar quando o banco de dados estivesse ok 
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";

        $resultado = $conn -> query($sql);

        if ($resultado -> num_rows > 0){
            $_SESSION["usuario"] = $usuario;
        
            header("Location: public/home.php");
            //o header funciona para controlar uma requisição e mandar para outro lugar nesse codigo onde a pessoa aperta em sair e vai para a pagina home
            exit();
           
        }else{
             $erro = "Usuario ou senha invalidos.";
        }
    }



?>