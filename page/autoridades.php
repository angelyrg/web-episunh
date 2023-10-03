<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/autoridades2.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <title>Autoridades</title>
</head>
<body class="ctn-principal" >

    <!-- Menu -->
    <?php
        $current_page = 'autoridades';
        include("../includes/menu_navbar.php");
    ?>

    <main class="ctn-main">
        <div class="container text-white" >
            <div class="row my-5 py-5">
                <div class="col text-center ">
                    <h1>Nuestras autoridades</h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2" id="autoridades_lista"></div>
        </div>
        <!-- Footer -->
        <?php include("./../includes/footer.html"); ?>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/general.js"></script>
<script src="../assets/js/api/Api_autoridades.js"></script>
</html>