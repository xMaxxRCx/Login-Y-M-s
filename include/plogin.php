<?php
if(isset($_POST[btn_in];)){
    $Usuario = $_POS['Usuario'];
    $Password =$_POST['Password'];

    $Consulta = "SELECT * FROM usuarios WHERE Nick = '$Usuario' and Password = '$Password'";
    if($resultado = $connect -> query($Consulta)){
    while($row = $resultado -> fetch_array()){
        $UserOk = $row['Usuario'];
        $PassOK = $row['password'];
    }
    $connect -> close();
    }
    if(isset($Usuario) && isset ($Password)){
        if($Usuario == $UserOk and $Password == $PassOK){
            $_SESSION['login'] = TRUE;
            $_SESSION['Usuario'] = $Usuario

            header("location:index2.php");
        }
        else{
            header("location:recuperar.html");
        }

    }

}
?>
