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
            <div class="header-sidebar">
                <a href="../../Initial/index.html">
                    <img src="../../Assets/back-icon.svg" alt="Voltar" width="57px" height="52px">
                </a>
            </div>
            <div class="profile">
                <img src="../../Assets/user-icon.svg" alt="Perfil" width="110px" height="110px">
                <h3>NOME DO USUARIO</h3>
            </div>
            <button id="logout-button">SAIR</button>
        </div>
        <div class="content">
            <header>
                <img src="../../Assets/logo-edit.svg" alt="foto de um lápis">
                <h1>EDITAR DADOS</h1>
            </header>
            <div class="content2">
                <form action="">
                    <label for="name">NOME:</label>
                    <input type="text" name="name">
                    <label for="city">CIDADE:</label>
                    <input type="text" name="city">
                    <label for="district">BAIRRO:</label>
                    <input type="text" name="district">
                    <label for="address">RUA:</label>
                    <input type="tel" name="address">
                    <label for="telephone">TELEFONE:</label>
                    <input type="tel" name="telephone">
                    <label for="mail">E-MAIL:</label>
                    <input type="email" name="mail">
                </form>
            </div>
            <footer>
                <div class="two-button">
                    <button>CANCELAR</button>
                    <button>SALVAR</button>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>