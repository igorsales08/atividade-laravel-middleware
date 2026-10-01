<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acesso Negado</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            width: 500px;
            max-width: 90%;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .icone {
            font-size: 60px;
            margin-bottom: 20px;
        }

        h1 {
            color: #c0392b;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 18px;
            line-height: 1.6;
        }

        .codigo {
            margin-top: 25px;
            font-weight: bold;
            color: #777;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="icone">
            🔒
        </div>

        <h1>Acesso Negado</h1>

        <p>
            Você não tem permissão para acessar este site.
        </p>

        <p>
            Favor entrar em contato com o administrador.
        </p>

        <div class="codigo">
            Erro 403 - Forbidden
        </div>

    </div>

</body>
</html>