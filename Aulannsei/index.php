<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Aula 3 - Propriedades Aritmeticas</title>
</head>
<body>
    <?php
        $preco= 120;
        $quantidade= 3;
        $desconto= 30;
        $parcelas= 2;
    
        echo "Valor total da compra: " .($preco*$quantidade)<br>;
        echo "Valor da compra com desconto: " .(($preco*$quantidade)-$desconto)<br>;
        echo "Valor de cada parcela: " .((($preco*$quantidade)-$desconto)/$parcelas)<br>;
        echo "Valor da compra caso seja aplicada uma taxa de R$15,00: " .(((($preco*$quantidade)-$desconto)/$parcelas)+15)<br>;
        echo "Valor final: " .((((($preco*$quantidade)-$desconto)/$parcelas)+15)%2);
    ?>
</body>
    
</html>
