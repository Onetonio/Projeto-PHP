<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: black;
        }
        
        .exercicio {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-left: auto; 
            margin-right: auto; 
            max-width: 600px; 
        }
        
        .exercicio h2 {
            margin-top: 0;
            color: red;
            cursor: pointer;
        }
        
        .exercicio p {
            margin-top: 0;
            color: black;
            display: none;  
        }
    </style>
</head>
<body>

<div class="exercicio">
    <h2 onclick="toggleContent(this)">Atividade 1</h2>
    <p>
    <?php

$a = 2;
$b = 4;
$c = 6;


$m = (($c + $b) / 2) ** (--$c);
$t = --$c ** ($b + $a);
$x = --$c + $b;
$y = $b++ + $a;
$z = $a - $b--;

echo "<br><strong>Resultados:</strong><br>";
echo "<strong>a:</strong> $a<br>";
echo "<strong>b:</strong> $b<br>";
echo "<strong>c:</strong> $c<br>";
echo "<strong>m:</strong> $m<br>";
echo "<strong>t:</strong> $t<br>";
echo "<strong>x:</strong> $x<br>";
echo "<strong>y:</strong> $y<br>";
echo "<strong>z:</strong> $z<br><br>";


$a_double = (double) $a;
$b_double = (double) $b;
$c_str = (string) $c;

echo "<strong>Conversões de tipos:</strong><br><br>";
echo "<strong>a (double):</strong> $a_double<br>";
echo "<strong>b (double):</strong> $b_double<br>";
echo "<strong>c (string):</strong> $c_str<br>";
?>
    </p>
</div>

<div class="exercicio">
    <h2 onclick="toggleContent(this)">Atividade 2</h2>
    <p>
    <?php

$raio = 5;
$pi = 3.14;
$perimetro = $pi * $raio;
$area = $pi * ($raio * $raio);

echo "<strong>Resultados do Círculo:</strong><br><br>";
echo "<strong>Raio do círculo:</strong> $raio cm<br>";
echo "<strong>Perímetro do círculo:</strong> $perimetro cm<br>";
echo "<strong>Área do círculo:</strong> $area cm²<br><br>";
?>
    </p>
</div>

<div class="exercicio">
    <h2 onclick="toggleContent(this)">Atividade 3</h2>
    <p>
    <?php

$x = 6;
$y = 3;

echo "<strong>Operações Matemáticas:</strong><br>";
echo "<strong>x =</strong> $x<br>";
echo "<strong>y =</strong> $y<br><br>";

echo "<strong>x + y =</strong> " . ($x + $y) . "<br>";
echo "<strong>x - y =</strong> " . ($x - $y) . "<br>";
echo "<strong>x * y =</strong> " . ($x * $y) . "<br>";
echo "<strong>x / y =</strong> " . ($x / $y) . "<br>";
echo "<strong>Resto da divisão =</strong> " . ($x % $y) . "<br>";
echo "<strong>x ^ y =</strong> " . pow($x, $y) . "<br>";
echo "<strong>Média =</strong> " . (($x + $y) / 2) . "<br>";
echo "<strong>Raiz quadrada da soma =</strong> " . sqrt($x + $y);
?>
    </p>
</div>

<div class="exercicio">
    <h2 onclick="toggleContent(this)">Atividade 4</h2>
        <p>
        <?php

        $X = 3;

        $z = ((2 * pow($X, 2) - 3 * pow($X, $X + 1)) / (2 * $X) + sqrt($X + 1) / 4) / sqrt(4 * $X + pow(2, $X));

        echo "<strong>O Resultado da Equação para X =</strong> $X é: $z";
        ?>
    </p>
</div>

<div class="exercicio">
    <h2 onclick="toggleContent(this)">Atividade 5</h2>
    <p>
    <?php

$a = 10;
$b = 2;
$c = 32;

$r = pow($a + $b, 2);
$s = pow($b + $c, 2);
$d = ($r + $s) / 2;

echo "<strong>O Valor de D é Igual a:</strong> $d"
?>

    </p>

</div>
<script>
    function toggleContent(element) {
        
        var exercicios = document.querySelectorAll('.exercicio');
        
        
        exercicios.forEach(function(exercicio) {
            var conteudo = exercicio.querySelector('p'); 
            if (conteudo !== element.nextElementSibling) {
                conteudo.style.display = 'none'; 
            }
        });

        
        const conteudo = element.nextElementSibling;
        conteudo.style.display = conteudo.style.display === 'none' ? 'block' : 'none';
    }
</script>
</body>
</html>

