<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link href="./images/LOGO_GENESIS_8.0-removebg-preview.png" rel="icon">

    <!-- CSS Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles.css" />

    <!-- Title -->
    <title>Genesis 8.0</title>
</head>

<body>

    <div class="container-content mt-4">
        <h1><span><img src="./images/LOGO_GENESIS_8.0-removebg-preview.png"></span> Sertifikat Kelulusan <br> <span>Genesis 8.0</span></h1>

        <?php if (isset($_GET['error'])) { ?>
                <p class="error" style="background-color: rgb(242, 222, 222, 0.4);
                    color: #69201d;
                    padding: 10px;
                    width: 90%;
                    border-radius: 8px;"
                ><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <form action="login.php" method="post">
            <div class="form-control-content">
                <input type="text" id="username" name="username" required autocomplete="off">
                <label>Nama</label>
            </div>

            <div class="form-control-content">
                <input type="password" id="password" name="password" required>
                <label>NIM</label>
            </div>

            <div class="btn-con">
                <button type="submit" class="btn-log" name="login">Login</button>
            </div>
        </form>
    </div>

    <div class="foot mt-2">
        <p>Develop by <a href="https://www.instagram.com/genesispti_ub/">Genesis 8.0</a></p>
    </div>

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./assets/script.js"></script>

</body>

</html>