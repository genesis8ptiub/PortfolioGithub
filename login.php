<?php 

session_start();
include 'connect.php';

if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = 1;

    $checkuser = mysqli_query($conn, "Select * from tb_mahasiswabaru where user_maba = '$username' and pass_maba = '$password'");

    if (mysqli_num_rows($checkuser) === 1) {
        $row = mysqli_fetch_assoc($checkuser);
        // print_r($row);

        if ($row['user_maba'] === $username && $row['pass_maba'] === $password) {
            $_SESSION['user_maba'] = $row['user_maba'];
            $_SESSION['nama_maba'] = $row['nama_maba'];
            $_SESSION['id_maba'] = $row['id_maba'];
            if ($row['status_lulus'] == $status) {
                echo '<script language = "javascript">
                alert("Berhasil Login."); document.location="index2.php" </script>';
                exit();
            }else {
                echo '<script language = "javascript">
                alert("Berhasil Login."); document.location="index3.php" </script>';
                exit();
            }
        }else {
            header("Location: index.php?error=Incorect Username or Password");
            exit();
        }
    } else {
        header("Location: index.php?error=Incorect Username or Password");
    }
    

    // echo '<script language = "javascript">
    //     alert("Anda Tidak berhasil Login!."); document.location="index.php"; </script>';

}

    // if (isset($_POST['login'])) {
        
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     $resultuser = mysqli_query($conn, "Select * from tb_mahasiswabaru where user_maba = '$username'");

        // if ( mysqli_num_rows($result) === 1) {
            
        //     $row = mysqli_fetch_assoc($result);
        //     if (password_verify($password, $row["pass_maba"]);) {
        //         echo '<script language = "javascript">
        //             alert("Anda berhasil Login!."); document.location="index2.php"; </script>';
        //         header("Location: index.php");
        //         exit();
        //     }

        // }
    //     echo '<script language = "javascript">
    //         alert("Anda berhasil Login!."); document.location="index2.php"; </script>';

    // }

?>