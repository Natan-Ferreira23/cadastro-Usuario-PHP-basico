<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="m-5 p-5">
                <?php
                include "conexao.php";

                $nome = $_POST["nome"];
                $endereco = $_POST["endereco"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];
                $data_nascimento = $_POST["data_nascimento"];

                $sql = "insert into `pessoa`( `nome`, `endereco`, `telefone`, `email`, `data_nascimento`) values
            ('$nome','$endereco','$telefone','$email', '$data_nascimento')";

                if (mysqli_query($conn, $sql)) {

                    mensagem("$nome cadastrado com sucesso", 'dark');
                } else {
                    mensagem("$nome NÃO cadastrado ", 'warning');
                }
                ?>
                <a href="index.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
</body>

</html>