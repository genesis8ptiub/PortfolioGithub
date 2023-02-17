<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link href="./images/LOGO_GENESIS_8.0-removebg-preview.png" rel="icon" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- CSS Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/styles2.css" />

    <title>Genesis 8.0</title>
</head>

<body>
    <div class="container-content mt-4">
        <h1 id="hi">Hi, <span style="color: rgb(224, 127, 127);"><?php echo $_SESSION['nama_maba']; ?></span> !</h1>
        <div class="main-content" >
            <h2 class="fs-5">
                Terima kasih telah mengikuti Genesis 8.0 <br /> Selamat Anda dinyatakan <br />
            </h2>
            <span style="display: block;">LULUS!</span>
            <span style="font-size: 100px; ">&#128525;</span>
        </div>
        <h4 class="mt-4">Silakan download sertifikat kelulusan di bawah ini</h4>
        <div class="d-grid mb-4 gap-2 d-sm-flex justify-content-center">
            <?php
            include 'connect.php';

            $id_maba = $_SESSION['id_maba'];

                // file Genesis 
                $selectGenesis = "SELECT * FROM `tb_kelulusan`";
                $resultGenesis = $conn->query($selectGenesis);

                while($rowGenesis = $resultGenesis->fetch_object()){
                    if ($rowGenesis->id_maba === $id_maba) {
                        // echo "masuk if";
                        $pdfGenesis = $rowGenesis->berkas;
                        $pathGenesis = $rowGenesis->direktori;
                    }
                }

                // file LKMM-TD
                $selectLKMM = "SELECT * FROM `tb_lkmmtd`";
                $resultLKMM = $conn->query($selectLKMM);

                while($rowLKMM = $resultLKMM->fetch_object()){
                    if ($rowLKMM->id_maba === $id_maba) {
                        // echo "masuk if";
                        $pdfLKMM = $rowLKMM->berkas;
                        $pathLKMM = $rowLKMM->direktori;
                    }
                }

            ?>  
            <a href=".<?php echo $pathGenesis.$pdfGenesis ?>" class="btn" onClick="alert('Memulai Download ?')">Genesis</a>
            <div class="vr"></div>
            <a href=".<?php echo $pathLKMM.$pdfLKMM ?>" class="btn" onClick="alert('Memulai Download ?')">LKMM-TD</a>
        </div>

        <div class="bottom-content my-3">
            <a href="./index4.php" class="text-decoration-none">Next <i class="bi bi-arrow-bar-right"></i></a>
        </div>
        <p>*jika terdapat kendala, bisa hubungi SPV masing-masing*</p>
    </div>
</body>

</html>