<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
  <link rel="stylesheet" href="/css/slider.css">

</head>

<body data-spy="scroll" data-target="#menu">
  <header>
    <ul class="nav justify-content-center h-100" id='menu'>
      <li class="nav-item my-auto">
        <a class="nav-link active" href="#home">Home</a>
      </li>
      <li class="nav-item my-auto">
        <a class="nav-link" href="#about">Skills</a>
      </li>
      <li class="nav-item my-auto">
        <a class="nav-link" href="#works">Works</a>
      </li>
    </ul>
  </header>
  <div id='app'>
    <div class="container-fluid" id="home">


      <div id='title' class=" d-flex align-items-center justify-content-center flex-column">
        <h1>
          Programmare è <i class='tipying'></i>
        </h1>
        <ul id='icons' class="p-0">
          <li><a href="https://www.instagram.com/bruno_carchia/"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg></a></li>
          <li><a href="https://www.linkedin.com/in/bruno-carchia-90a202215?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BTV2Xp06UQSSFwYuqBO7uEA%3D%3D"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
              </svg></a></li>
          <li><a href="mailto:carchiabruno@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
              </svg></a></li>
          <li><a href="https://github.com/Blasty1"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
              </svg></a></li>
        </ul>
      </div>


      <div class="row row-cols-1 row-cols-lg-3 g-4 pt-1" id='cards'>
        <div class="col" data-aos="fade-down" data-aos-duration="400">
          <div class="card mx-lg-2 mx-md-5 my-2 my-md-5">
            <div class="card-img-top imgCard" style="background-color:#05C793"></div>
            <div class="card-body">
              <h5 class="card-title">Carchia Bruno</h5>
              <p class="card-text">Nato ad <i> Ariano Irpino</i> / Avellino / Campania.<br> Studente del Politecnico di Torino : Ingegneria Informatica. <br>Diploma : Liceo Pietro Paolo Parzanese opz scienze applicate con 100/100<br>Lingue studiate : italiano , inglese.</p>
            </div>
          </div>
        </div>
        <div class="col" data-aos="fade-down" data-aos-duration="1200">
          <div class="card mx-lg-2 mx-md-5 my-2 my-md-5">
            <div class="card-img-top imgCard" style="background-color:#05C793B0"></div>
            <div class="card-body">
              <h5 class="card-title">Referenze</h5>
              <p class="card-text">Professione attuale : Studente al Politecnico Di Torino<br>Mi trovo qui: Torino<br>...</p>
            </div>
          </div>
        </div>
        <div class="col" data-aos="fade-down" data-aos-duration="2000">
          <div class="card mx-lg-2 mx-md-5 my-2 my-md-5">
            <div class="card-img-top imgCard" style="background-color:#05C7938F"></div>
            <div class="card-body">
              <h5 class="card-title">Long Story Short</h5>
              <p class="card-text">A 16 anni capisco quale sia la mia passione, insoddisfatto delle mie precarie conoscenze approfondisco con tutorial , libri e corsi online.<br> Preso il diploma con il massimo dei voti decido di spostarmi a Torino per l'università ed è qui che studio nuovi linguaggi e nuovi approcci , migliorando il mio problem solving.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid" id='about'>
      <div class=" box_title d-flex align-items-center justify-content-center" data-aos="fade-up">
        <svg viewBox="45 60 400 320" xmlns="http://www.w3.org/2000/svg" class="box_svg_title">
          <path d="M 90 210 C 90 180 90 150 90 150 C 150 150 180 150 180 150 C 180 150 300 150 300 150 C 300 150 330 150 390 150 C 390 150 390 180 390 210 C 390 240 390 270 390 270 C 330 270 300 270 300 270 C 300 270 180 270 180 270 C 180 270 150 270 90 270 C 90 270 90 240 90 210" mask="url(#knockout-text)">
          </path>
          <mask id="knockout-text">
            <rect width="100%" height="100%" fill="#fff" x="0" y="0" />
            <text x="200" y="215" fill="#000" style="font-size : 2rem">Skills</text>
          </mask>
        </svg>

      </div>
      <div class="row row-cols-1 row-cols-md-2 body_about w-100">
        <div class="col" data-aos="fade-left">
          <h3>
            Linguaggi
          </h3>
          <ul class="list">
            <li class="mb-2">Html <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
              </div>
            </li>
            <li class="mb-2">Css <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
              </div>
            </li>
            <li class="mb-2">Javascript <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
              </div>
            </li>
            <li class="mb-2">PHP <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
              </div>
            </li>
            <li class="mb-2">Sql <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
              </div>
            </li>
            <li class="mb-2">Python <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
              </div>
            </li>
            <li class="mb-2">C <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
              </div>
            </li>

          </ul>
          <h3>
            Propensione
          </h3>
          <ul class="list">
            <li>Front-end<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
              </div>
            </li>
            <li>Back-end<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
              </div>
            </li>
            <li>Mobile App Development<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
              </div>
            </li>
            <li>Web App Development<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col" data-aos="fade-right">
          <h3>
            Framework
          </h3>
          <ul class='list'>
            <li class="mb-2">Vuejs2 <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
              </div>
            </li>
            <li class="mb-2">Laravel<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
              </div>
            </li>
            <li class="mb-2">Bootstrap <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
              </div>
            </li>
            <li class="mb-2">React Native<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
              </div>
            </li>
          </ul>


          <h3>
            Tecnologie
          </h3>
          <ul class='list'>
            <li class="mb-2">Github <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
              </div>
            </li>
            <li class="mb-2">Docker <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
              </div>
            </li>

          </ul>


        </div>

      </div>
    </div>
    <div class="container-fluid mb-2" id='works'>
      <div class="box_title d-flex align-items-center justify-content-center" data-aos="fade-up">
        <svg viewBox="45 60 400 320" xmlns="http://www.w3.org/2000/svg" class="box_svg_title">
          <path d="M 90 210 C 90 180 90 150 90 150 C 150 150 180 150 180 150 C 180 150 300 150 300 150 C 300 150 330 150 390 150 C 390 150 390 180 390 210 C 390 240 390 270 390 270 C 330 270 300 270 300 270 C 300 270 180 270 180 270 C 180 270 150 270 90 270 C 90 270 90 240 90 210" mask="url(#knockout-text-2)">
          </path>
          <mask id="knockout-text-2">
            <rect width="100%" height="100%" fill="#fff" x="0" y="0" />
            <text x="200" y="215" fill="#000" style="font-size : 2rem">Works</text>
          </mask>
        </svg>

      </div>

        <slides></slides>

    </div>
  </div>


  <script src="js/app.js"></script>
  <script src="js/home.js"></script>


</body>

</html>