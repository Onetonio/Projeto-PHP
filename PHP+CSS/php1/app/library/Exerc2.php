<!DOCTYPE html>
<html>
<head>
    <title>Exercícios PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        h1, h2 {
            cursor: pointer;
            transition: color 0.3s ease;
        }
        h1:hover, h2:hover {
            color: #ffd700;
        }
        .content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
        p {
            margin-bottom: 10px;
            font-size: 18px;
        }
        .response {
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin-top: 5px;
            margin-left: 20px;
        }
        .response span {
            font-weight: bold;
            color: #ffd700;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .fade-in {
            animation: fadeIn 0.5s ease;
        }
        @keyframes moveUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .move-up {
            animation: moveUp 0.5s ease;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 onclick="toggleContent('primo')">Verificação de Número Primo</h2>
    <div id="primo" class="content">
        <form method="GET">
            <p>Digite um número para verificar se é primo:</p>
            <input id="campo" type="number" name="numero" required>
            <button type="">Verificar</button>
            <a style="cursor: pointer; userselect:none;" onclick="numero()">Mosrar!</a>
            <p id="mostrar">O número digitado é:</p>
        </form>



        <?php
        if (isset($_GET['numero'])) {
            $numero = $_GET['numero'];

            function verificaPrimo($num) {
                if ($num <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
?>

<?php
            echo "<p>O número digitado é: $numero</p>";

            if (verificaPrimo($numero)) {
                echo "<p>O número $numero é primo.</p>";
                echo "<p>Valores múltiplos de $numero:</p>";
                $totalMultiplos = 0;
                for ($i = 1; $i <= 10; $i++) {
                    $multiplo = $numero * $i;
                    echo "$multiplo ";
                    $totalMultiplos++;
                }
                echo "<p>Total de múltiplos: $totalMultiplos</p>";
            } else {
                echo "<p>O número $numero não é primo.</p>";
            }
        }
        ?>
        <script>
    function numero(){
        var texto;

        texto = document.getElementById('campo').value;
        document.getElementById('mostrar').innerHTML = "O número digitado é: " + texto;
    }
</script>
    </div>

    <h2 onclick="toggleContent('tabuada')">Tabuada do 7 e do 9</h2>
    <div id="tabuada" class="content">
        <div>
            <h3>Tabuada do 7</h3>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "7 x $i = " . (7 * $i) . "<br>";
            }
            ?>
        </div>
        <div>
            <h3>Tabuada do 9</h3>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "9 x $i = " . (9 * $i) . "<br>";
            }
            ?>
        </div>
    </div>

    <h2 onclick="toggleContent('multiplicacao')">Multiplicação de 1 até 10</h2>
    <div id="multiplicacao" class="content">
        <div>
            <h3>Utilizando WHILE</h3>
            <?php
            $i = 1;
            while ($i <= 10) {
                echo "Multiplicação de $i: ";
                for ($j = 1; $j <= 10; $j++) {
                    echo $i * $j . " ";
                }
                echo "<br>";
                $i++;
            }
            ?>
        </div>
        <div>
            <h3>Utilizando DO-WHILE</h3>
            <?php
            $i = 1;
            do {
                echo "Multiplicação de $i: ";
                for ($j = 1; $j <= 10; $j++) {
                    echo $i * $j . " ";
                }
                echo "<br>";
                $i++;
            } while ($i <= 10);
            ?>
        </div>
        <div>
            <h3>Utilizando FOR</h3>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "Multiplicação de $i: ";
                for ($j = 1; $j <= 10; $j++) {
                    echo $i * $j . " ";
                }
                echo "<br>";
            }
            ?>
        </div>
        <div>
            <h3>Utilizando FOREACH (com array)</h3>
            <?php
            $numeros = range(1,10);
            foreach ($numeros as $i) {
                echo "Multiplicação de $i: ";
                for ($j = 1; $j <= 10; $j++) {
                    echo $i * $j . " ";
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>

    <h1 onclick="toggleContent('validacaoMaioridade')">Validação de Maioridade</h1>
    <div id="validacaoMaioridade" class="content">
        <form method="post">
            <?php
            for ($i = 1; $i <= 15; $i++) {
                echo "<label for='idade$i'>Digite a idade da pessoa $i:</label>";
                echo "<input type='number' id='idade$i' name='idades[]' required><br>";
            }
            ?>
            <br>
            <button type="submit" name="verificar">Verificar</button>
        </form>

        <?php
        if (isset($_POST['verificar'])) {
            $idades = $_POST['idades'];
            $maiores = 0;
            $menores = 0;

            foreach ($idades as $idade) {
                if ($idade >= 18) {
                    $maiores++;
                } else {
                    $menores++;
                }
            }

            echo "<h3>Resultado:</h3>";
            echo "<p>Quantidade de pessoas maiores de idade: $maiores</p>";
            echo "<p>Quantidade de pessoas menores de idade: $menores</p>";
        }
        ?>
        </div>

        <h2 onclick="toggleContent('tabelaRegistros')">Tabela de Registros</h2>
    <div id="tabelaRegistros" class="content">
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Peso</th>
                <th>Altura</th>
            </tr>
            <?php
            $registros = [
                ["nomePessoa" => "João", "idade" => "41", "peso" => "78", "altura" => "1.77"],
                ["nomePessoa" => "André", "idade" => "29", "peso" => "65", "altura" => "1.85"],
                ["nomePessoa" => "Larissa", "idade" => "32", "peso" => "52", "altura" => "1.52"],
                ["nomePessoa" => "Cinthia", "idade" => "18", "peso" => "62", "altura" => "1.68"]
            ];

            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>{$registro['nomePessoa']}</td>";
                echo "<td>{$registro['idade']}</td>";
                echo "<td>{$registro['peso']}</td>";
                echo "<td>{$registro['altura']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

<script>
    function toggleContent(id) {
        var content = document.getElementById(id);
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            content.classList.remove('fade-in');
            content.classList.remove('move-up');
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            content.classList.add('fade-in');
            setTimeout(function() {
                content.classList.add('move-up');
            }, 100);
        }
    }
</script>
    </div>
</div>

<script>
    function toggleContent(id) {
        var content = document.getElementById(id);
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            content.classList.remove('fade-in');
            content.classList.remove('move-up');
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            content.classList.add('fade-in');
            setTimeout(function() {
                content.classList.add('move-up');
            }, 100);
        }
    }
</script>
</body>
</html>