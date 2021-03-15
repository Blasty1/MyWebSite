<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.41, maximum-scale=1" />
        <link rel="stylesheet" href=" {{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

        <script src="{{ mix('js/app.js') }}"></script>
    </head>
       <body>
           <div class="container-fluid" id='home'>
               <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
       
            <div id='title'>
                <h1>
                    Programmare è <i class='tipying'></i>
                </h1>
            </div>
           </div>
        <script src="{{ asset('js/home.js')}}"></script>
    </body>
</html>
