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
        <header>
          <i class="bi bi-menu-down"></i>
          <ul class="nav justify-content-center h-100" id='menu'>
            <li class="nav-item my-auto">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item my-auto">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item my-auto">
              <a class="nav-link" href="#works">Lavori</a>
            </li>
          </ul>
      </header>
  
           <div class="container-fluid" id='home'>
              
        
              <div id='title' class=" d-flex align-items-center justify-content-center">
                  <h1>
                      Programmare è <i class='tipying'></i>
                  </h1>
              </div>


              <div class="row row-cols-1 row-cols-lg-3 g-4 pt-1" id='cards'>
                <div class="col">
                  <div class="card mx-lg-2 mx-md-5 my-0 my-md-5">
                  <img src="{{asset('img/card1.jpg')}}" class="card-img-top imgCard" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Carchia Bruno</h5>
                      <p class="card-text">Nato in <i> Ariano Irpino</i> , un paesino nei pressi di Avellino. Ha terminato gli studi presso il Liceo Pietro Paolo Parzanese con opz Scienze Applicate. </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mx-lg-2 mx-md-5 my-0 my-md-5">
                  <img src="{{ asset('img/card2.jpg')}}" class="card-img-top imgCard" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ now()->year - 2002 }} Anni</h5>
                      <p class="card-text"> Da esattamente 16 anni che scrivo codice e imparo, le numerose sfide autodatomi hanno reso possibile questo lungo percorso che non ha un termine di scadenza</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mx-lg-2 mx-md-5 my-0 my-md-5">
                    <img src="{{ asset('img/card3.jpg')}}" class="card-img-top imgCard" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Preferenze</h5>
                      <p class="card-text">Possiedo una volontà ferrea che mi permette di affrontare ogni sfida, malgrado mi diletti nel <b>back-end</b>. Duttile e veloce all'apprendimento , raramente mi arrendo facilmente. </p>
                    </div>
                  </div>
                </div>
              </div>
           </div>


           <div class="container-fluid h-100" id='about'>
              
    
         </div>
         <div class="container-fluid h-100" id='works'>
              
    
        </div>
      
        <script src="{{ asset('js/home.js')}}"></script>
    </body>
</html>
