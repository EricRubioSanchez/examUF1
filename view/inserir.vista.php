<!-- Ex5 -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
	<script src="../view/bootstrap/js/bootstrap.min.js"></script>
	<!-- Fontawesome -->
	<link rel="stylesheet" href="../view/fontello/css/fontello.css">
	<!-- Estils propis -->
	<link rel="stylesheet" href="../view/styles.css">
	<script src="../view/scripts/prevent-resend-confirmation.js"></script>
	<title>Inserir Post</title>
	<link rel="shortcut icon" href="../view/images/favicon.ico" type="image/x-icon">
</head>

<body>
	<!-- Navbar -->
	<?php require_once '../controller/navbar.php' ?>
    <div class="container">
        <div>
        <h1 class="box">Inserir</h1>
        </div>
        <div class="principalBox">
            <form action="../Controlador/inserir.php" method="post">
                <br>
                <label>
                    Article:<input type="text" name="article" maxlength="50" minlength="3" required value="<?php if(isset($article)){echo $article;}?>">
                </label>
                <br>
                <?php if (!empty($errors)):?>
                    <div><?php
                        echo "<p class='errors resultado'>".$errors."</p>";
                        ?>
                    </div>
                <?php endif ?>
                <?php if (!empty($correcte)):?>
                    <div><?php
                        echo "<p class='correcte resultado'>".$correcte."</p>";
                        ?>
                    </div>
                <?php endif ?>
                <br>
                <div>
                    <input type="submit" value="Enviar" onclick="return confirm('Estàs segur que vols inserir?')">
                </div>
            </form>
                
        </div>
    </div>
</body>
</html>