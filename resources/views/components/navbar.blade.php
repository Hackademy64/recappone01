<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Sk8Passion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Contattaci</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Posta i tuoi pattini</a>
        </li>

        @guest
        <li class="nav-item">
          <a class="nav-link " href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('login')}}">Login</a>
        </li>
       
        @else
       
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href=" {{route('product.create')}}">Crea Prodotto</a>
        </li>
        <li class="nav-item">
          <p class="nav-link">Benvenuto {{Auth::user()->name}}</p>
        </li>
          {{-- <ul class="dropdown-menu"> --}}
            <li class="nav-item">
              <a href="{{route('logout')}}" class="nav-link" 
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" >
              Log out</a>
            </li>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
            @csrf
        @endguest
          </form>
          {{-- </ul> --}}

      </ul>
    </div>
  </nav>