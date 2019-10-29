<html lang="en">
<head>
    <title>Uvod u PHP</title>
</head>
<body>
    <p>
        <?php
            $a = 10;
            $b = 20;
            echo "<h1>Zdravo!</h1>";
        ?>
    </p>
    <h1>Uvod u PHP</h1>
    <p>
        <?php
            // Single line comment
            /* Multiline comment */
            echo $a . " + " . $b . " = " . ($a + $b);

            $string1 = 'Ovo je broj ' . $a;
            $string2 = "Ovo je broj $a";
            $string3 = 'Ovo je broj $a';

            echo '<p>'  . $string2 . '</p>';
            echo '<p>'  . $string3 . '</p>';
        ?>
    </p>
    <p>
        <?php
            $prvi = 10;
            $drugi = 3;

            $zbir = $prvi + $drugi;
            $razlika = $prvi - $drugi;
            $kolicnik = $prvi / $drugi;
            $cjelobrojno = round($prvi / $drugi, 0, PHP_ROUND_HALF_UP);
            $ostatak = $prvi % $drugi;

            echo "<p>{ $zbir }</p>";
            echo "<p>{ $razlika }</p>";
            echo "<p>{ $kolicnik }</p>";
            echo "<p>{ $ostatak }</p>";
        ?>
    </p>
</body>
</html>
