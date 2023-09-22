<?php
if ($_SERVER["REQUEST_METHOD"] ==="POST" ){
    extract($_POST);
    $hash = password_hash($contracena, PASSWORD_DEFAULT);

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");
    $result = $mysqli->query("INSERT INTO usuarios(email,contracena) values ('$email','$hash')");
    
    if($result){
        $stmnt = $mysqli-> query("SELECT * FROM usuarios WHERE email='$email'");

        if($stmnt->num_rows === 1){
            $resultado = $stmnt->fetch_assoc();
            session_start();
            $usuario = $_SESSION["user-data"] =$resultado;
            header("location: /views/dashboard.php");
        }

        
    } else {
        echo "Tenemos un error companero";
    }
}