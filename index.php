<!DOCTYPE html>
<html>
<head>
    <title>Naslov</title>
    <meta charset="UTF-8">
<head>

<body>
<h1>Ne prvo</h1>

<p>
    <?php
    echo('Hello from PHP');
    echo('<br>');
    echo("Today's date: ");
    echo(date('d.m.Y'));
    ?>

    <?php
    $date1 = ('Y-m-d');
    $date2 = ('2016-03-18');
    $diffrence = $date2 - $date1;
    echo('$diffrence');

    ?>
</p>

<p>
    <?php
    //$dana_do_praznika = 45;
    //echo('Do praznika je još ostalo: <b>' .$dana_do_praznika . '</b>');
    ?>
</p>
</body>
</html>

