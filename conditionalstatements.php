<?php
#if statement
$name = 'joshua';
$greeting = 'Hello';

if ($name !== ''){
    $greeting = 'Welcome back, ' . $name; 
}

#if... else statement
$stock = 5;

if ($stock > 0){
    $message = 'In stock';
} else {
    $message = 'Sold out';
}

#ternary operators
$stocks = 5;

$message = ($stock > 0) ? 'In stock' : 'Sold out';

#if... elseIf statement
$stonks = 5;
$ordered = 3;

if ($stock > 0){
    $message = 'In stock';
} elseif ($ordered > 0) {
    $message = 'Coming soon';
} else {
    $message = 'Sold out';
}

#switch statement
$day = 'Monday';

switch($day){
    case 'Monday':
        $offer = '20% off candies';
        break;
    case 'Tuesday':
        $offer = '20% off gum';
        break;
    default:
        $offer = 'Buy three packs, get one free';
}

#match expressions
$day = 'Monday';

$offer = match($day) {
    'Monday'             => '20% off chocolates',
    'Saturday', 'Sunday' => '20% off mints',
    default              => '10% off your entire order',
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions & Operators</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $greeting?></h2>

    <h2>Ice Cream</h2>
    <p><?= $message ?></p>

    <h2>Candy</h2>
    <p><?= $message ?></p>

    <h2>Gum</h2>
    <p><?= $message ?></p>

    <h2>Offers on <?= $day; ?></h2>
    <p><?= $offer ?></p>
</body>
</html>