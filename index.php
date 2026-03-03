<?php
    //comenta
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        h1 {
            padding: 15px; 
            font-size: 3rem;
            font-weight: 400;
        }   

        h2 {
            padding: 15px;              
            background: #F5F5F5;    
            font-weight: 400;
            border-bottom: solid 1px #d1d0d0;   
        }       

        .container {
            display: flex;  
            justify-content: space-evenly;
            padding: 20px;
        }

        .card {
            border-radius: 5px;
            width: 500px;
            border: solid 1px #d1d0d0;
            text-align: left;
        }   

        button {
            background-color: #2c6faa;
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            border: none;
            margin: 10px 0px 15px 15px;
            font-size: 1.2rem;
        }
        p {
            padding: 15px;  
            font-size: 1.3rem;
        }
        .titulo, .texto {
            margin: 0;  
            padding: 0;
        } 
    </style>
</head>

<body>
    <div class="titulo">
        <h1>Sistema de Gerenciamento - SENAI</h1> 
        <p style="font-size: 2rem; padding: 0;">O sistema utilizado por todas as unidades do senai em todo o Brasil,</p>
        <p style="font-size: 2rem; padding: 0;"> utilizada por mais de 5.000.000 de alunos.</p>
    </div>

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