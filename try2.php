<!DOCTYPE html>
<html>
<?php
function Dump($arA) {
    echo "<pre>";
    print_r($arA);
    echo "</pre>";
}

$number = 8; // размерность матрицы

if ($number < 0) {
    echo "Невозможно построить матрицу для отрицательного значения размерности!";
} elseif ($number == 0) {
    echo "Невозможно построить матрицу для нулевого значения размерности!";
} else {
    $k = $number - 1; // количество итераций во внутреннем цикле
    $curNumber = 1; // текущее число
    $i = 0; // номер строки, в которой находится текущее число
    $j = 0; // номер столбца, в котором находится текущее число
    $shift = 0; // смещение координаты текущего числа
    $curWay = ["i" => 0, "j" => 1]; // направление обхода матрицы

    while ($curNumber <= ($number ** 2)) {
        $countK = $k;
        while ($countK != 0) {
            $arM[$i][$j] = $curNumber;
            $curNumber++;
            $i += $curWay["i"];
            $j += $curWay["j"];
            $countK--;
        }
        if ($curWay["i"] == 0) {
            if ($curWay["j"] == 1) {
                $curWay = ["i" => 1, "j" => 0];
                
            } else {
                $curWay = ["i" => -1, "j" => 0];
            }
        } elseif ($curWay["i"] == 1) {
            $curWay = ["i" => 0, "j" => -1];
        } else {
            $curWay = ["i" => 0, "j" => 1];
            $k = (($k - 2) != 0) ? ($k - 2) : ($k - 1);
            $shift++;
            $i = $shift;
            $j = $shift;
        }
    }
}
// Dump($arM);
?>
<head>
    <meta charset="UTF-8" />
    <title>Матрица по спирали</title>
    <style>
        table {
            border: 1px solid black;
            border-spacing: 0px;
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            font-size: 28px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
        <?php for($i = 0; $i < $number; $i++): ?>
            <tr>
            <?php
            for($j = 0; $j < $number; $j++): ?>
                <td><?=$arM[$i][$j]?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        <tbody>
    <table>
</body>

</html>