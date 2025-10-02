<?php global $edad1;
include("../includes/header.php");
include("../config/config.php");
?>
<body>
    <main>
        <div>
            <h1>Bienvenid@ a mi página web</h1>
            <h2>Hola, soy <?php echo $nombre?> :)</h2>
            <h3>Vivo en <?php echo $ciudad?> y tengo <?php echo $edad?> años</h3>
            <p>Fecha: <?php echo $fecha?></p>
            <p>Hora: <?php echo $hora?></p>
        </div>
    </main>
    <?php include("../includes/footer.php") ?>
</body>

<style>
    body{
        background-color: #343477;
    }
    main{
        display: flex;
        align-items: center;
        height: 100vh;
    }
   div{
       border-radius: 15px;
       background-color: rgba(213, 213, 243, 0.85);
       text-align: center;
       width: 30%;
       margin:auto;
       padding:2% 0;
   }
</style>


