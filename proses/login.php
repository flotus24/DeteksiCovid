<?php
    include "koneksi.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $USERNAME       = $_POST['username'];
        $PASSWORD       = $_POST['password'];
    
        $query = mysqli_query($conn,"SELECT * FROM t_user WHERE username = '$USERNAME' AND password='$PASSWORD'");
        
        $rows = mysqli_num_rows($query);
        
        if($rows > 0){
            while($data = mysqli_fetch_object($query)){
                $_SESSION["username"] = $data->username;
                $_SESSION["email"] = $data->email;
                $_SESSION["notelp"] = $data->no_telp;
            }
            header("location:../index.php#open-modal-logout");
        }else{
            header("location:../index.php#open-modal-login");
        }
    
    }
    
?>
