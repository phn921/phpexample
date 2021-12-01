<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>

<body>
    <h1>String</h1>
    <h2>basic</h2>
    <?php
    $tel = "010-2777-3333";
    $num_tel = strlen($tel);
    print "strlen() function use : $num_tel <br>";
    $tel1 = substr($tel, 0, 3);
    $tel2 = substr($tel, 4, 4);
    $tel3 = substr($tel, 9, 4);
    print "substr() function use : $tel1  $tel2  $tel3 <br>";
    $phone = explode("-", $tel);
    print "explode() function use :$phone[0] $phone[1] $phone[2]<br>";
    ?>
</body>

</html>