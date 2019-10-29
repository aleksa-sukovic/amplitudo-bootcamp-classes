<?php

$niz1 = [1, "2", true, [1, 2, 3]];
$niz2 = [
    0 => 'Jedan',
    '2' => 'Dva',
];
?>

<pre>
    <?php
//        print_r($niz);
//        var_dump($niz);
//        die("Gone!");

        $element = current($niz1);
        $element = next($niz1);
        $element = reset($niz1);
        echo $element;
    ?>
</pre>


