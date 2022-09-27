|<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    require('db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") :

        $sql =  "
INSERT INTO games(games_name, games_classificacao, games_genero, games_preco, games_empresa) VALUES (
'$_POST[games_name]',
'$_POST[games_classificacao]',
'$_POST[games_genero]',
'$_POST[games_preco]',
'$_POST[games_empresa]'
);";

        $conn->query($sql);

        echo '<div>Jogo cadastrado com sucesso.</div>';

    endif;


    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

    <h1>Games e ascessorio</h1><strong>Cadastrar</strong>

    <h2>Cadastro de produto:</h2>

    <form method="post" action="formularioG.php">
        <p>
            <label for="id">Nome:</label>

            <input type="text" name="games_name">
        </p>

        <p>
            <label for="id">Classificação:</label>

            <input type="text" name="games_classificacao">
        </p>
        <p>
            <label for="id">genero:</label>

            <input type="text" name="games_genero">
        </p>

        <p>
            <label for="id">Preço:</label>

            <input type="text" name="games_preco">
        </p>

        <p>
            <label for="id">Empresa:</label>

            <input type="text" name="games_empresa">
        </p>

        <p>
            <button type="submit" class="primary">Enviar Formulario</button>
        </p>

    </form>
</body>

</html>