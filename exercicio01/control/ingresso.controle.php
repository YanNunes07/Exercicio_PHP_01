<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
<br>  
    <br>
    <?php
        include '../model/ingresso.class.php';

        $ing = new Ingresso;
        $ing->setValorDoIngresso(35.00);
        $ing->setQuantidade(2);
        $ing->setFormaDePagamento("dinheiro");
        $ing->setDesconto(10);  
 

        echo '<br><h2>Resultados</h2>'
        .'<br><p>Valor do ingresso é de R$: '.$ing->getValorDoIngresso()
        .'<br>Quantidades de ingressos: '.$ing->getQuantidade()
        .'<br>Forma de pagamento (dinheiro, cartão ou pix):'.$ing->getFormaDePagamento()
        .'<br>O valor sem desconto é de R$: '.$ing->valorTotal()
        .'<br>O valor do desconto é de R$: '.$ing->totalComDesconto()
        .'<br>O valor total é de R$: '.$ing->total()
        .'</p>';
    ?>
    <br>
    <a href="../view/index.php">
        <button>Voltar a Página Inicial</button>
    </a>
</body>
</html>