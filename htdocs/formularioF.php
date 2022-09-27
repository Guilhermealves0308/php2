|<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/header.php');

    require('db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") :

        $sql =  "
INSERT INTO funcionario(funcionario_CPF, funcionario_nome, funcionario_matricula, funcionario_telefone, funcionario_cargo) VALUES (
'$_POST[funcionario_CPF]',
'$_POST[funcionario_nome]',
'$_POST[funcionario_matricula]',
'$_POST[funcionario_telefone]',
'$_POST[funcionario_cargo]'
);";

        $conn->query($sql);

        echo '<div>Funcionario cadastrado.</div>';

    endif;


    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionario</title>
</head>

<body>

    <h1>Novos Funcionarios</h1><strong>Cadastrar</strong>

    <h2>Cadastro de Funcionarios:</h2>

    <form method="post" action="formularioF.php">

        <p>
            <label for="id">cpf:</label>

            <input type="text" name="funcionario_CPF" size="12" maxlength="12">
        </p>

        <p>
            <label for="id">Nome:</label>

            <input type="text" name="funcionario_nome">
        </p>
        <p>
            <label for="id">Numero de matricula:</label>

            <input type="text" name="funcionario_matricula" size="20" maxlength="20">
        </p>

        <p>
            <label for="id">Telefone:</label>

            <input type="text" name="funcionario_telefone" size="11" maxlength="11">
        </p>

        <p>
            <label for="id">Cargo Atuante:</label>

            <input type="text" name="funcionario_cargo">
        </p>

        <p>
            <button type="submit" class="primary">Enviar Formulario</button>
        </p>

    </form>
</body>

</html>