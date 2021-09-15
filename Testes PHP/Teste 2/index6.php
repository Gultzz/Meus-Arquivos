<?php
    $a = [1,2,3,4,5];
    echo '<br>$a'." tem ".count($a)." elementos<br>"; // count() conta quantos itens tem dentro de um array
    print_r($a);

    $a[] = 6; // [] no final do nome da variavel adiciona um elemento no final dela
    echo "<br>";
    print_r($a);

    echo "<br> <h3>array_push</h3>";
    $push = array_push($a,7); // array_push() adiciona o item (2) no final da variavel (1)
    print_r($a);

    echo "<br> <h3>array_pop</h3>";
    $push = array_pop($a); // array_pop() tira o ultimo item da variavel (1)
    print_r($a);

    echo "<br> <h3>array_unshift</h3>";
    $push = array_unshift($a,7); // array_unshift() adiciona o item (2) no inicio da variavel (1)
    print_r($a);

    echo "<br> <h3>array_shift</h3>";
    $push = array_shift($a); // array_shift() tira o primeiro item da variavel (1)
    print_r($a);

    echo "<br> <h3>sort</h3>";
    $push = sort($a); // sort() coloca em ordem a variavel (1)
    print_r($a);

    echo "<br> <h3>rsort</h3>";
    $push = rsort($a); // rsort() coloca em ordem contraria a variavel (1)
    print_r($a);

    echo "<br> <h3>asort</h3>";
    $push = asort($a); // asort() coloca em ordem contraria a variavel (1) e os indices
    print_r($a);

    echo "<br> <h3>arsort</h3>";
    $push = arsort($a); // arsort() coloca em ordem contraria a variavel (1) e os indices ao contrario
    print_r($a);

    echo "<br> <h3>ksort</h3>";
    $push = ksort($a); // ksort() coloca em ordem de indices
    print_r($a);

    echo "<br> <h3>krsort</h3>";
    $push = krsort($a); // krsort() coloca em ordem de indices ao contrario
    print_r($a);
?>