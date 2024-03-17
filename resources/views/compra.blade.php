<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/compra.css">
    <title>Ticktet room</title>
</head>

<body>
    <main class="container">
        <section class="header">
            <h1>ticktet room</h1>
        </section>

        <section class="content-form">
            <h2>Evento 1</h2>
        </section>
        <section class="form">
            <h3><em>$300</em></h3>
        </section>


        <p><small>It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal distribution of letters, as opposed to using
                'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as
                their default model text, and a search for 'lorem ipsum' will uncover many web
                sites still in their infancy. Various versions have evolved over the years,
                sometimes by accident, sometimes on purpose (injected humour and the like).
            </small></p>

        <img src="./img/Capturar.JPG" class="imagem" alt="">
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-primary">-</button>
            <div class="container" type="text">
                <h3>1</h3>
            </div>
            <button type="button" class="btn btn-outline-primary">+</button>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Finalizar compra
            </button>
    </main>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ticktet room</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Seu ingresso foi comprado com sucesso! <br />
                    fique atento a seu e-mail
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a
                            href="./">Ok</a></button>
                </div>
            </div>
        </div>
    </div>
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
