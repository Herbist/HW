<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <title>::HWSOFT:: .:Login:.</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="container">
                <h2>Dados de Login</h2>
                <form action="validacao.php" method="post" class="active">
                    <div class="form-group">
                        <label for="txUsuario">Usuário</label>
                        <input type="text" name="usuario" id="txUsuario" maxlength="25" placeholder="Usuário" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="txSenha">Senha</label>
                        <input type="password" name="senha" id="txSenha" placeholder="Senha" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <a href="redefinirsenha.php">Esqueci minha senha</a><br>
                        <input type="submit" value="Entrar" class="btn btn-group"/>
                    </div>
                </form>  
            </div>
        </div>
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>