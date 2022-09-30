<?php
    include 'koneksi.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $USERNAME       = $_POST['username'];
        $EMAIL          = $_POST['email'];
        $PASSWORD       = $_POST['password'];
        $NOTELP         = $_POST['notelp'];
        
        $query = "INSERT INTO t_user VALUES(
            'NULL',
            '$USERNAME',
            '$NOTELP',
            '$EMAIL',
            '$PASSWORD'
        )";
        
        if(mysqli_query($conn,$query)){
            header("location:../index.php#open-modal-login");
        }else{
            echo "Data Gagal Ditambahkan";//menampilkan
        }
    }

?>