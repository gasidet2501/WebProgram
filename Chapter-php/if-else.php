<html>
<head><title>แสดงการใช้งาน if-else แบบ Nested </title>
</head>
<body>
    <?php
        $a = 76; $b = 16; $c = 56;
        $max = 0;
        if ($a > $b) {
            if ($a > $c) $max = $a;
            else $max = $c;
        }
        else {
            if ($b > $c) $min = $b;
            else $max = $c;

        }
        echo "Three Number : <b>$a, $b, $c </b><br/>";
        echo "Max value : <b>$max </b><br/>";
    ?>
</body>
</html>