<?php
$name = 'Arol';
$piece1 = 6;
$piece2 = 7;
$tot = $piece1 + $piece2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Juggling</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome, <?php echo $name; ?></h2>
    <p>If you have <?= $piece1 ?> and <?= $piece2?>, then you have a total of <?= $tot?>.</p>
    
</body>
</html>