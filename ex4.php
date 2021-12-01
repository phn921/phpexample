<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Array</h1>
    <h2>basic</h2>
    <?php
    $eng_score = array(
        85, 80, 90, 79, 80, 75, 69, 70, 89, 78,
        88, 90, 99, 88, 89, 75, 70, 80, 90, 100
    );
    $sum = 0;
    for ($a = 0; $a < 20; $a++) {
        $sum += $eng_score[$a];
    }
    $avg = $sum / 20;
    print "personal english score: ";
    for ($a = 0; $a < 20; $a++) {
        print($eng_score[$a] . " ");
    }
    print "<br> english score sum : $sum";
    print "<br> english score avg : $avg";

    ?>

</body>

</html>