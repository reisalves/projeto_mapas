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
  <button type="button" class="btn" id="btnRoxo" style="background-color:purple">Roxo</button>
  <button type="button" class="btn" id="btnAzul" style="background-color:blue">Azul</button>
  <button type="button" class="btn" id="btnVerde" style="background-color:green">Verde</button>
  <button type="button" class="btn" id="btnLaranja" style="background-color:#FF6100 ">Laranja</button>
  <button type="button" class="btn" id="btnAmarelo" style="background-color:#baae00">Amarelo</button>
</div>
</div>
<br>
<!-- LISTA 1 ROXO  -->
    <div class="col-sm-12 col-md-12 my-5" id="tableroxo"> 

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
                <td><div class="roxoponto"></div></td>
                
            </tr>

            <tr>
                <td>Nelson Fernades</td>
                <td>05:13</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Hábito Confecção</td>
                <td>05:15</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Chegada na Estrela</td>
                <td>05:35</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>PSF Estrela</td>
                <td>05:45</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Matadouro Estrela</td>
                <td>05:47</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Planalto Elektro</td>
                <td>06:05</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>

            <tr>
                <td>Padaria Planalto</td>
                <td>06:06</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto Roseira</td>
                <td>06:07</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>

            <tr>
                <td>Nelson Fernandes</td>
                <td>06:08</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça do Rosário</td>
                <td>06:10</td>
                <td><div class="roxoponto"></div></td>
                
            </tr>

            <tr>
                <td>Padaria Veneza</td>
                <td>06:12</td>
                <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
                <td>Posto Ruff</td>
                <td>06:15</td>
                <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
                <td>Creche Lagoinha</td>
                <td>06:17</td>
                <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
                <td>Posto GD</td>
                <td>06:20</td>
                <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
                <td>Ecoponto</td>
                <td>06:22</td> 
                <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>06:25</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Paróquia São José do Operário</td>
               <td>06:27</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Creche São Luiz</td>
               <td>06:30</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Bar do Claudemir</td>
               <td>06:34</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>UBS São Luis</td>
               <td>06:35</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Igreja Deus é Amor</td>
               <td>06:38</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>06:40</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Fort Material de Contrução</td>
               <td>06:43</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Bambina</td>
               <td>06:45</td>
               <td><div class="roxoponto"></div></td>

            </tr>


            <tr>
               <td>EMEI Galdina</td>
               <td>06:48</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Moda Mat.Construção </td>
               <td>06:50</td>
               <td><div class="roxoponto"></div></td>

            </tr>


            <tr>
               <td>Posto 2 Avenidas</td>
               <td>06:53</td>
               <td><div class="roxoponto"></div></td>

            </tr>


            <tr>
               <td>CAIS</td>
               <td>06:55</td>
               <td><div class="roxoponto"></div></td>

            </tr>


            <tr>
               <td>Rodoviária</td>
               <td>06:58</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Santa Casa</td>
               <td>07:00</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Nelson Fernandes</td>
               <td>07:02</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>EMEI Maria Amélia</td>
               <td>07:03</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Supermercado Tuão</td>
               <td>07:05</td>
               <td><div class="roxoponto"></div></td>

            </tr>

            <tr>
               <td>Praça do Rosário</td>
               <td>07:10</td>
               <td><div class="roxoponto"></div></td>

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



