<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pagina.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ticket room</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">ticket room</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            conta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./login">sair</a></li>


                        </ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/form">crie sua conta</a>


                </ul>
                <form action="/" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" name="search" type="search" placeholder="ache seu ingresso"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    <section>
        <div class="card" style="width: 15rem;">
            <img src="./img/roxo.png" class="card-img-top" alt="palco roxo">
            <div class="card-body">
                <h5 class="card-title">show 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="./compra" class="btn btn-primary">comprar ingresso</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="./img/plateia.png" class="card-img-top" alt="plateia">
            <div class="card-body">
                <h5 class="card-title">show 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="./compra" class="btn btn-primary">comprar ingresso</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="./img/guitarra.png" class="card-img-top" alt="homen tocando guitarra">
            <div class="card-body">
                <h5 class="card-title">show 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="/compra" class="btn btn-primary">comprar ingresso</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="./img/Design sem nome (8).png" class="card-img-top" alt="homen tocando guitarra">
            <div class="card-body">
                <h5 class="card-title">show 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="/compra" class="btn btn-primary">comprar ingresso</a>
            </div>
        </div>

    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>


</html>