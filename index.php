<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>BSIT 3-2 - ITEC 106 - Activity 2 - Amolat, Nommel Isanar Lavapie</title>
</head>
<body>
    <?php
        $n1 = $_REQUEST["n1"] ?? "";
        $n2 = $_REQUEST["n2"] ?? "";
        $n3 = $_REQUEST["n3"] ?? "";
    ?>

    <form action="index.php" method="GET">
        <input type="number" placeholder="First Number" name="n1" value="<?= $n1 ?>">
        <input type="number" placeholder="Second Number" name="n2" value="<?= $n2 ?>">
        <input type="number" placeholder="Third Number" name="n3" value="<?= $n3 ?>">
        <input type="submit" value="Submit">
    </form><!--
    --><div>
        <?php
            if($n1 !== "" and $n2 !== "" and $n3 !== "" and $n2 >= $n1) {
                $i = $n1;
                $total = 0;

                while($i != $n2) {
                    if($i % $n3 == 0) {
                        $total++;
                    }

                    $i++;
                }

                echo("<h3>First number: $n1</h3>");
                echo("<h3>Second number: $n2</h3>");
                echo("<h3>Third number: $n3</h3>");
                echo("<h3>Total number of integers from $n1 to $n2 that are divisible by $n3: $total</h3>");
            }
        ?>
    </div>
</body>
</html>