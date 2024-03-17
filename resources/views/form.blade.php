<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" <title>login</title>
</head>

<body>
    <header id="topo">
        <div id="title">
            <h1>ticket</h1>
            <h1>room</h1>
        </div>



    </header>
    <main id="principal">
        <aside>
            <h2><span>faça ligin agora </span></h2>
            <h2>na ticket room</h2>
            <p>o melhor lugar para comprar ingressos </p>

            <form action="./welcome">
                @csrf
                <label for="email">e-mail</label>
                <input type="email" placeholder="email" required>
                <label for="senha">digite sua senha</label>
                <input type="password" placeholder="senha" required>
                <label for="senha">confirme sua senha</label>
                <input type="password" placeholder="confirme sua senha" required>

                <input id="Enviar" type="submit" value="entrar">
            </form>
        </aside>
        <article>
            <img src="./img/Design sem nome (4).png" alt="banner">
        </article>
    </main>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>

</html>
