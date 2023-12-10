<!DOCTYPE html>
<html>
<?php
function Dump($arA) {
    echo "<pre>";
    print_r($arA);
    echo "</pre>";
}

$number = 5;
$n = $number - 1;
$i = 0;
$j = 0;
$k = 0;
$count = 1;
while ($count <= ($number ** 2)) {
    do {
        $arM[$i][$j] = $count;
        if ($count === ($number ** 2)) {
            break(2);
        }
        $count++;
        $j++;
    } while ($j < ($n - $k));
    do {
        $arM[$i][$j] = $count;
        if ($count === ($number ** 2)) {
            break(2);
        }
        $count++;
        $i++;
    } while ($i < ($n - $k));
    do {
        $arM[$i][$j] = $count;
        if ($count === ($number ** 2)) {
            break(2);
        }
        $count++;
        $j--;
    } while ($j > ($k));
    do {
        $arM[$i][$j] = $count;
        if ($count === ($number ** 2)) {
            break(2);
        }       
        $count++;
        $i--;
    } while ($i > ($k));
    $k++;
    $i = $k;
    $j = $k;
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