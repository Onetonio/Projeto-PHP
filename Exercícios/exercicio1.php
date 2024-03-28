<form action="" method="GET">
    <label for="num">Digite um numero: </label>
    <input type="num" id="num" type="text">

    <button> type="submit">Enviar</button>
</form>


<?php

    $num = $_GET['num'];
    echo "Numero digitado: " . $num;

    ?>