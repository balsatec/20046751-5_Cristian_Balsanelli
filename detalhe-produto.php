<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <?php if (isset($_GET['prod'])){
        $produto = $_GET['prod'];
    
    }else{

        $produto = "";
    }

    ?>
     

</head>
<body>

    <?php require_once("dados/arrays.php") ?>

    <div class="topo">
        <div class="base">
            <ul class="menu">
                <li><a href="index.php?pagina=home">Home</a></li>
                <li><a href="index.php?pagina=quem-somos">Quem Somos</a></li>
                <li class="logo"><a href="index.php?pagina=home"><img src="images/logo.png" alt=""/></a></li>
                <li><a href="index.php?pagina=contato">Contato</a></li>
                <li><a href="index.php?pagina=localizacao">Localização</a></li>
            </ul>
        </div>
    </div>

    <div class="detalheProduto">

        <div class="base">
             <h1 class="titulo"><?php echo $produtos[$produto]['nome']; ?></h1>
            <div class="dets">
               

                <div class="imagemG">
                    <img src="images/pao-de-mel.jpg" />
                </div>

                <div class="descricao">
                    
                    <div>Referência: <?php echo $produtos[$produto]['referencia']; ?></div>
                    <div>Categoria: <?php echo $produtos[$produto]['categoria']; ?></div>
                    <div>Valor: <?php echo $produtos[$produto]['valor']; ?></div>
                    <div>Descrição:<br> <?php echo $produtos[$produto]['descricao']; ?></div>
                </div>

            </div>
        </div>
    </div>
       
        
    </div>

    <footer>
        <div class="base">
            Aluno: Cristian Balsanelli<br>
            RA: 20046751-5
        </div>
    </footer>
</body>
</html>