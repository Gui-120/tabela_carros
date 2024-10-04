<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c3e50; 
            color: #ecf0f1; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2.5rem;
            color:
        }

        a {
            text-decoration: none;
            color: #ffffff;
            background-color: #3498db; 
            padding: 12px 24px;
            border-radius: 10px;
            margin: 10px;
            font-size: 1.2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }

        a:hover {
            background-color: #2980b9; 
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            a {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao Sistema</h1>
    <a href="./ver.php" rel="noopener noreferrer">Ver dados</a>
    <a href="./cadastrar.php" rel="noopener noreferrer">Cadastrar Dados</a>
    <a href="./consulta.php" rel="noopener noreferrer">Consulta por id</a>
    <a href="./alterar.php" rel="noopener noreferrer">alterar</a>
    <a href="./remover.php" rel="noopener noreferrer">remover</a>
</body>
</html>
