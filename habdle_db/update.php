<?php
if ($_SERVER["REQUEST_METHOD"] ==="POST" ){
    extract($_POST);
    $photo =(($_FILES["photo"]["tmp_name"])? addslashes(file_get_contents($_FILES["photo"]["tmp_name"])) : NULL );

    require_once($_SERVER["DOCUMENT_ROOT"]. "/config/database.php");

    $stmnt = $mysqli->query("SELECT * FROM usuarios WHERE email ='$email'");

    if($stmnt->num_rows === 1){
        $result = $stmnt->fetch_assoc();


        if( $contracena == "" && $photo !== NULL){
            echo "Solo la foto";
            $resultado= $mysqli->query("UPDATE usuarios SET photo='$photo', name='$name',  phone='$phone', bio ='$bio', email='$email' WHERE id='$id'");
            header("location: /views/dashboard.php");
        }
        
        
        elseif($contracena !=="" && $photo !== NULL) {
            $hash = password_hash($contracena, PASSWORD_DEFAULT);
            echo "La contraseña y la foto se actualizaron";
        $resultado= $mysqli->query("UPDATE usuarios SET  photo='$photo',name='$name',  phone='$phone', bio ='$bio', email='$email', contracena='$hash'  WHERE id='$id'");
        header("location: /views/dashboard.php");
        }


        elseif($contracena !== "" && $photo == NULL){
            $hash = password_hash($contracena, PASSWORD_DEFAULT);
            var_dump($hash);
            echo "Solo la contrasena se actualizo";
            $resultado= $mysqli->query("UPDATE usuarios SET name='$name',  phone='$phone', bio ='$bio', email='$email', contracena='$hash' WHERE id='$id'");
            header("location: /views/dashboard.php");
        }
        
        else{
            $resultado= $mysqli->query("UPDATE usuarios SET name='$name',  phone='$phone', bio ='$bio', email='$email' WHERE id='$id'");
            header("location: /views/dashboard.php");
}}} else {
        echo "Tenemos un error companero";
    };