<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <?php


$a = MySingleton::getInstance();
$a->setValue(1);
echo $a->getValue(); // outputs 1

$b = MySingleton::getInstance();
echo $b->getValue(); // outputs 1

$b->setValue(2);
echo $a->getValue(); // outputs 2

?>

</html>