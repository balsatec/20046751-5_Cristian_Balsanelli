<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <?php if (isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    
    }else{

        $pagina = "";
    }

    ?>
     

</head>
<body>

    <?php require_once("dados/arrays.php") ?>

    <div class="topo">
        <div class="base">
            <ul class="menu">
                <li><a href="?pagina=home">Home</a></li>
                <li><a href="?pagina=quem-somos">Quem Somos</a></li>
                <li class="logo"><a href="?pagina=home"><img src="images/logo.png" alt=""/></a></li>
                <li><a href="?pagina=contato">Contato</a></li>
                <li><a href="?pagina=localizacao">Localização</a></li>
            </ul>
        </div>
    </div>

    <div class="conteudoPaginas">

        <?php

            if(($pagina == "") || ($pagina == "home")){
                require_once("pages/home.php");

            }else if($pagina == "quem-somos"){
                 require_once("pages/quemsomos.php");

            

            }else if($pagina == "contato"){
                 require_once("pages/contato.php");

            
            
            }else if($pagina == "localizacao"){
                 require_once("pages/localizacao.php");

            }else{}
        ?>
        
    </div>

    <footer>
        <div class="base">
            Aluno: Cristian Balsanelli<br>
            RA: 20046751-5
        </div>
    </footer>
</body>
</html>