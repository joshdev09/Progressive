<?php
#while loop
$counter = 1;
$packs   = 10;
$price   = 1.99;

#foreach loop - associative array
$products = [
    'Toffee'     => 2.99,
    'Mints'      => 1.99,
    'Fudge'      => 3.49,
    'Chocolates' => 4.99,
    'Gum'        => 0.99,
];

#foreach loop - indexed array
$best_sellers = ['Toffee', 'Mints', 'Fudge', 'Chocolates', 'Gum'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>

    <h2>Prices for Multiple Packs (While Loop)</h2>
    <p>
        <?php
        while ($counter < $packs) {
            echo $counter;
            echo ' packs cost $';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }
        ?>
    </p>

    <h2>Prices for Multiple Packs (Do...While Loop)</h2>
    <p>
        <?php
        #do...while loop
        $packs = 10;
        $price = 2.99;

        do {
            echo $packs;
            echo ' packs cost $';
            echo $price * $packs;
            echo '<br>';
            $packs--;
        } while ($packs > 0);
        ?>
    </p>

    <h2>Prices for Multiple Packs (For Loop)</h2>
    <p>
        <?php
        #for loop
        $price = 2.99;

        for ($i = 1; $i <= 20; $i++) {
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }
        ?>
    </p>

    <h2>Prices for Large Orders</h2>
    <p>
        <?php
        #for loop (large orders)
        $price = 1.99;

        for ($i = 10; $i <= 200; $i = $i + 10) {
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }
        ?>
    </p>

    <h2>Price List</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td>$<?= $price ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2>Best Sellers</h2>
    <?php foreach ($best_sellers as $candy) { ?>
        <p><?= $candy ?></p>
    <?php } ?>
</body>
</html>