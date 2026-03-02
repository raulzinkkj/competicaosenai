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

        .container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
        }
        .card {
            border-radius: 8px;
            width: 300px;
            padding: 20px; 
            border: solid 1px black;
        }
        .button {
            background-color: #2c6faa;
            color: white;
            padding: 10px 20px;
            border-radius: 5px; 

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