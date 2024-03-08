<?php
    require 'conection.php';
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE user = '$user'";
    $query = mysqli_query($conectionBD,$sql); // Corregido $conectionBD a $conection
    $asw = mysqli_fetch_array($query); // Corregido $consulta a $query
    if(mysqli_num_rows($query) == 1){
        if($asw['pass'] == $pass){
            header("location:../../crud/public/crud-cruceiro");
        }else{
             header("location:../login.php?valor=1");            
         }
    }
        else{
            header("location:../login.php?valor=2");            
        }
?>
