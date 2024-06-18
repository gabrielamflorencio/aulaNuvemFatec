<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Loja de Roupas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .contatos {
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 20px;
        }
        .mapa {
            margin-top: 20px;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: 0;
        }
        .imagens {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .imagem {
            flex: 0 0 calc(33.33% - 10px);
        }
        .imagem img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Conheça nossa loja</h2>
        <div class="imagens">
            <div class="imagem">
                <img src="https://www.engeplus.com.br/cache/noticia/0180/0180496/calca-jeans-a-peca-coringa-que-tem-espaco-garantido-no-guarda-roupas-400x200.jpg?t=20220923152555" alt="Roupa 1">
            </div>
            <div class="imagem">
                <img src="https://filmestipo.com/img_pt/tag/thumb/f3/23442.jpg" alt="Roupa 2">
            </div>
            <div class="imagem">
                <img src="https://stcotvfoco.com.br/2024/02/falencia-loja-de-roupas-amada-400x200.jpg" alt="Roupa 3">
            </div>
        </div>
        <h2>Contatos</h2>
        <div class="contatos">
            <p><strong>Endereço:</strong> Rua Fictícia, 123 - Centro, Itapira - SP</p>
            <p><strong>Telefone:</strong> (XX) XXXX-XXXX</p>
            <p><strong>E-mail:</strong> contato@lojaderoupas.com</p>
        </div>
        <h2>Localização</h2>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.334674783309!2d-46.82255678549128!3d-22.44248184576537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cbe46c476fcb8b%3A0xa5a00f4f6bb3ef7!2sItapira%2C%20SP!5e0!3m2!1sen!2sbr!4v1623444723707!5m2!1sen!2sbr" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</body>
</html>
