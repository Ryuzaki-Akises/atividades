<?php
    include "cabecalho.php";
?>
<?php
    if(empty($_GET)){
        include "jogada1.php";
        include "tabuleiro.php";
    }else if($_GET["jogada"]==2){
        include "jogada2.php";
        include "tabuleiro.php";
        $_SESSION["jogada"][0]=$_GET["jogada"];
    }elseif($_GET["jogada"]==1){
        include "jogada1.php";
        include "tabuleiro.php";
        $_SESSION["jogada"][0]=$_GET["jogada"];
    }
?>
</body>
</html>