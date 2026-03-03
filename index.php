<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        h1 {
            margin-top: 75px;
        }

        h2 {
            border-bottom: solid 1px black;
            padding-bottom: 10px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            gap: 30px;
            margin-top: 150px;
        }

        .card {
            border-radius: 8px;
            width: 300px;
            padding: 20px;
            border: solid 1px black;
        }

        button {
            background-color: #2c6faa;
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>

<body>
    <h1>Sistema de Gerenciamento - SENAI</h1>
    <p>O sistema utilizado por todas as unidades do senai em todo o Brasil, utilizada por mais de 5.000.000 de alunos.</p>

    <div class="container">
        <div class="card">
            <h2>Administrador</h2>
            <p>Acesse a aplicação como administrador.</p>
            <button>Sou Administrador</button>
        </div>

        <div class="card">
            <h2>Professor</h2>
            <p>Acesse a aplicação como professor.</p>
            <button>Sou Professor</button>
        </div>

        <div class="card">
            <h2>Aluno</h2>
            <p>Acesse a aplicação como aluno.</p>
            <button>Sou Aluno</button>
        </div>

    </div>
</body>

</html>