<!-- LISTA 2 AZUL  -->
    <div class="col-sm-12 col-md-12 my-5" id="tableazul"> 

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
                <td>Reimalhas</td>
                <td>07:12</td>
                <td><div class="azulponto"></div></td>
                
            </tr>

            <tr>
                <td>Vendinha</td>
                <td>07:12</td>
                <td><div class="azulponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Posto Ruff</td>
                <td>07:15</td>
                <td><div class="azulponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Creche Lagoinha</td>
                <td>07:16</td>
                <td><div class="azulponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Posto GD</td>
                <td>07:18</td>
                <td><div class="azulponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Ecoponto</td>
                <td>07:18</td>
                <td><div class="azulponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Drogaria Palhares</td>
                <td>07:20</td>
                <td><div class="azulponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Padaria Pão de Ouro</td>
                <td>07:22</td>
                <td><div class="azulponto"></div></td>
                
            </tr>

            <tr>
                <td>Bar do Nilson</td>
                <td>07:23</td>
                <td><div class="azulponto"></div></td>
                
            </tr>

            <tr>
                <td>Paróquia São José Operário</td>
                <td>07:24</td>
                <td><div class="azulponto"></div></td>
                
            </tr>

            <tr>
                <td>Creche São Luiz</td>
                <td>07:25</td>
                <td><div class="azulponto"></div></td>
                
            </tr>

            <tr>
                <td>R.Josefina B.Barioni</td>
                <td>07:27</td>
                <td><div class="azulponto"></div></td>
                
            </tr>

            <tr>
                <td>Bar do Claudemir</td>
                <td>07:28</td>
                <td><div class="azulponto"></div></td>

            </tr>

            <tr>
                <td>UBS São Luiz</td>
                <td>07:30</td>
                <td><div class="azulponto"></div></td>

            </tr>

            <tr>
                <td>Padaria Pão de Ouro</td>
                <td>07:35</td>
                <td><div class="azulponto"></div></td>

            </tr>

            <tr>
                <td>Drogaria Palhares</td>
                <td>07:37</td>
                <td><div class="azulponto"></div></td>

            </tr>

            <tr>
                <td>Fort Mat. de Construção</td>
                <td>07:38</td> 
                <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Bambina</td>
               <td>07:40</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>EMEI Galdina</td>
               <td>07:42</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>Moda Mat.de Construção</td>
               <td>07:45</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>Câmara Municipal</td>
               <td>07:47</td>
               <td><div class="azulponto"></div></td>
            </tr>

            <tr>
               <td>Hotel São Paulo</td>
               <td>07:50</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>CAIS</td>
               <td>07:53</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>Ginásio de Esportes</td>
               <td>07:55</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>Rodoviária</td>
               <td>07:57</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>Vila João Lázaro</td>
               <td>07:59</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>Santa Casa</td>
               <td>08:00</td>
               <td><div class="azulponto"></div></td>

            </tr>


            <tr>
               <td>Nelson Fernandes</td>
               <td>08:01</td>
               <td><div class="azulponto"></div></td>

            </tr>

            <tr>
               <td>EMEI Maria Amélia</td>
               <td>08:02</td>
               <td><div class="azulponto"></div></td>

            </tr>


            <tr>
               <td>Supermercado Tuão</td>
               <td>08:03</td>
               <td><div class="azulponto"></div></td>

            </tr>


            <tr>
               <td>EMEF Francisco Ribeiro</td>
               <td>08:05</td>
               <td><div class="azulponto"></div></td>

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

    <!-- LISTA 3 VERDE -->
    <div class="col-sm-12 col-md-12 my-5" id="tableverde"> 

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
                <td>10:45</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto 2 avenidas</td>
                <td>10:47</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>CAIS</td>
                <td>10:48</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Rodoviária</td>
                <td>10:50</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Santa Casa</td>
                <td>10:52</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Nelson Fernandes</td>
                <td>10:54</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça do Rosário</td>
                <td>10:57</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Reimalhas</td>
                <td>10:59</td>
                <td><div class="verdeponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto Ruff</td>
                <td>11:03</td>
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
                <td>Crehe Lagoinha</td>
                <td>11:06</td>
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
                <td>Posto GD</td>
                <td>11:10</td>
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
                <td>Ecoponto</td>
                <td>11:12</td> 
                <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Drogaria Palhares</td>
               <td>11:15</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de ouro</td>
               <td>11:17</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>São José Operário</td>
               <td>11:19</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Creche São Luiz</td>
               <td>11:20</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Bar do Claudemir</td>
               <td>11:22</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>UBS-São Luiz</td>
               <td>11:24</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Igrja Deus é amor</td>
               <td>11:26</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>11:28</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Fort Mat. de Contrução</td>
               <td>11:30</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>EMEI Galdina</td>
               <td>11:33</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Moda Mat, de Contrução</td>
               <td>11:36</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Santa Casa</td>
               <td>11:40</td>
               <td><div class="verdeponto"></div></td>

            </tr>


            <tr>
               <td>Nelson Fernandes</td>
               <td>11:42</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Asilo</td>
               <td>11:43</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Rotatória Planalto</td>
               <td>11:45</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>UBS Estrela</td>
               <td>12:10</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Matadouro Estrela</td>
               <td>12:15</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Elektro Planalto</td>
               <td>12:30</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Planalto</td>
               <td>12:32</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Nelson Fernandes</td>
               <td>12:38</td>
               <td><div class="verdeponto"></div></td>

            </tr>

            <tr>
               <td>Praça do Rosário</td>
               <td>12:40</td>
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

