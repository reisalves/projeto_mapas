<?php

include("./componentes/header.php");

?>




    <form action="#" method="post" autocomplete="off">
        <fieldset>
          <div class="bgcor ">
            <legend class= "w-100 mb-3">Formulário de Contato</legend>
            <br>
            </div>
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

    </div>
    <ul>
    <li>circular.srpq@gmail.com</li>
  </ul>
</div>

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