<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contato - Layout</title>
    <style>
        /* Estilização moderna e centralizada */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        h2 {
            text-align: center;
            color: #1a73e8;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.2rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #5f6368;
            font-weight: 500;
        }
        input, textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #dadce0;
            border-radius: 6px;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.2s;
        }
        input:focus, textarea:focus {
            border-color: #1a73e8;
        }
        button {
            width: 100%;
            padding: 0.9rem;
            background-color: #1a73e8;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1557b0;
        }
        .info-text {
            font-size: 0.85rem;
            color: #70757a;
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contato</h2>
    
    <form action="#" method="GET">
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome aqui" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>
        </div>

        <div class="form-group">
            <label for="assunto">Assunto</label>
            <input type="text" id="assunto" name="assunto" placeholder="Sobre o que deseja falar?">
        </div>

        <div class="form-group">
            <label for="mensagem">Sua Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="4" placeholder="Escreva aqui..."></textarea>
        </div>

        <button type="button">Enviar Mensagem</button>
    </form>

    <p class="info-text">Este é um modelo visual. Nenhuma mensagem será enviada.</p>
</div>

</body>
</html>