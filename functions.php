<?php
declare(strict_types = 1);

$basketball_products = [
    'Molten BG4500 Basketball (Size 7)' => ['price' => 2450.00, 'stock' => 14],
    'Nike Precision High-Top Shoes'     => ['price' => 3800.00, 'stock' => 7],
    'Dri-FIT Reversible Team Jersey'    => ['price' => 750.00,  'stock' => 22],
    'Padded Compression Arm Sleeve'     => ['price' => 320.00,  'stock' => 6],
    'Heavy-Duty Basketball Rim Net'     => ['price' => 180.00,  'stock' => 4],
    'Padded Knee Guards (Pair)'         => ['price' => 680.00,  'stock' => 12],
];
$tax = 12;

function get_reorder_message(int $stock): string
{
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_order_message(int $stock): string
{
    return get_reorder_message($stock);
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angeles Ballin Store Stock Control</title>
    <link rel="stylesheet" href="BasicPHP1/css/stock.css?v=<?= time() ?>">
</head>
<body>
    <div class="container">
        <h1>Angeles Ballin Store</h1>
        <h2>Stock Control</h2>

        <table>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Re-order</th>
                <th>Total Value</th>
                <th>Tax Due (12%)</th>
            </tr>

            <?php foreach ($basketball_products as $product_name => $data) { ?>
                <tr>
                    <td><?= $product_name ?></td>
                    <td><?= $data['stock'] ?></td>
                    <td>
                        <?php $reorder = get_reorder_message($data['stock']); ?>
                        <span class="<?= ($reorder === 'Yes') ? 'reorder-yes' : 'reorder-no' ?>">
                            <?= $reorder ?>
                        </span>
                    </td>
                    <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2) ?></td>
                    <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax), 2) ?></td>
                </tr>
            <?php } ?>
        </table>

        <div class="footer-note">
            <p>&copy; <?= date('Y'); ?> Angeles Ballin Store | Created by: Joshua Halili</p>
        </div>
    </div>
</body>
</html>
