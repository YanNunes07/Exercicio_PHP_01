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
        include '../model/salario.class.php';

        $sal = new Salario;
        $sal->setSalarioFixo(2200.00);
        $sal->setValorVendas(1975,00);
        $sal->setValorComissao(3);
        
 

        echo '<br><h2>Resultados</h2>'
        .'<br><p>Valor do salario é de R$: '.$sal->getSalarioFixo()
        .'<br>Valor das vendas é de R$: '.$sal->getValorVendas()
        .'<br>O valor da Comissão é de 3% que ficaR$:'.$sal->comissao()
        .'<br>O valor total que o funcionario ira receber é de R$: '.$sal->total()
        .'</p>';
    ?>
    <br>
    <a href="../view/index.php">
        <button>Voltar a Página Inicial</button>
    </a>
</body>
</html>