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
    <title>Movelzaum - Realizar doações</title>
</head>

<body>
<script src="../../static/js/jquery-3.6.4.min.js"></script>
		<script type="text/javascript">
			$( document ).ready(function() {
			});

			function processa_doar(){
				var formDados = {
					nome: $("#nome").val(),
					condicao: $("#condicao").val(),
					telefone: $("#telefone").val(),
					endereco: $("#endereco").val(),
                    descricao: $("#descricao").val(),
                    

    			};

				$.ajax({
					type: "POST",
					url: "../../controller/movel_controller.php?acao=doar",
					data: formDados,
					dataType: "json",
					}).done(function (dataRetorno) {
						if(dataRetorno.erro == 0){
							alert(dataRetorno.msg)
							window.location.href = dataRetorno.url;
						}
						else{
							alert(dataRetorno.msg)
						}
						
				});
				
			}
		</script>

    <div class="main">
        <div class="sidebar">
            <div class="back">
                <a href="../Initial/index.php">
                    <img src="../Assets/back-icon.svg" alt="back">
                </a>
            </div>
            <img src="../Assets/profile-image.svg" alt="Perfil" width="110px" height="110px">
            <a href="../Profile/index.php">
                <button id="profile-buttom">
                    Meu perfil
                </button>
            </a>
            <div class="menu-initial">
                <a href="../How-Donate/index.php">
                    <button>
                        Como doar?
                    </button>
                </a>
                <button>
                    Acompanhar doações
                </button>
            </div>
            <a href="../index.php">
                <button id="logout-button">
                    Sair
                </button>
            </a>
        </div>
        <div class="content">
            <header>
                <img src="../Assets/logo-comodoar.svg" alt="Mãos juntas">
                <h1>REALIZAR DOAÇÃO</h1>
            </header>
            <div class="content2">
                <form action="">
                    <label for="objeto">Objeto para doar:</label>
                    <input type="text" name="objeto">
                    <label for="condicao">Condições:</label>
                    <select name="condicao" id="condicao">
                        <option value="bom">BOM</option>
                        <option value="bom">MÉDIO</option>
                        <option value="bom">RUIM</option>
                    </select>
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" name="telefone">
                    <label for="comentario">Comentários:</label>
                    <input type="text" id="comment" name="comentario">
                </form>
                <div class="image">
                    <div class="box-input">
                        <label for="foto">Inserir</label>
                        <input type="file" name="photo" id="foto">
                    </div>
                </div>
            </div>
            <footer>
                <div class="two-button">
                    <button>Cancelar</button>
                    <input type="button" onclick="processa_doar()" name="btn_doar" id="button_cad" value="Doar"/>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>