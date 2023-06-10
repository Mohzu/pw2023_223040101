<?php

    require "koneksi.php";
    function register($data){
        global $conn;
    
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
        // Cek apakah username sudah terdaftar
        $query = "SELECT username FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>
                alert('Username sudah terdaftar!');
                </script>";
    
            return false;
        }
    
        // Cek konfirmasi password
        if ($password != $password2) {
            echo "<script>
            alert('Password tidak sama');
            </script>";
    
            return false;
        }
    
        // Enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        // Tambahkan user baru ke database
        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }


?>
