<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img class="logo-img" src="{{Vite::asset("resources/img/logo.png")}}" alt="immagine logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('home')}}">Home</a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
              </div>
            </div>
        </div>
      </nav>
</header>