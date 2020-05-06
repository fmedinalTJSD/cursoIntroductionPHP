<?php 
    echo 'Hello World!!';
    $array = [
        'key1' => 'lado',
        0 => 'ledo',
        'key2' => 'lido',
        1 => 'lodo',
        2 => 'ludo'
    ];
    echo $array[0];
    $arrayKeys = array_keys($array);
    
    echo "<br>";
    echo $arrayKeys[0];
    echo "<br>";
    echo $arrayKeys[1];
    echo "<br>";
    echo $arrayKeys[2];
    echo "<br>";
    echo $arrayKeys[3];
    echo "<br>";
    echo $arrayKeys[4];
    echo "<br>";

    
    for($idKey = 0; $idKey < count($array); $idKey = $idKey + 1){
        echo $array[$arrayKeys[$idKey]] . ', ';
    }
    echo "<br>";
    echo ' decirlo al reves lo dudo.';
    echo "<br>";
    for($idKey = count($array)-1; $idKey >= 0; $idKey = $idKey - 1){
        echo $array[$arrayKeys[$idKey]] . ', ';
    }
    echo "<br>";
    echo '!Que trabajo me ha costado!';
    echo "<br>";

    echo "==========================================";

    echo "<br><br><br>";
    $arrayCountry = [
        'Mexico' => ['Tijuana', 'Tepic', 'CDMX'],
        'USA' => ['San Diego', 'Houston', 'Los Angeles']
    ];

    foreach($arrayCountry as $pais => $city){
        echo $pais . ': ';
        foreach($city as $nameCity){
            echo $nameCity . ' ';
        }
        echo "<br>";
    }

    echo "<br>";
    echo "==========================================";

    echo "<br><br><br>";

    $numbers = [23,54,32,67,34,78,98,56,21,34,57,92,12,5,61];
    
    $numLowsOrden = [0];
    $numHigh = [0,0,0];
    $newNumber = false;

    for($idNumbers = 0; $idNumbers < count($numbers); $idNumbers ++){
        for($idNumbers2 = $idNumbers; $idNumbers2 < count($numbers); $idNumbers2 ++){
            if ($numbers[$idNumbers] < $numbers[$idNumbers2]){
                $numtemp = $numbers[$idNumbers];
                $numbers[$idNumbers] = $numbers[$idNumbers2];
                $numbers[$idNumbers2] = $numtemp;
            }
        }
    }
    var_dump($numbers);
    echo "<br>";
    echo "==========================================";
?>
