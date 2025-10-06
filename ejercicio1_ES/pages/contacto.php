<?php
include("../includes/header.php");
?>
<body>
<main>
    <div class="contacto">
        <h1>Contacto</h1>

            <form action="#" method="post">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="correo">Correo:</label><br>
                <input type="email" id="correo" name="correo" required><br><br>

                <label for="Mensaje">Comentarios:</label><br>
                <input type="text" name="mensaje"><br><br>

                <button type="submit">Enviar</button>
            </form>
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
        min-height: 95vh;
    }
    div{
        border-radius: 15px;
        background-color: rgba(213, 213, 243, 0.85);
        text-align: center;
        width: 40%;
        margin:auto;
        padding:2%;
    }
    input, select {
        width: 60%;
        max-width: 100%;
        box-sizing: border-box;
        border:1px solid #343477;
        border-radius: 10px;
        background-color: #efefff;
    }
    button{
        padding:1% 3%;
        border:1px solid #343477;
        border-radius: 10px;
        background-color: #efefff;
    }
</style>