<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Movelzaum - Tela Inicial</title>
</head>

<body>
    <div class="main">
        <div class="sidebar">
            <a href="../Profile/index.php">
            <img src="../Assets/profile-image.svg" alt="Perfil" width="110px" height="110px">
            </a>
            <h3>João Vitor</h3>
            <a href="../Profile/index.php">
                <button id="logout-button">
                    Voltar
                </button>
            </a>
        </div>
        <div class="content">
            <div id="image">
            <img src="../Assets/Image-Preferences.svg" alt="Preferences">
            <h1>Preferências</h1>
            </div>

            <div class="preferences">
                <p><strong>Notificação por E-mail</strong></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label>
            </div>

            <div class="preferences">
                <p><strong>Modo Escuro</strong></p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label>
            </div>

            <div class="div_btn">
                <button class="buttons">Cancelar</button>
                <button class="buttons">Salvar</button>

            </div>

        </div>
    </div>
</body>

</html>