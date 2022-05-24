<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyPapper</title>
    <!-- link do css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- barra de barra_navegacao -->
    <nav class="navbar navbar-expand navbar-dark color-primary" aria-label="Second navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/SP.png" width="35" height="35" alt="">   SimplePaper</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse justify-content-md-center me-5" id="barra_navegacao">

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Eventos</a>
              </li>

            </ul>
        </div>
        <a href="login.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> 
        </a>           
        </div>
      </nav>
      <!-- conteudo do site -->
      <div class="container px-4 py-5" id="eventos">
        <h2 class="pb-2 border-bottom">Eventos abertos</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col" id="ev-1">
            <img src="img/sm-computacao.png" width="350" height="80" alt="">
            <h2>Semana da Computação</h2>
            <p>A semana da computação é um evento desenvolvido pelos alunos da Engenharia de Computação do CEFET-MG campus Leopoldina</p>
            <a href="#" class="icon-link">
              Saiba Mais
              <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col" id="ev-2">
            <img src="img/c&t.png" width="350" height="80" alt="">
            <h2>Semana C&T</h2>
            <p>Evento organizado por alunos,professores e servidores do CEFET-MG campus Leopoldina.</p>
            <a href="#" class="icon-link">
                Saiba Mais
              <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
        </div>
      </div>




</body>
</html>
<!-- link do js do bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