<!-- LISTA 4 LARANJA  -->
<div class="col-sm-12 col-md-12 my-5" id="tablelaranja"> 

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
                <td>Hotel São Paulo</td>
                <td>15:10</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto 2 Avenidas</td>
                <td>15:12</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>CAIS</td>
                <td>15:13</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Ginásio de Esportes</td>
                <td>15:15</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Rodoviária</td>
                <td>15:18</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Santa Casa</td>
                <td>15:20</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Nelson Fernandes</td>
                <td>15:21</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>
          
            <tr>
                <td>EMEI Maria Amélia</td>
                <td>15:23</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça da Cinelandia</td>
                <td>15:25</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça do Rosário</td>
                <td>15:30</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Reimalhas</td>
                <td>15:34</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Vendinha</td>
                <td>15:36</td>
                <td><div class="laranjaponto"></div></td>
                
            </tr>

            <tr>
                <td>Creche Lagoinha</td>
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
                <td>Drogaria Palhares</td>
                <td>15:42</td> 
                <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>15:43</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Paróquia São José Operário</td>
               <td>15:45</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Creche São Luiz</td>
               <td>15:47</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>R.Josefina B.Barioni</td>
               <td>15:48</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>UBS São Luiz</td>
               <td>15:52</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Igreja Deus é Amor</td>
               <td>15:53</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>15:55</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Drogaria Palhares</td>
               <td>15:57</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Fort Mat.de Contrução</td>
               <td>15:58</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Bambina</td>
               <td>16:00</td>
               <td><div class="laranjaponto"></div></td>

            </tr>


            <tr>
               <td>EMEI Galdina</td>
               <td>16:02</td>
               <td><div class="laranjaponto"></div></td>

            </tr>

            <tr>
               <td>Moda Mat.Construção </td>
               <td>16:05</td>
               <td><div class="laranjaponto"></div></td>

            </tr>


            <tr>
               <td>Hotel São Paulo</td>
               <td>16:10</td>
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

    <!-- LISTA 5 AMARELO  -->
    <div class="col-sm-12 col-md-12 my-5" id="tableamarelo"> 

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
                <td>Hotel São Paulo</td>
                <td>16:50</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto 2 Avenidas</td>
                <td>16:52</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>
          
            <tr>
                <td>CAIS</td>
                <td>16:54</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Ginásio de Esportes</td>
                <td>16:55</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Rodoviária</td>
                <td>16:57</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Vila João Lázaro</td>
                <td>16:57</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Santa Casa </td>
                <td>17:00</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>
          
            <tr>
                <td>Nelson Fernandes</td>
                <td>17:02</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Praça do Rosário</td>
                <td>17:05</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Reimalhas</td>
                <td>17:07</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Vendinha</td>
                <td>17:08</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Posto Ruff</td>
                <td>17:10</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Creche Lagoinha</td>
                <td>17:12</td>
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
                <td>Posto GD</td>
                <td>17:14</td>
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
                <td>Ecoponto</td>
                <td>17:16</td> 
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>17:18</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Bar do Nilson</td>
               <td>17:20</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Paróquia São José do Operário</td>
               <td>17:22</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Creche São Luiz</td>
               <td>17:24</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>R.Josefina B.Braioni</td>
               <td>17:26</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Bar do Claudemir</td>
               <td>17:28</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>UBS São Luis</td>
               <td>17:30</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Igreja Deus é Amor</td>
               <td>17:31</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>17:32</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Drogaria Palhares</td>
               <td>17:33</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Fort Mat. de Construção</td>
               <td>17:35</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Bambina</td>
               <td>17:37</td>
               <td><div class="amareloponto"></div></td>

            </tr>


            <tr>
               <td>EMEI Galdina</td>
               <td>17:38</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Moda Construção</td>
               <td>17:40</td>
               <td><div class="amareloponto"></div></td>

            </tr>


            <tr>
               <td>Nelson Fernandes</td>
               <td>17:45</td>
               <td><div class="amareloponto"></div></td>

            </tr>


            <tr>
               <td>Asilo</td>
               <td>17:46</td>
               <td><div class="amareloponto"></div></td>

            </tr>


            <tr>
               <td>Posto Roseira</td>
               <td>17:48</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Rotatória Planalto</td>
               <td>17:50</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Estrela</td>
               <td>18:10</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Hábito Confecção</td>
               <td>18:30</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Nelson Fernandes</td>
               <td>18:33</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Praça do Rosário</td>
               <td>18:35</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
                <td>Reimalhas</td>
                <td>18:37</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Vendinha</td>
                <td>18:38</td>
                <td><div class="amareloponto"></div></td>
                
            </tr>

            <tr>
                <td>Creche Lagoinha</td>
                <td>18:42</td>
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
                <td>Posto GD</td>
                <td>18:45</td>
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
                <td>Ecoponto</td>
                <td>18:47</td>
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
                <td>Mercado Zanin (Serra)</td>
                <td>18:48/td>
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
                <td>Drogaria Palhares</td>
                <td>18:50</td> 
                <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Padaria Pão de Ouro</td>
               <td>18:52</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Paróquia São José Operário</td>
               <td>18:54</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Creche São Luiz</td>
               <td>18:55</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>R.Josefina B.Barioni</td>
               <td>18:58</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Bar do Claudemir</td>
               <td>18:59</td>
               <td><div class="amareloponto"></div></td>

            </tr>

            <tr>
               <td>Igreja Deus é Amor</td>
               <td>19:00</td>
               <td><div class="amareloponto"></div></td>

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
    let btnRoxo = document.getElementById("btnRoxo")
    let btnAzul = document.getElementById("btnAzul")
    let btnVerde = document.getElementById("btnVerde")
    let btnLaranja = document.getElementById("btnLaranja")
    let btnAmarelo = document.getElementById("btnAmarelo")

    let tableroxo = document.getElementById("tableroxo")
    let tableazul = document.getElementById("tableazul")
    let tableverde = document.getElementById("tableverde")
    let tablelaranja = document.getElementById("tablelaranja")
    let tableamarelo = document.getElementById("tableamarelo")


