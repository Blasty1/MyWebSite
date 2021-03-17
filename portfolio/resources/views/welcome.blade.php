<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=" {{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>   

    </head>
       <body data-spy="scroll" data-target="#menu" id='app'>
        <header >
          <ul class="nav justify-content-center h-100" id='menu'>
            <li class="nav-item my-auto">
              <a class="nav-link active" href="#home">Home</a>
            </li>
            <li class="nav-item my-auto">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item my-auto">
              <a class="nav-link" href="#works">Lavori</a>
            </li>
          </ul>
      </header>
      
           <div class="container-fluid" id="home">
              
        
              <div id='title' class=" d-flex align-items-center justify-content-center">
                  <h1>
                      Programmare è <i class='tipying'></i>
                  </h1>
              </div>


              <div class="row row-cols-1 row-cols-lg-3 g-4 pt-1" id='cards'>
                <div class="col" data-aos="fade-down" data-aos-duration="400">
                  <div class="card mx-lg-2 mx-md-5 my-2 my-md-5">
                  <img src="{{asset('img/card1.jpg')}}" class="card-img-top imgCard" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Carchia Bruno</h5>
                      <p class="card-text">Nato in <i> Ariano Irpino</i> , un paesino nei pressi di Avellino. Ha terminato gli studi presso il Liceo Pietro Paolo Parzanese con opz Scienze Applicate. </p>
                    </div>
                  </div>
                </div>
                <div class="col" data-aos="fade-down" data-aos-duration="1200">
                  <div class="card mx-lg-2 mx-md-5 my-2 my-md-5">
                  <img src="{{ asset('img/card2.jpg')}}" class="card-img-top imgCard" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ now()->year - 2002 }} Anni</h5>
                      <p class="card-text"> Da esattamente 16 anni che scrivo codice e imparo, le numerose sfide autodatomi hanno reso possibile questo lungo percorso che non ha un termine di scadenza</p>
                    </div>
                  </div>
                </div>
                <div class="col" data-aos="fade-down" data-aos-duration="2000">
                  <div class="card mx-lg-2 mx-md-5 my-2 my-md-5">
                    <img src="{{ asset('img/card3.jpg')}}" class="card-img-top imgCard" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Preferenze</h5>
                      <p class="card-text">Possiedo una volontà ferrea che mi permette di affrontare ogni sfida, malgrado mi diletti nel <b>back-end</b>. Duttile e veloce all'apprendimento , raramente mi arrendo facilmente. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


           <div class="container-fluid" id='about'>
              <div id="about_title"  class="d-flex align-items-center justify-content-center" data-aos="fade-up" >
                <svg viewBox="45 60 400 320" xmlns="http://www.w3.org/2000/svg" id='about_svg_title'>
    <path d="M 90 210 C 90 180 90 150 90 150 C 150 150 180 150 180 150 C 180 150 300 150 300 150 C 300 150 330 150 390 150 C 390 150 390 180 390 210 C 390 240 390 270 390 270 C 330 270 300 270 300 270 C 300 270 180 270 180 270 C 180 270 150 270 90 270 C 90 270 90 240 90 210" mask="url(#knockout-text)" >
    </path>
    <mask id="knockout-text">
      <rect width="100%" height="100%" fill="#fff" x="0" y="0" />
      <text x="190" y="215" fill="#000" style="font-size : 2rem">About</text>
    </mask>
</svg>
                
              </div>
              <div class="row row-cols-1 row-cols-md-2 body_about w-100">
                  <div class="col" data-aos="fade-left"
                  >
                    <h3>
                      Linguaggi Studiati e applicati
                    </h3>
                    <ul class="list">
                      <li class="mb-2">Html <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                      </div></li>
                      <li class="mb-2">Css <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                      </div></li>
                      <li class="mb-2">Javascript <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                      </div></li>
                      <li class="mb-2">PHP <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                      </div></li>
                      <li class="mb-2">Sql <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                      </div></li>
                      <li class="mb-2">Python <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                      </div></li>
                      
                    </ul>
                    <h3>
                      Propensione
                    </h3>
                    <ul class="list">
                      <li>Front-end<div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                      </div></li>
                      <li>Back-end<div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                      </div></li>
                    </ul>
                  </div>
                  <div class="col" data-aos="fade-right"
                  >
                    <h3>
                      Framework
                    </h3>
                    <ul class='list'>
                      <li class="mb-2">Vuejs2 <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                      </div></li>
                      <li class="mb-2">Laravel<div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                      </div></li>
                      <li class="mb-2">Bootstrap4 <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                      </div></li>
                    </ul>
                    <div id="triangle">
              
                    </div>
                  </div>
                 
    
         </div>
         <div class="container-fluid" id='works'>
              
    
        </div>

   
        <script src="{{ asset('js/home.js')}}"></script>

    </body>
</html>
