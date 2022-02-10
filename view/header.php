<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Clientes Confiança Leilões</title>
  <link rel="icon" href="assets/imagens/icone.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Clientes Confiança Leilões">
  <meta name="description" content="Sistema para gestão de clientes usando PHP e MVC">
  <meta name="keywords" content="mvc, clientes, php">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Portuguese">
  <meta name="author" content="Samuel Barbosa">
  <!-- CDN do bootstrap via jsDelivr -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<body>
<header>
    <div class="px-3 py-2 bg-light">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="?acao=listar" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img class="bi me-2" width="auto" height="100" role="img" aria-label="Bootstrap" src="assets/imagens/logo.png" />
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="?acao=listar" class="nav-link text-secondary">
                <img class="bi d-block mx-auto mb-1" width="34" height="34" src="assets/imagens/home.png"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Casa
              </font></font></a>
            </li>
            <li>
            <a href="?acao=listar" class="nav-link text-black">
              <img class="bi d-block mx-auto mb-1" width="34" height="34" src="assets/imagens/clientes.png"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Clientes
              </font></font></a>
            </li>
            <li>
            <a href="?acao=listar" class="nav-link text-black">
              <img class="bi d-block mx-auto mb-1" width="34" height="34" src="assets/imagens/negocios.png"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Negocios
              </font></font></a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" action="?acao=buscar">
          <input type="search" name="buscar" class="form-control" placeholder="Procurar..." aria-label="Procurar">
        </form>

        <div class="text-end">
          <a href="?acao=incluir"><button type="button" class="btn btn-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">INCLUIR NOVO</font></font></button></a>
        </div>
      </div>
    </div>
  </header>
</body>

</html>