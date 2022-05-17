<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de acesso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img src="#" alt="">
                <h2 class="title">Painel de Controle</h2>
                <p>Gerenciar seus Negócios</p>
            </div>

            <div class="card-group">
                <label for="email">E-emal</label>
                <input type="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="card-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" required>
            </div>
            <div class="card-group">
                <label><input type="checkbox">Lembre-me</label>
            </div>
            <div class="card-group btn">
                <button type="submit">ACESSAR</button>
            </div>

        </div>
    </form>
</body>
</html>