btnRoxo.addEventListener("click", ()=>{
    tableroxo.style.display="block";
    tableazul.style.display="none";
    tableverde.style.display="none";
    tablelaranja.style.display="none";
    tableamarelo.style.display="none";
})

btnAzul.addEventListener("click", ()=>{
    tableroxo.style.display="none";
    tableazul.style.display="block";
    tableverde.style.display="none";
    tablelaranja.style.display="none";
    tableamarelo.style.display="none";
})

btnVerde.addEventListener("click", ()=>{
    tableroxo.style.display="none";
    tableazul.style.display="none";
    tableverde.style.display="block";
    tablelaranja.style.display="none";
    tableamarelo.style.display="none";
})

btnLaranja.addEventListener("click", ()=>{
    tableroxo.style.display="none";
    tableazul.style.display="none";
    tableverde.style.display="none";
    tablelaranja.style.display="block";
    tableamarelo.style.display="none";
})

btnAmarelo.addEventListener("click", ()=>{
    tableroxo.style.display="none";
    tableazul.style.display="none";
    tableverde.style.display="none";
    tablelaranja.style.display="none";
    tableamarelo.style.display="block";
})




</script>


    </div>
<script>
new DataTable('#example');
new DataTable('#example2');
new DataTable('#example3');
new DataTable('#example4');
new DataTable('#example5');
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
</body>
</html>