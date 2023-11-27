<nav class="navbar  fixed-top">
  <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
  <div>
      <div class="offcanvas offcanvas-start text-bg" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #B9E66F">
          <br>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          <h5 class="offcanvas-title d-flex justify-content-center" id="offcanvasNavbarLabel" style="font-size: xx-large; font-weight: bold;">Menu</h5>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <div class="size-menu">
                  <a class="nav-link active fs-4" aria-current="page" href="{{route('perfilCatador')}}">Perfil</a>
              </div>
            </li>
            <li class="nav-item">
              <div class="size-menu">
                  <a class="nav-link active fs-4" aria-current="page" href="{{route('novaAreaDeAtuacao')}}">Área de atuação</a>
              </div>
            </li>
            <li class="nav-item">
              <div class="size-menu">
                  <a class="nav-link active fs-4" aria-current="page" href="{{route('novoMaterial')}}">Cadastrar materiais</a>
              </div>
            </li>
            <li class="nav-item">
              <div class="size-menu">
                  <a class="nav-link active fs-4" aria-current="page" href="{{route('novaDisponibilidade')}}">Disponibilidade semanal</a>
              </div>
            </li>
        </ul>
      </div>
    </div>
</div>
</nav>