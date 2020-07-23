<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h4>Calculadora de Imposto</h4>
        Valor do produto: <br>
        <input type="text" name="valor" id=""><br><br>
        Taxa de imposto (em %): <br>
        <input type="text" name="taxa" id=""><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_POST['valor']) && empty($_POST['valor']) == false){
            $valor = floatval($_POST['valor']);
            $taxa = floatval($_POST['taxa']);

            $valorTotal = $valor - ($valor * ($taxa / 100));
            $imposto = $valor * ($taxa / 100);
            echo "<br> Valor do produto: R$ ".$valor."<br>";
            echo "Taxa de imposto: ".$taxa."%";
            echo "<hr>";
            echo  "Imposto: R$ ".$imposto."<br>";
            echo  "Produto: R$ ".$valorTotal;
            
        }
    ?>
</body>
</html>