<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<!-- 
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.dataTables.css" />
  <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script> -->
  



  <link rel="stylesheet" href="css/style.css">

  <title>Points Coleta</title>
</head>

<!DOCTYPE html>
<html lang="pt-br">

<div class="menu">
  <ul>
    <li><a href="">FEEDBACK</a></li>
    <li><a href="">ROTAS</a></li>
    <li><a href="">CONTATO</a></li>
  </ul>
</div>

<div class="rodape">
  <ul>
    <li>circular.srpq@gmail.com</li>
  </ul>
</div>s


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Wesley Victor Pereira Silva" />
    <meta name="description" content="Página de formulário de contato em HTML." />
    <meta name="keywords" content="Formulário de contato, HTML, web development" />
    <title>Formulário de contato</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form action="#" method="post" autocomplete="off">
        <fieldset>
            <legend>Formulário de Contato</legend>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" required placeholder="Digite seu nome completo" />
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required placeholder="Digite um e-mail válido" />
            <label for="subject">Assunto</label>
            <input type="text" name="subject" id="subject" />
            <label for="message">Mensagem</label>
            <textarea name="message" id="message" rows="7" required maxlength="1000" minlength="20"
                placeholder="Conte-nos tudo"></textarea>
            <button type="submit" class="btn">Enviar</button>

        
        </fieldset>

    </form>


</body>
</html>



<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" 
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" 
crossorigin=""></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

<script src="./js/script.js"></script>

</body>
</html>