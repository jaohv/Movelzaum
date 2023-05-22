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
    <title>Movelzaum - Cadastro</title>
</head>

<body>

    <script src="../../static/js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {});

        function processa_cadastro() {
            var formDados = {
                datanascimento: $("#datanascimento").val(),
                nome: $("#nome").val(),
                email: $("#email").val(),
                senha: $("#senha").val(),
                confirmarsenha: $("#confirmarsenha").val(),
                endereco: $("#endereco").val(),
                perfil: 1,

            };

            $.ajax({
                type: "POST",
                url: "../../controller/usuario_controller.php?acao=cadastrar",
                data: formDados,
                dataType: "json",
            }).done(function(dataRetorno) {
                if (dataRetorno.erro == 0) {
                    alert(dataRetorno.msg)
                    window.location.href = dataRetorno.url;
                } else {
                    alert(dataRetorno.msg)
                }

            });

        }
    </script>
    <div class="container">
        <div class="main">
            <table>
                <form name="frm" action="" method="">
                    <label class="register_tit"> Nome: </label> <br> <input type="text" class="register_ins" name="nome" id="nome" /> <br><br>
                    <label class="register_tit"> Data de Nascimento: <br> </label> <input type="date" class="register_ins" name="data_nasc" id="datanascimento" /> <br><br>
                    <label class="register_tit"> Email: </label> <br> <input type="text" class="register_ins" name="email" id="email" /> <br><br>
                    <label class="register_tit"> Senha: </label> <br> <input type="password" class="register_ins" name="senha" id="senha" /> <br><br>
                    <label class="register_tit"> Confirmar Senha: </label> <br> <input type="password" class="register_ins" name="confirmarsenha" id="confirmarsenha" /> <br><br>
                    <label class="register_tit"> Endereço: </label> <br> <input type="text" class="register_ins" name="endereco" id="endereco" /> <br><br>
                    <div class="buttons">
                        <input type="button" onclick="processa_cadastro()" name="btn_cadastro" id="button_cad" value="Cadastrar" />
                        <a href="../index.php">
                            <input name="btn_cancelar" id="button_can" value="Cancelar" />
                        </a>
                    </div>
                </form>
            </table>
        </div>
    </div>
</body>

</html>