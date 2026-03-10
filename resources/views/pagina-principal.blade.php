<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos Técnicos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Portal de Cursos</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route( 'pagina-cursos') }}">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route( 'pagina-sobre') }}">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- CABEÇALHO -->
    <div class="container text-center mt-5">
      <h1>Catálogo de Cursos Técnicos</h1>
      <p class="lead">Conheça nossos cursos profissionalizantes e prepare-se para o mercado de trabalho.</p>
    </div>


    <!-- SEÇÃO DE CURSOS -->
    <div class="container mt-4">
      <div class="row g-4">

        <!-- Desenvolvimento de Sistemas -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top" alt="Programação">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento de Sistemas</h5>
              <p class="card-text">
                Aprenda programação, banco de dados, desenvolvimento web e criação de softwares modernos.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Administração -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="card-img-top" alt="Administração">
            <div class="card-body">
              <h5 class="card-title">Administração</h5>
              <p class="card-text">
                Desenvolva habilidades em gestão empresarial, finanças, liderança e organização de empresas.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Meio Ambiente -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top" alt="Meio Ambiente">
            <div class="card-body">
              <h5 class="card-title">Meio Ambiente</h5>
              <p class="card-text">
                Estude sustentabilidade, preservação ambiental e práticas ecológicas para o futuro do planeta.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Mecatrônica -->
<div class="col-md-6 col-lg-3">
  <div class="card h-100">
    <img src="https://images.unsplash.com/photo-1563206767-5b18f218e8de" 
         class="card-img-top" 
         alt="Mecatrônica e robótica">
    <div class="card-body">
      <h5 class="card-title">Mecatrônica</h5>
      <p class="card-text">
        Curso voltado para automação industrial, robótica, eletrônica e programação de sistemas inteligentes.
      </p>
      <a href="#" class="btn btn-primary">Saiba mais</a>
    </div>
  </div>
</div>


    <!-- RODAPÉ -->
    <footer class="bg-dark text-white text-center mt-5 p-3">
      <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>