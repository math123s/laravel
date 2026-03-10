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
              <a href="{{ route('cursos.detalhes', 1) }}" class="btn btn-primary">Saiba mais</a>
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
              <a href="{{ route('cursos.detalhes', 3) }}" class="btn btn-primary">Saiba mais</a>
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
              <a href="{{ route('cursos.detalhes', 2) }}" class="btn btn-primary">Saiba mais</a>
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
              <a href="{{ route('cursos.detalhes', 4) }}" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    