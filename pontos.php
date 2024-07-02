<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap.css">

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap.js"></script>
 
  
  <link rel="stylesheet" href="css/style.css">

  <title>Points Coleta</title>
</head>
<style>
    .col-sm-6.text-left{
        margin:20px 0 0 0;
    }
</style>
<body>

<div class="container mb-2 menu">
    <div class="row">

<div class="menu">
  <ul>
    <li><a href="">FEEDBACK</a></li>
    <li><a href="">ROTAS</a></li>
    <li><a href="">CONTATO</a></li>
  </ul>
</div>
</div>
</div>
<br>
<div class="container mt-4">
  <div class="row d-flex justify-content-center w-100">

<div class="col-sm-12 col-md-12 d-flex justify-content-center alig-items-center pb-4">
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn" id="btnVerde" style="background-color:green;color:#fff">Verde</button>
  <button type="button" class="btn" id="btnVermelho" style="background-color:tomato">Vermelho</button>
  <button type="button" class="btn" id="btnLaranja" style="background-color:orange">Laranja</button>
</div>
</div>
<br>
<!-- TABELA VERDE  -->
    <div class="col-sm-12 col-md-12 my-5" id="tableverde"> 

<table id="example" class="display table table-success table-striped" style="width:100%;color:#000">
        <thead>
            <tr>
                <th>Pontos</th>
                <th>Horário</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Saída Garagem</td>
                <td>05:10</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Nelson Fernades</td>
                <td>05:13</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Confecção Hábito</td>
                <td>05:15</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Estrela</td>
                <td>05:35</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Posto de Sáide Estrela</td>
                <td>05:45</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Praça Estrela</td>
                <td>05:47</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Matadouro Estrela</td>
                <td>05:47</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Planalto Elektro</td>
                <td>06:05</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Padaria Planalto</td>
                <td>06:06</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto Roseira</td>
                <td>06:07</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Nelson Fernandes</td>
                <td>06:08</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça do Rosário</td>
                <td>06:10</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Padaria Veneza</td>
                <td>06:12</td>
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
                <td>Posto Ruff</td>
                <td>06:15</td>
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
                <td>Crehe Lagoinha</td>
                <td>06:15</td>
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
                <td>Posto GD</td>
                <td>06:20</td>
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
                <td>Ecoponto</td>
                <td>06:22</td> 
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>06:25</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Paróquia São José do Operário</td>
               <td>06:27</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Igreja Batptista</td>
               <td>06:28</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Bar do Claudemir</td>
               <td>06:30</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>São Luis</td>
               <td>06:30</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Igreja Deus é Amor</td>
               <td>06:31</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Conselho Tutelar</td>
               <td>06:33</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>06:35</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Fort Material de Contrução</td>
               <td>06:37</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Supermercado Grick 3</td>
               <td>06:38</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Galdina</td>
               <td>06:40</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Moda Construção </td>
               <td>06:42</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Posto 2 avenidas</td>
               <td>06:45</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Sanatório</td>
               <td>06:46</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Rodoviária</td>
               <td>06:48</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Santa Casa</td>
               <td>06:50</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Nelson Fernandes</td>
               <td>06:52</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Maria Amélia</td>
               <td>06:53</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Supermercado São Pedro</td>
               <td>06:55</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Praça do Rosário</td>
               <td>7:00</td>
               <td><div class="verdeponto"></div></td>

            </tr>
            
          
        </tbody>
        <tfoot>
            <tr>
                <th>Pontos</th>
                <th>Horário</th>
                <th>Cor</th>
               
               
            </tr>
        </tfoot>
    </table>
    </div>



<!-- TABELA Vermelha  -->
    <div class="col-sm-12 col-md-12 my-5" id="tablevermelho"> 

<table id="example2" class="display table table-success table-striped" style="width:100%;color:#000">
        <thead>
            <tr>
                <th>Pontos</th>
                <th>Horário</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Saída Garagem</td>
                <td>10:45</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto Duas Avenidas</td>
                <td>10:47</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Sanatório</td>
                <td>10:48</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Santa Casa</td>
                <td>10:52</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Nelson Fernandes</td>
                <td>10:54</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Praça do Rosário</td>
                <td>10:55</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Rei Malhas</td>
                <td>10:56</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Posto Ruff</td>
                <td>10:58</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>

            <tr>
                <td>Creche Lagoinha</td>
                <td>11:00</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto G.D.</td>
                <td>11:02</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>

            <tr>
                <td>Ecoponto</td>
                <td>11:03</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>

            <tr>
                <td>Drogaria Real</td>
                <td>11:05</td>
                <td><div class="vermelhoponto"></div></td>
                
            </tr>

            <tr>
                <td>Padaria Pão de Ouro</td>
                <td>11:07</td>
                <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
                <td>Igreja Batista</td>
                <td>11:09</td>
                <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
                <td>Bar do Claudemir</td>
                <td>11:10</td>
                <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
                <td>UBS - São Luiz</td>
                <td>11:10</td>
                <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
                <td>Igreja Deus é Amor</td>
                <td>11:11</td> 
                <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Conselho Tutelar</td>
               <td>11:12</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>11:15</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Fort Mat.de Contrução</td>
               <td>11:17</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Emei - Galdina</td>
               <td>11:20</td>
               <td><div class="vermelhoponto"></div></td>
            </tr>

            <tr>
               <td>Vivo/Moda Mat.de Contrução</td>
               <td>11:22</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Santa Casa</td>
               <td>11:25</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Nelson Fernandes</td>
               <td>11:26</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Asilo</td>
               <td>11:28</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Rotatória Planalto</td>
               <td>11:30</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>UBS - Estrela</td>
               <td>11:50</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>


            <tr>
               <td>Matadouro Estrela</td>
               <td>12:00</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>

            <tr>
               <td>Elektro Planalto</td>
               <td>12:20</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>


            <tr>
               <td>Padaria Planalto</td>
               <td>12:21</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>


            <tr>
               <td>Praça do Rosário</td>
               <td>12:25</td>
               <td><div class="vermelhoponto"></div></td>

            </tr>
          
        </tbody>
        <tfoot>
            <tr>
                <th>Pontos</th>
                <th>Horário</th>
                <th>Cor</th>
               
               
            </tr>
        </tfoot>
    </table>
    </div>

    <!-- TABELA Laranja -->
    <div class="col-sm-12 col-md-12 my-5" id="tablelaranja"> 

