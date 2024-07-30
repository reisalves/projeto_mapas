<!DOCTYPE html>
<html lang="pt - br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  


    <title>Feedback</title>
    
</head>
<style>
  #arrow1 {
    background-color: #ffffff;
    color: #177346;
    border-radius: 45px;
    transition: ease-in 0.2s;

  }

  #arrow2 {
    background-color: #fff;
    color: #177346;
    border-radius: 45px;
    transition: ease-in 0.2s;
   

  }

  #arrow3 {
    background-color: #fff;
    color: #177346;
    border-radius: 45px;
    transition: ease-in 0.2s;
    
  }

  #arrow4 {
    background-color: #fff;
    color: #177346;
    border-radius: 45px;
    transition: ease-in 0.2s;

  }


  header {
 box-shadow: 0px 0px 20px rgba(255, 2, 2, 0.1);
 background: #fffefe;
 position: fixed;
 width: 100%;
 top: 0;
}

h2 {
  padding: 0.5em;
  text-align: center;
  font-weight: bold;
  color: #fff;
  background-color: #177346;
  font-size: 1.5em;
  font-family: arial;

}

header, nav ul {
 display: flex;
 justify-content: space-between;
 padding: 1rem;
}

nav ul li {
 margin-left: 1rem;
 
}

.menu{
  width: 100%;
  height: 80px;
  padding: 10px 0;
  background-color: #177346;
  z-index: 1000;
 
  top: 0;
  left: 0;

  display: flex;
  justify-content: space-around;
  align-items: center;
}

.menu ul{
  display: flex;
  justify-content: space-around;
  align-items: center;
  width: 60%;
  list-style: none;
 
}

.menu ul li{
  padding: 20px 10px;

}

.menu ul li a{
  text-decoration: none;
  color:#fff;
  font-family:'Poppins', sans-serif;
  padding: 20px 10px;
  transition: all 0.8s;

}

.menu ul li a:hover{
  background-color: #1A402D;
  color:#fff;
  padding: 20px 10px;
  border-radius: 8px;
 
}
  
</style>


<body>

  <div class="menu">
    <ul>
    <li><a href="pontos2.php">ROTAS</a></li>
      <li><a href="feedback.php">FEEDBACK</a></li>
      <li><a href="contato.php">CONTATO</a></li>
    </ul>
  </div>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6 col-sm-12 mb-1">
      <h2 class="text-center my-4 py-3">Feedback</h2>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
      

        <!-- Início -->
        <ul class="list-group mb-1">
          <li class="list-group-item d-flex justify-content-between align-items-center">Como Faço para
            identificar as linhas?
            <a class="btn btn" id="btncolapse1" data-bs-toggle="collapse" href="#collapseExample1" role="button"
              aria-expanded="false" aria-controls="collapseExample1">
              <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                <path
                  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
              </svg>
            </a>
        </ul>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
            Para que possa identificar as linha, você devera entrar na aba de rotas, as linhas estão divididas por cores para melhor identificação
          </div>
        </div>
        <!-- Fim -->

<!-- Início -->
<ul class="list-group mb-1">
  <li class="list-group-item d-flex justify-content-between align-items-center">Como Faço para
    encontrar informações sobre o horário e a rota?
    <a class="btn btn" id="btncolapse2" data-bs-toggle="collapse" href="#collapseExample2" role="button"
      aria-expanded="false" aria-controls="collapseExample2">
      <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
        class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
        
      </svg>
    </a>
</ul>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
    Abra a aba de "Rotas" e encontre a linha que deseja!
  </div>
</div>
<!-- Fim -->

<!-- Início -->
<ul class="list-group mb-1">
  <li class="list-group-item d-flex justify-content-between align-items-center">Como Faço para
    obter informações sobre o atraso da linha?
    <a class="btn btn" id="btncolapse3" data-bs-toggle="collapse" href="#collapseExample3" role="button"
      aria-expanded="false" aria-controls="collapseExample3">
      <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
        class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
      </svg>
    </a>
</ul>
<div class="collapse" id="collapseExample3">
  <div class="card card-body">
    Na página inicial você pode acompanhar a localização do onibus no mapa!
  </div>
</div>
<!-- Fim -->

<!-- Início -->
<ul class="list-group mb-1">
  <li class="list-group-item d-flex justify-content-between align-items-center">Como Faço para
    obter informações sobre o atraso da linha?
    <a class="btn btn" id="btncolapse4" data-bs-toggle="collapse" href="#collapseExample4" role="button"
      aria-expanded="false" aria-controls="collapseExample4">
      <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
        class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
      </svg>
    </a>
</ul>
<div class="collapse" id="collapseExample4">
  <div class="card card-body">
    Na página inicial você pode acompanhar a localização do onibus no mapa!
  </div>
</div>
<!-- Fim -->

     

      </div>
    </div>
  </div>
  <script>
    var rotated = false;

    document.getElementById('btncolapse1').onclick = function () {
      var div = document.getElementById('arrow1'),
        deg = rotated ? 0 : -180;

      div.style.webkitTransform = 'rotate(' + deg + 'deg)';
      div.style.mozTransform = 'rotate(' + deg + 'deg)';
      div.style.msTransform = 'rotate(' + deg + 'deg)';
      div.style.oTransform = 'rotate(' + deg + 'deg)';
      div.style.transform = 'rotate(' + deg + 'deg)';

      rotated = !rotated;
    }

    document.getElementById('btncolapse2').onclick = function () {
      var div2 = document.getElementById('arrow2'),
        deg = rotated ? 0 : -180;

      div2.style.webkitTransform = 'rotate(' + deg + 'deg)';
      div2.style.mozTransform = 'rotate(' + deg + 'deg)';
      div2.style.msTransform = 'rotate(' + deg + 'deg)';
      div2.style.oTransform = 'rotate(' + deg + 'deg)';
      div2.style.transform = 'rotate(' + deg + 'deg)';

      rotated = !rotated;
    }

    document.getElementById('btncolapse3').onclick = function () {
      var div2 = document.getElementById('arrow3'),
        deg = rotated ? 0 : -180;

      div2.style.webkitTransform = 'rotate(' + deg + 'deg)';
      div2.style.mozTransform = 'rotate(' + deg + 'deg)';
      div2.style.msTransform = 'rotate(' + deg + 'deg)';
      div2.style.oTransform = 'rotate(' + deg + 'deg)';
      div2.style.transform = 'rotate(' + deg + 'deg)';

      rotated = !rotated;
    }
   
    document.getElementById('btncolapse4').onclick = function () {
      var div2 = document.getElementById('arrow4'),
        deg = rotated ? 0 : -180;

      div2.style.webkitTransform = 'rotate(' + deg + 'deg)';
      div2.style.mozTransform = 'rotate(' + deg + 'deg)';
      div2.style.msTransform = 'rotate(' + deg + 'deg)';
      div2.style.oTransform = 'rotate(' + deg + 'deg)';
      div2.style.transform = 'rotate(' + deg + 'deg)';

      rotated = !rotated;
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <div class="rodape">
  <ul>
    <li>circular.srpq@gmail.com</li>
  </ul>
</div>

</body>

</html>