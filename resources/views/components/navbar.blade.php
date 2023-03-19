<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('homepage')}}">LOGO*</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
      <div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Inserisci Articolo</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Indice degli Articoli</a>
          </li> --}}

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          
        </ul>
      </div>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @Auth
            <li class="nav-item">
              <a class="nav-link" href="{{route('article.index')}}">Indice degli Articoli</a>
            </li>
            <li class="nav-item">  
              <a class="nav-link px-2" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
              {{-- FORM FATTO ESCLUSIVAMENTE PER USARE IL METODO POST E COLLEGARCI ALLA HIDDEN ROUTE --}}
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">
                @Csrf
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="";>BENTORNATO {{Auth::user()->name}}</a>
            </li>
          @else
          <li class="nav-item">
            <a class="nav-link active" href="{{route('login')}}";>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('register')}}";>Registrati</a>
          </li>
          @endAuth
        </ul>
      </div>
      
    </div>
  </nav>