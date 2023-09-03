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
    <title>Movelzaum - Faça doações</title>

    <script src="../static/js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {});

        function processa_login() {
            var formDados = {
                login: $("#e-mail").val(),
                senha: $("#senha").val(),
            };

            $.ajax({
                type: "POST",
                url: "../Controller/usuario_controller.php?acao=logar",
                data: formDados,
                dataType: "json",
            }).done(function(dataRetorno) {
                if (dataRetorno.erro == 0) {
                    window.location.href = dataRetorno.url;
                } else {
                    alert(dataRetorno.msg);
                }
                console.log(dataRetorno);
            });

        }
    </script>
</head>

<body>
    <div class="main">
        <div class="contentLeft">
            <img id="logo" src="./Assets/logo.svg" alt="Logo Movelzaum">
            <div class="textContent">
                <span id="title">Quem somos?</span>
                <span id="text">
                    Somos a ponte que une doadores e instituições, tornando a doação de móveis mais simples e impactante. Transformamos vidas, revitalizamos lares e promovemos a solidariedade em um só lugar.
                </span>
                <img src="./Assets/home.svg" alt="Foto de mãos unidas">
            </div>
        </div>
        <div class="contentRight">
            <div class="login">
                <div class="titleLogin">
                    Acesse a plataforma para realizar a sua doação!
                </div>
                <label>E-mail</label>
                <input type="text" id="e-mail" name="e-mail">
                <label>Senha</label>
                <input type="password" id="senha" name="senha">
                <a href="../View/Initial/index.php">
                    <input type="button" value="Entrar" id="entrar_button">
                </a>
                <a href="./ResetPassword/index.php" style="text-decoration: none;">
                    <span class="hover-effect">Esqueceu a senha?</span>
                    <a href="./Register/index.php" style="text-decoration: none;">
                        <span class="hover-effect">Cadastre aqui!</span>
                    </a>
            </div>
        </div>
    </div>
</body>

</html>