<table id="example3" class="display table table-success table-striped" style="width:100%;color:#000">
        <thead>
            <tr>
                <th>Pontos</th>
                <th>Horário</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hotel São Paulo</td>
                <td>15:10</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto 2 avenidas</td>
                <td>15:12</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Sanatório(CAIS)</td>
                <td>05:13</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Ginásio</td>
                <td>15:15</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Rodoviária</td>
                <td>15:18</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Vila João Lázaro</td>
                <td>15:18</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Santa casa</td>
                <td>15:20</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Nelson Fernandes</td>
                <td>15:21</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>EMEI-Maria Amélia</td>
                <td>15:23</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça José Gonso 15</td>
                <td>15:25</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça do Rosário</td>
                <td>15:30</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Rei Malhas</td>
                <td>15:34</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Mercado do Rani</td>
                <td>15:35</td>
                <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
                <td>Posto Ruff</td>
                <td>15:37</td>
                <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
                <td>Crehe Lagoinha</td>
                <td>15:39</td>
                <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
                <td>Posto GD</td>
                <td>15:40</td>
                <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
                <td>Ecoponto</td>
                <td>15:41</td> 
                <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Mercado Zanin (Serra)</td>
               <td>15:41</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Drogaria Real</td>
               <td>15:42</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de ouro</td>
               <td>15:43</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>São José Operário</td>
               <td>15:43</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Igrja Batista</td>
               <td>15:45</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>R: Josefina B. Barioni</td>
               <td>15:46</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Bar do Claudemir</td>
               <td>15:46</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>UBS-São Luiz</td>
               <td>15:48</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Igrja Deus é amor</td>
               <td>15:48</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>O armazém</td>
               <td>15:50</td>
               <td><div class="laranjaponto"></div></td>

            </tr>


            <tr>
               <td>Concelho tutelar</td>
               <td>15:50</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Caic</td>
               <td>15:52</td>
               <td><div class="laranjaponto"></div></td>

            </tr>


            <tr>
               <td>Padaria pão de ouro</td>
               <td>15:52</td>
               <td><div class="laranjaponto"></div></td>

            </tr>


            <tr>
               <td>Drogaria real</td>
               <td>15:54</td>
               <td><div class="laranjaponto"></div></td>

            </tr>


            <tr>
               <td>Fort material de constr.</td>
               <td>15:55</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Supermercado são sebastião</td>
               <td>15:55</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Bambina</td>
               <td>15:57</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>EMEI- Galdina</td>
               <td>15:57</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Vivo/Moda material de construção</td>
               <td>15:58</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Câmera municipal</td>
               <td>15:59</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Rodoviária</td>
               <td>16:00</td>
               <td><div class="laranjaponto"></div></td>

            </tr>
            </tbody>
        <tfoot>
            <tr>
                <th>Pontos</th>
                <th>Horário</th>
                <th>Cor</th>
               
               
            </tr>
        </tfoot>
    </table>
</div>

    
<div class="container rodape">
    <div class="row">
        <div class="col-sm-12 col-md-12">

</div>
    <ul>
    <li>circular.srpq@gmail.com</li>
  </ul>
</div>
    
<script>
    let btnVerde = document.getElementById("btnVerde")
    let btnVermelho = document.getElementById("btnVermelho")
    let btnLaranja = document.getElementById("btnLaranja")

    let tablelaranja = document.getElementById("tablelaranja")
    let tableverde = document.getElementById("tableverde")
    let tablevermelho = document.getElementById("tablevermelho")


btnVermelho.addEventListener("click", ()=>{
    tableverde.style.display="none";
    tablevermelho.style.display="block";
    tablelaranja.style.display="none";
})

btnVerde.addEventListener("click", ()=>{
    tableverde.style.display="block";
    tablevermelho.style.display="none";
    tablelaranja.style.display="none";
})

btnLaranja.addEventListener("click", ()=>{
    tableverde.style.display="none";
    tablevermelho.style.display="none";
    tablelaranja.style.display="block";
})




</script>


    </div>
<script>
new DataTable('#example');
new DataTable('#example2');
new DataTable('#example3');
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
</body>
</html>